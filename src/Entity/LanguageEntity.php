<?php

namespace AndyTruong\VCLang\Entity;

class LanguageEntity
{

    /**
     * Language written left to right. Possible value of $language->direction.
     */
    const DIRECTION_LTR = 0;

    /**
     * Language written right to left. Possible value of $language->direction.
     */
    const DIRECTION_RTL = 1;

    /**
     * The ID, langcode.
     *
     * @var string
     */
    protected $id;

    /**
     * The human readable English name.
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var type
     */
    public $direction = self::DIRECTION_LTR;

    /**
     * The weight, used for ordering languages in lists, like selects or tables.
     *
     * @var int
     */
    protected $weight = 0;

}
