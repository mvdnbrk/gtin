<?php

namespace Mvdnbrk\Gtin\Tests;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlueprintMacroTest extends TestCase
{
    /** @test */
    public function it_can_add_the_gtin_column()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->gtin();
        });

        $this->assertEquals('string', Schema::getColumnType('products', 'gtin'));
    }

    /** @test */
    public function it_can_add_the_gtin_column_with_a_custom_name()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->gtin('ean13');
        });

        $this->assertEquals([
            'ean13',
        ], Schema::getColumnListing('products'));
    }

    /** @test */
    public function it_can_drop_the_gtin_column()
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

    /** @test */
    public function it_can_drop_the_gtin_column_with_a_custom_name()
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
