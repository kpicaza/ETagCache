<?php
namespace Kpicaza\ETagCache;
/**
 * Interface ETagGeneratorInterface
 * @package AppBundle\ETagCache
 */
interface ETagGeneratorInterface
{
    public function create($content);
}
