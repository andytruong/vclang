<?php

namespace AndyTruong\VCLang\Entity;

abstract class LanguageAwareEntity
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
