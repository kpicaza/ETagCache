<?php
namespace Kpicaza\ETagCache;
/**
 * Interface CacheInterface
 * @package AppBundle\ETagCache
 */
interface ETagCacheInterface
{
    public function setETag($id, $item);
    public function getETag($item);
}
