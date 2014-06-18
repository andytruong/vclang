<?php

namespace AndyTruong\VCLang\Entity\Word;

/**
 * Word with extra properties, useful for real application.
 */
class WordEntity extends WordBaseEntity
{

    /**
     * Word should not be visible in any listing, search results. For example,
     * 'deep affection' is a synonym of 'love', but this term should not be a
     * standalone word.
     *
     * @var boolean
     */
    protected $visible = true;

    /**
     * Priority of term in dictionary. Lower is more important.
     *
     * @var int
     */
    protected $score;

    /**
     * Synonyms.
     *
     * @var WordEntity[]
     */
    protected $synonyms;

    /**
     * For example, LOVE has derivatives: loveworthy (adjective)
     *
     * @var WordEntity[]
     */
    protected $derivatives;

}
