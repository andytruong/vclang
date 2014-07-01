<?php

namespace AndyTruong\VCLang\RemoteEntity;

interface WebsiteInterface
{

    /**
     * Bad website, should be ignored.
     */
    const STATUS_BLOCKED = -1;

    /**
     * Website is offline, check later.
     */
    const STATUS_OFFLINE = 0;

    /**
     * Website is working fine.
     */
    const STATUS_ONLINE = 1;

}
