<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasGamesIcons
 * @package ByTIC\Icons\Icons
 */
trait HasGamesIcons
{
    public static function chess($options = []): Icon
    {
        return static::show(Icon::CHESS, $options);
    }

    public static function chessBishop($options = []): Icon
    {
        return static::show(Icon::CHESS_BISHOP, $options);
    }

    public static function chessBoard($options = []): Icon
    {
        return static::show(Icon::CHESS_BOARD, $options);
    }

    public static function chessKing($options = []): Icon
    {
        return static::show(Icon::CHESS_KING, $options);
    }

    public static function chessKnight($options = []): Icon
    {
        return static::show(Icon::CHESS_KNIGHT, $options);
    }

    public static function chessPawn($options = []): Icon
    {
        return static::show(Icon::CHESS_PAWN, $options);
    }

    public static function chessQueen($options = []): Icon
    {
        return static::show(Icon::CHESS_QUEEN, $options);
    }

    public static function chessRook($options = []): Icon
    {
        return static::show(Icon::CHESS_ROOK, $options);
    }

    public static function dice($options = []): Icon
    {
        return static::show(Icon::DICE, $options);
    }

    public static function diceD20($options = []): Icon
    {
        return static::show(Icon::DICE_D20, $options);
    }

    public static function diceD6($options = []): Icon
    {
        return static::show(Icon::DICE_D6, $options);
    }

    public static function diceFive($options = []): Icon
    {
        return static::show(Icon::DICE_FIVE, $options);
    }

    public static function diceFour($options = []): Icon
    {
        return static::show(Icon::DICE_FOUR, $options);
    }

    public static function diceOne($options = []): Icon
    {
        return static::show(Icon::DICE_ONE, $options);
    }

    public static function diceSix($options = []): Icon
    {
        return static::show(Icon::DICE_SIX, $options);
    }

    public static function diceThree($options = []): Icon
    {
        return static::show(Icon::DICE_THREE, $options);
    }

    public static function diceTwo($options = []): Icon
    {
        return static::show(Icon::DICE_TWO, $options);
    }

    public static function ghost($options = []): Icon
    {
        return static::show(Icon::GHOST, $options);
    }

    public static function headset($options = []): Icon
    {
        return static::show(Icon::HEADSET, $options);
    }

    public static function puzzlePiece($options = []): Icon
    {
        return static::show(Icon::PUZZLE_PIECE, $options);
    }
}
