<?php

namespace ByTIC\Icons\Collections;

use ByTIC\Icons\Icon;

/**
 * Class IconCollection
 * @package ByTIC\Icons\Collections
 */
class IconCollection
{
    protected $tag = 'i';

    public static function __callStatic($name, $arguments): Icon
    {
        return static::instance()->icon($name, $arguments);
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
//        $options['class'] = $this->getClasses($name, Arr::pull($options, 'class'));

        return new Icon($this->tag, $name, $options);
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
