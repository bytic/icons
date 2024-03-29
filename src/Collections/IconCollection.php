<?php

namespace ByTIC\Icons\Collections;

use ByTIC\Icons\Icon;
use Nip\Utility\Arr;

/**
 * Class IconCollection
 * @package ByTIC\Icons\Collections
 */
class IconCollection
{
    protected $tag = 'i';

    protected $rootPrefix = '';

    protected $prefix = '';

    protected $aliases = [];

    protected $categories = [];

    public static function __callStatic($name, $arguments): Icon
    {
        return static::instance()->icon($name, $arguments);
    }

    public function __call($name, $arguments): Icon
    {
        return $this->icon($name, $arguments);
    }

    public function categories(): array
    {
        return $this->categories;
    }

    /**
     * Builds an HTML icon.
     *
     * @param string $name    The icon name, as indicated in the FA documentation.
     * @param array  $options Extra class/es to add to the icon
     *
     * @return Icon
     */
    public function icon($name, $options = [])
    {
//        $options = $this->parseOptions($options);
//
        $options['class'] = $this->getClasses($name, Arr::pull($options, 'class'));

        return new Icon($this->tag, $name, $options);
    }

    /**
     * Returns all needed font-awesome classes, and any extra ones required.
     *
     * @param string $name
     * @param string $extra
     *
     * @return string
     */
    private function getClasses($name, $extra = '')
    {
        return trim(
            implode(
                ' ',
                [
                    $this->rootPrefix,
                    $this->parse($this->checkAlias($name)),
                    $extra
                ]
            )
        );
    }

    /**
     * Parses the given name, to check if it starts with "fa-" already.
     *
     * @param string $name
     *
     * @return string
     */
    private function parse($name)
    {
        if (strpos($name, "{$this->prefix}-") === 0) {
            return $name;
        }

        return "{$this->prefix}-{$name}";
    }

    protected function checkAlias($name)
    {
        if (isset($this->aliases[$name])) {
            return $this->aliases[$name];
        }
        return $name;
    }

    /**
     * Singleton
     *
     * @return self
     */
    public static function instance($newInstance = null)
    {
        static $instance;
        if ($newInstance instanceof static) {
            $instance = $newInstance;
        } elseif (!($instance instanceof static)) {
            $instance = new static();
        }
        return $instance;
    }
}
