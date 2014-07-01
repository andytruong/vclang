<?php

namespace AndyTruong\VCLang\Article;

/**
 * Class Article entity.
 *
 * Article can be crawled from a external source.
 */
class ArticleEntity
{

    /**
     *
     * @var int
     */
    private $id;

    /**
     *
     * @var type
     */
    private $slug;

    /**
     *
     * @var type
     */
    private $source_url;

    /**
     * …
     *
     * @var \AndyTruong\VCLang\Entity\LanguageEntity
     */
    private $language;

    /**
     * …
     *
     * @var string
     */
    private $title;

    /**
     *
     * @var type
     */
    private $body;

    /**
     * Created DateTime.
     *
     * @var \DateTime
     */
    private $created_at;

    /**
     * Updated DateTime.
     *
     * @var \DateTime
     */
    private $updated_at;

    /**
     *
     * @var type
     */
    private $taxonomy;

}
