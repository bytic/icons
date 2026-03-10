<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasEditorIcons
 * @package ByTIC\Icons\Icons
 */
trait HasEditorIcons
{
    public static function alignCenter($options = []): Icon
    {
        return static::show(Icon::ALIGN_CENTER, $options);
    }

    public static function alignJustify($options = []): Icon
    {
        return static::show(Icon::ALIGN_JUSTIFY, $options);
    }

    public static function alignLeft($options = []): Icon
    {
        return static::show(Icon::ALIGN_LEFT, $options);
    }

    public static function alignRight($options = []): Icon
    {
        return static::show(Icon::ALIGN_RIGHT, $options);
    }

    public static function bold($options = []): Icon
    {
        return static::show(Icon::BOLD, $options);
    }

    public static function borderAll($options = []): Icon
    {
        return static::show(Icon::BORDER_ALL, $options);
    }

    public static function borderNone($options = []): Icon
    {
        return static::show(Icon::BORDER_NONE, $options);
    }

    public static function borderStyle($options = []): Icon
    {
        return static::show(Icon::BORDER_STYLE, $options);
    }

    public static function clone($options = []): Icon
    {
        return static::show(Icon::CLONE, $options);
    }

    public static function font($options = []): Icon
    {
        return static::show(Icon::FONT, $options);
    }

    public static function heading($options = []): Icon
    {
        return static::show(Icon::HEADING, $options);
    }

    public static function iCursor($options = []): Icon
    {
        return static::show(Icon::I_CURSOR, $options);
    }

    public static function icons($options = []): Icon
    {
        return static::show(Icon::ICONS, $options);
    }

    public static function indent($options = []): Icon
    {
        return static::show(Icon::INDENT, $options);
    }

    public static function italic($options = []): Icon
    {
        return static::show(Icon::ITALIC, $options);
    }

    public static function link($options = []): Icon
    {
        return static::show(Icon::LINK, $options);
    }

    public static function list($options = []): Icon
    {
        return static::show(Icon::LIST, $options);
    }

    public static function listAlt($options = []): Icon
    {
        return static::show(Icon::LIST_ALT, $options);
    }

    public static function listOl($options = []): Icon
    {
        return static::show(Icon::LIST_OL, $options);
    }

    public static function listUl($options = []): Icon
    {
        return static::show(Icon::LIST_UL, $options);
    }

    public static function outdent($options = []): Icon
    {
        return static::show(Icon::OUTDENT, $options);
    }

    public static function paperPlane($options = []): Icon
    {
        return static::show(Icon::PAPER_PLANE, $options);
    }

    public static function paragraph($options = []): Icon
    {
        return static::show(Icon::PARAGRAPH, $options);
    }

    public static function quoteLeft($options = []): Icon
    {
        return static::show(Icon::QUOTE_LEFT, $options);
    }

    public static function quoteRight($options = []): Icon
    {
        return static::show(Icon::QUOTE_RIGHT, $options);
    }

    public static function removeFormat($options = []): Icon
    {
        return static::show(Icon::REMOVE_FORMAT, $options);
    }

    public static function screwdriver($options = []): Icon
    {
        return static::show(Icon::SCREWDRIVER, $options);
    }

    public static function spellCheck($options = []): Icon
    {
        return static::show(Icon::SPELL_CHECK, $options);
    }

    public static function strikethrough($options = []): Icon
    {
        return static::show(Icon::STRIKETHROUGH, $options);
    }

    public static function subscript($options = []): Icon
    {
        return static::show(Icon::SUBSCRIPT, $options);
    }

    public static function superscript($options = []): Icon
    {
        return static::show(Icon::SUPERSCRIPT, $options);
    }

    public static function th($options = []): Icon
    {
        return static::show(Icon::TH, $options);
    }

    public static function thLarge($options = []): Icon
    {
        return static::show(Icon::TH_LARGE, $options);
    }

    public static function thList($options = []): Icon
    {
        return static::show(Icon::TH_LIST, $options);
    }

    public static function tools($options = []): Icon
    {
        return static::show(Icon::TOOLS, $options);
    }

    public static function trash($options = []): Icon
    {
        return static::show(Icon::TRASH, $options);
    }

    public static function trashAlt($options = []): Icon
    {
        return static::show(Icon::TRASH_ALT, $options);
    }

    public static function trashRestore($options = []): Icon
    {
        return static::show(Icon::TRASH_RESTORE, $options);
    }

    public static function trashRestoreAlt($options = []): Icon
    {
        return static::show(Icon::TRASH_RESTORE_ALT, $options);
    }

    public static function underline($options = []): Icon
    {
        return static::show(Icon::UNDERLINE, $options);
    }

    public static function unlink($options = []): Icon
    {
        return static::show(Icon::UNLINK, $options);
    }

    public static function wrench($options = []): Icon
    {
        return static::show(Icon::WRENCH, $options);
    }
}
