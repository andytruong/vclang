<?php

namespace AndyTruong\VCLang\RemoteEntity;

class WebsiteEntity implements WebsiteInterface
{

    /**
     * Id
     *
     * @var int
     */
    private $id;

    /**
     * Top level domain (com, net, info, website, …)
     *
     * @var string
     */
    private $tld;

    /**
     * Description.
     *
     * @var string
     */
    private $description;

    /**
     * Site status (working, maintenance, shutdowned, blocked).
     *
     * @var int
     */
    private $status = WebsiteInterface::STATUS_ONLINE;

    /**
     * Primary = 0 / Secondary = 1 / …
     *
     * @var int
     */
    private $site_level = 0;

    /**
     * List of sub websites.
     *
     * @var WebsiteEntity[]
     */
    private $sub_websites = [];

}
