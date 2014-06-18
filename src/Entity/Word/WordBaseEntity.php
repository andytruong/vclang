<?php

namespace AndyTruong\VCLang\Entity\Word;

use AndyTruong\VCLang\Entity\DictionaryEntity;
use AndyTruong\VCLang\Entity\PronunciationEntity;

/**
 * Basic word, no specials properties.
 */
abstract class WordBaseEntity
{

    /**
     * ID
     *
     * @var int
     */
    protected $id;

    /**
     * Dictionary reference.
     *
     * @var DictionaryEntity
     */
    protected $dictionary;

    /**
     * How the term is written.
     *
     * @var string
     */
    protected $writing;

    /**
     * Meanings.
     *
     * @var MeaningEntity[]
     */
    protected $meanings;

    /**
     * Pronunciations.
     *
     * @var PronunciationEntity[]
     */
    protected $pronunciations;

}
