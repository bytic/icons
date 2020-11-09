<?php

namespace ByTIC\Icons;

/**
 * Class Icon
 * @package ByTIC\Icons
 */
class Icon
{
    protected $tag = 'i';

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $options;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    protected $html = null;

    /**
     * @param string $tag
     * @param string $name
     * @param array $options
     */
    public function __construct($tag, $name, array $options)
    {
        $this->tag = $tag;
        $this->name = $name;
        $this->options = $options;
    }

    /**
     * @param string $content
     *
     * @return Icon
     */
    public function withContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->html();
    }

    /**
     * Get content as a string of HTML.
     *
     * @return string
     */
    public function html()
    {
        if ($this->html === null) {
            $this->html = $this->generateHtml();
        }
        return $this->html;
    }

    protected function generateHtml(): string
    {
        return "<$this->tag" . $this->renderAttributes($this->options) . '>' . $this->content . '</' . $this->tag . '>';
    }

    /**
     * Build an HTML attribute string from an array.
     *
     * @param array $attributes
     *
     * @return string
     */
    protected function renderAttributes($attributes)
    {
        $html = [];

        foreach ((array)$attributes as $key => $value) {
            $element = $this->attributeElement($key, $value);

            if ($element !== null) {
                $html[] = $element;
            }
        }

        return count($html) > 0 ? ' ' . implode(' ', $html) : '';
    }


    /**
     * Build a single attribute element.
     *
     * @param string $key
     * @param string $value
     *
     * @return string
     */
    private function attributeElement($key, $value)
    {
        // For numeric keys we will assume that the key and the value are the same
        // as this will convert HTML attributes such as "required" to a correct
        // form like required="required" instead of using incorrect numerics.
        if (is_numeric($key)) {
            $key = $value;
        }

        if ($value !== null) {
            return $key . '="' . $value . '"';
        }
    }
}