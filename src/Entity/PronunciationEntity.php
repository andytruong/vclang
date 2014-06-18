<?php

namespace AndyTruong\VCLang\Entity;

use Model;

class PronunciationEntity extends Model
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
