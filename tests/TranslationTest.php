<?php

namespace Mvdnbrk\Gtin\Tests;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Attributes\Test;

class TranslationTest extends TestCase
{
    #[Test]
    public function an_error_message_gets_translated(): void
    {
        App::setLocale('nl');

        $validator = Validator::make(
            ['field' => 'invalid-gtin'],
            ['field' => 'gtin']
        );

        $this->assertEquals(
            'Het veld field moet een geldig Global Trade Item Number (GTIN) zijn.',
            $validator->errors()->first('field')
        );
    }
}
