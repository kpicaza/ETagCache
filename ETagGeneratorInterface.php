<?php
namespace AppBundle\Cache;
/**
 * Interface ETagGeneratorInterface
 * @package AppBundle\Cache
 */
interface ETagGeneratorInterface
{
    public function create($content);
}