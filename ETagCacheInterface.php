<?php
namespace AppBundle\Cache;
/**
 * Interface CacheInterface
 * @package AppBundle\Cache
 */
interface ETagCacheInterface
{
    public function setETag($id, $item);
    public function getETag($item);
}
