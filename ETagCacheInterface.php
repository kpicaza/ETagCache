<?php
namespace Kpicaza\ETagCache;
/**
 * Interface CacheInterface
 * @package Kpicaza\ETagCache
 */
interface ETagCacheInterface
{
    public function setETag($id, $item);
    public function getETag($item);
}
