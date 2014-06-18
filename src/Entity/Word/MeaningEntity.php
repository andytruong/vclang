<?php

namespace AndyTruong\VCLang\Entity\Word;

/**
 * A meaning is a property of a word in a dictionary.
 */
class MeaningEntity
{

    /**
     * @var int
     */
    protected $id;

    /**
     * Type of word (noun, verb, adjective, …)
     *
     * @var string
     */
    protected $type;

    /**
     * Defintion.
     *
     * @var string
     */
    protected $definition;

    /**
     * Examples.
     *
     * @var string[]
     */
    protected $examples;

}
