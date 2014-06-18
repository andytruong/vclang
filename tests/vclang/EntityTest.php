<?php

namespace AndyTruong\VCLang\Testing;

use PHPUnit_Framework_TestCase;

class EntityTest extends PHPUnit_Framework_TestCase
{

    /**
     * There is no syntax error in entity definition.
     * 
     * @dataProvider dataProviderCreate
     */
    public function testCreate($class_name)
    {
        $object = new $class_name;
        $this->assertInstanceOf($class_name, $object);
    }

    public function dataProviderCreate()
    {
        return [
            ['AndyTruong\VCLang\Entity\LanguageEntity'],
            ['AndyTruong\VCLang\Entity\DictionaryEntity'],
            ['AndyTruong\VCLang\Entity\Word\PronunciationEntity'],
            ['AndyTruong\VCLang\Entity\Word\IdiomEntity'],
            ['AndyTruong\VCLang\Entity\Word\MeaningEntity'],
            ['AndyTruong\VCLang\Entity\Word\WordEntity']
        ];
    }

}
