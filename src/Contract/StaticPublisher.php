<?php

namespace SilverStripe\StaticPublishQueue\Contract;

interface StaticPublisher
{
    /**
     * @param string $url
     * @param bool $forcePublish
     * @return array A result array
     */
    public function publishURL($url, $forcePublish = false);

    /**
     * @param string $url
     * @return array A result array
     */
    public function purgeURL($url): array;

    /**
     * return true on success
     * @return bool
     */
    public function purgeAll(): bool;

    /**
     * @return array
     */
    public function getPublishedURLs();
}
