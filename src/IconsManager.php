<?php

namespace ByTIC\Icons;

use ByTIC\Icons\Collections\CollectionsManager;
use ByTIC\Icons\Collections\IconCollection;
use Nip\Utility\Traits\SingletonTrait;

/**
 * Class IconsManager
 * @package ByTIC\Icons
 */
class IconsManager
{
    use SingletonTrait;

    /**
     * @var IconCollection[]
     */
    protected $collections = [];

    /**
     * @var string
     */
    protected $defaultCollection;

    /**
     * @param string $defaultCollection
     */
    public function __construct($defaultCollection = CollectionsManager::FONT_AWESOME_SOLID)
    {
        $this->defaultCollection = $defaultCollection;
    }

    /**
     * @param string $name
     * @param array $options
     *
     * @return Icon
     */
    public function icon($name, $options = [])
    {
        return $this->create($this->defaultCollection)->icon($name, $options);
    }

    /**
     * @param string $name
     *
     * @return IconCollection
     */
    public function create(string $name): IconCollection
    {
        return $this->collections[$name] ?? $this->collections[$name] = CollectionsManager::create($name);
    }
}