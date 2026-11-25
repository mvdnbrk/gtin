<?php

namespace Mvdnbrk\Gtin\Tests;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Fluent;
use PHPUnit\Framework\Attributes\Test;

class BlueprintMacroTest extends TestCase
{
    #[Test]
    public function it_can_add_the_gtin_column(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->gtin();
        });

        $this->assertSame('varchar', Schema::getColumnType('products', 'gtin'));
    }

    #[Test]
    public function it_is_chainable(): void
    {
        $table = new Blueprint(Schema::getConnection(), 'products');

        $this->assertInstanceOf(Fluent::class, $table->gtin());
    }

    #[Test]
    public function it_can_add_the_gtin_column_with_a_custom_name(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->gtin('ean13');
        });

        $this->assertEquals([
            'ean13',
        ], Schema::getColumnListing('products'));
    }

    #[Test]
    public function it_can_drop_the_gtin_column(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->gtin();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropGtin();
        });

        $this->assertEquals([
            'id',
        ], Schema::getColumnListing('products'));
    }

    #[Test]
    public function it_can_drop_the_gtin_column_with_a_custom_name(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->gtin('ean13');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropGtin('ean13');
        });

        $this->assertEquals([
            'id',
        ], Schema::getColumnListing('products'));
    }
}
