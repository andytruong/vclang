<?php

namespace AndyTruong\VCLang\Testing;

use Doctrine\ORM\EntityManager;
use PHPUnit_Framework_TestCase;
use VCLangBootstrap;

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

    /**
     * @return EntityManager
     */
    private function getEntityManager()
    {
        return VCLangBootstrap::getEm();
    }

    public function testDoctrineEntity()
    {
        $em = $this->getEntityManager();
        $this->assertInstanceOf('Doctrine\ORM\EntityManagerInterface', $em);

        $language = new \AndyTruong\VCLang\Entity\LanguageEntity();
        $em->persist($language);
        $em->flush();
    }

}
