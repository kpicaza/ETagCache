<?php
namespace Kpicaza\ETagCache;
/**
 * Interface ETagGeneratorInterface
 * @package Kpicaza\ETagCache
 */
interface ETagGeneratorInterface
{
    public function create($content);
}
