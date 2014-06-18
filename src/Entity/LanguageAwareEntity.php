<?php

namespace AndyTruong\VCLang\Entity;

use Model;

abstract class LanguageAwareEntity extends Model
{

    /**
     * Source Language.
     *
     * @var LanguageEntity
     */
    protected $source_language;

    /**
     * Destination language.
     *
     * @var LanguageEntity
     */
    protected $dest_language;

}
