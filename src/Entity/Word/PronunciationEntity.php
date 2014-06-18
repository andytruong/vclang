<?php

namespace AndyTruong\VCLang\Entity\Word;

class PronunciationEntity
{

    /**
     * ID
     *
     * @var int
     */
    protected $id;

    /**
     * How to write this down, for example, LOVE can be written as /lʌv/
     *
     * @var string
     */
    protected $writing;

    /**
     * Sring (UK, US, AU, …)
     *
     * @var string
     */
    protected $type;

}
