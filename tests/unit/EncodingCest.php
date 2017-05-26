<?php

use Zver\Encoding;

class EncodingCest
{
    
    public function encodingTest(UnitTester $I)
    {
        $availableEncodings = mb_list_encodings();
        
        $unAvailableEncodings = array_map(
            function ($element)
            {
                return rand() . $element . rand() . rand();
            }, $availableEncodings
        );
        
        $I->assertSame(Encoding::get(), 'UTF-8');
        
        foreach ($availableEncodings as $encoding)
        {
            Encoding::set($encoding);
            $I->assertSame(Encoding::get(), $encoding);
        }
        
        foreach ($unAvailableEncodings as $encoding)
        {
            $I->expectException(
                'Zver\Exceptions\Encoding\UnknownEncodingException', function () use ($encoding)
            {
                Encoding::set($encoding);
            }
            );
        }
        
        Encoding::set('UTF-8');
    }
}
