<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasGenericIcons
 *
 * Provides static accessor methods for all Font Awesome 5 Solid icons.
 *
 * @package ByTIC\Icons\Icons
 */
trait HasGenericIcons
{
    /**
     * Alias for check(). Kept for backwards compatibility.
     *
     * @param array $options
     * @return Icon
     */
    public static function ok($options = []): Icon
    {
        return static::show(Icon::CHECK, $options);
    }

    /**
     * Alias for listUl(). Kept for backwards compatibility.
     *
     * @param array $options
     * @return Icon
     */
    public static function list_ul($options = []): Icon
    {
        return static::show(Icon::LIST_UL, $options);
    }

    /**
     * Maps to 'trash-alt' via collection alias. Kept for backwards compatibility.
     *
     * @param array $options
     * @return Icon
     */
    public static function remove($options = []): Icon
    {
        return static::show(Icon::REMOVE, $options);
    }

    public static function abacus($options = []): Icon
    {
        return static::show(Icon::ABACUS, $options);
    }

    public static function ad($options = []): Icon
    {
        return static::show(Icon::AD, $options);
    }

    public static function addressBook($options = []): Icon
    {
        return static::show(Icon::ADDRESS_BOOK, $options);
    }

    public static function addressCard($options = []): Icon
    {
        return static::show(Icon::ADDRESS_CARD, $options);
    }

    public static function adjust($options = []): Icon
    {
        return static::show(Icon::ADJUST, $options);
    }

    public static function airFreshener($options = []): Icon
    {
        return static::show(Icon::AIR_FRESHENER, $options);
    }

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

    public static function allergies($options = []): Icon
    {
        return static::show(Icon::ALLERGIES, $options);
    }

    public static function ambulance($options = []): Icon
    {
        return static::show(Icon::AMBULANCE, $options);
    }

    public static function americanSignLanguageInterpreting($options = []): Icon
    {
        return static::show(Icon::AMERICAN_SIGN_LANGUAGE_INTERPRETING, $options);
    }

    public static function anchor($options = []): Icon
    {
        return static::show(Icon::ANCHOR, $options);
    }

    public static function angleDoubleDown($options = []): Icon
    {
        return static::show(Icon::ANGLE_DOUBLE_DOWN, $options);
    }

    public static function angleDoubleLeft($options = []): Icon
    {
        return static::show(Icon::ANGLE_DOUBLE_LEFT, $options);
    }

    public static function angleDoubleRight($options = []): Icon
    {
        return static::show(Icon::ANGLE_DOUBLE_RIGHT, $options);
    }

    public static function angleDoubleUp($options = []): Icon
    {
        return static::show(Icon::ANGLE_DOUBLE_UP, $options);
    }

    public static function angleDown($options = []): Icon
    {
        return static::show(Icon::ANGLE_DOWN, $options);
    }

    public static function angleLeft($options = []): Icon
    {
        return static::show(Icon::ANGLE_LEFT, $options);
    }

    public static function angleRight($options = []): Icon
    {
        return static::show(Icon::ANGLE_RIGHT, $options);
    }

    public static function angleUp($options = []): Icon
    {
        return static::show(Icon::ANGLE_UP, $options);
    }

    public static function angry($options = []): Icon
    {
        return static::show(Icon::ANGRY, $options);
    }

    public static function ankh($options = []): Icon
    {
        return static::show(Icon::ANKH, $options);
    }

    public static function appleAlt($options = []): Icon
    {
        return static::show(Icon::APPLE_ALT, $options);
    }

    public static function archive($options = []): Icon
    {
        return static::show(Icon::ARCHIVE, $options);
    }

    public static function archway($options = []): Icon
    {
        return static::show(Icon::ARCHWAY, $options);
    }

    public static function arrowAltCircleDown($options = []): Icon
    {
        return static::show(Icon::ARROW_ALT_CIRCLE_DOWN, $options);
    }

    public static function arrowAltCircleLeft($options = []): Icon
    {
        return static::show(Icon::ARROW_ALT_CIRCLE_LEFT, $options);
    }

    public static function arrowAltCircleRight($options = []): Icon
    {
        return static::show(Icon::ARROW_ALT_CIRCLE_RIGHT, $options);
    }

    public static function arrowAltCircleUp($options = []): Icon
    {
        return static::show(Icon::ARROW_ALT_CIRCLE_UP, $options);
    }

    public static function arrowCircleDown($options = []): Icon
    {
        return static::show(Icon::ARROW_CIRCLE_DOWN, $options);
    }

    public static function arrowCircleLeft($options = []): Icon
    {
        return static::show(Icon::ARROW_CIRCLE_LEFT, $options);
    }

    public static function arrowCircleRight($options = []): Icon
    {
        return static::show(Icon::ARROW_CIRCLE_RIGHT, $options);
    }

    public static function arrowCircleUp($options = []): Icon
    {
        return static::show(Icon::ARROW_CIRCLE_UP, $options);
    }

    public static function arrowDown($options = []): Icon
    {
        return static::show(Icon::ARROW_DOWN, $options);
    }

    public static function arrowLeft($options = []): Icon
    {
        return static::show(Icon::ARROW_LEFT, $options);
    }

    public static function arrowRight($options = []): Icon
    {
        return static::show(Icon::ARROW_RIGHT, $options);
    }

    public static function arrowUp($options = []): Icon
    {
        return static::show(Icon::ARROW_UP, $options);
    }

    public static function arrowsAlt($options = []): Icon
    {
        return static::show(Icon::ARROWS_ALT, $options);
    }

    public static function arrowsAltH($options = []): Icon
    {
        return static::show(Icon::ARROWS_ALT_H, $options);
    }

    public static function arrowsAltV($options = []): Icon
    {
        return static::show(Icon::ARROWS_ALT_V, $options);
    }

    public static function assistiveListeningSystems($options = []): Icon
    {
        return static::show(Icon::ASSISTIVE_LISTENING_SYSTEMS, $options);
    }

    public static function asterisk($options = []): Icon
    {
        return static::show(Icon::ASTERISK, $options);
    }

    public static function at($options = []): Icon
    {
        return static::show(Icon::AT, $options);
    }

    public static function atlas($options = []): Icon
    {
        return static::show(Icon::ATLAS, $options);
    }

    public static function atom($options = []): Icon
    {
        return static::show(Icon::ATOM, $options);
    }

    public static function audioDescription($options = []): Icon
    {
        return static::show(Icon::AUDIO_DESCRIPTION, $options);
    }

    public static function award($options = []): Icon
    {
        return static::show(Icon::AWARD, $options);
    }

    public static function baby($options = []): Icon
    {
        return static::show(Icon::BABY, $options);
    }

    public static function babyCarriage($options = []): Icon
    {
        return static::show(Icon::BABY_CARRIAGE, $options);
    }

    public static function backspace($options = []): Icon
    {
        return static::show(Icon::BACKSPACE, $options);
    }

    public static function backward($options = []): Icon
    {
        return static::show(Icon::BACKWARD, $options);
    }

    public static function bacon($options = []): Icon
    {
        return static::show(Icon::BACON, $options);
    }

    public static function bacteria($options = []): Icon
    {
        return static::show(Icon::BACTERIA, $options);
    }

    public static function bacterium($options = []): Icon
    {
        return static::show(Icon::BACTERIUM, $options);
    }

    public static function bahai($options = []): Icon
    {
        return static::show(Icon::BAHAI, $options);
    }

    public static function balanceScale($options = []): Icon
    {
        return static::show(Icon::BALANCE_SCALE, $options);
    }

    public static function balanceScaleLeft($options = []): Icon
    {
        return static::show(Icon::BALANCE_SCALE_LEFT, $options);
    }

    public static function balanceScaleRight($options = []): Icon
    {
        return static::show(Icon::BALANCE_SCALE_RIGHT, $options);
    }

    public static function ban($options = []): Icon
    {
        return static::show(Icon::BAN, $options);
    }

    public static function bandAid($options = []): Icon
    {
        return static::show(Icon::BAND_AID, $options);
    }

    public static function barcode($options = []): Icon
    {
        return static::show(Icon::BARCODE, $options);
    }

    public static function bars($options = []): Icon
    {
        return static::show(Icon::BARS, $options);
    }

    public static function baseballBall($options = []): Icon
    {
        return static::show(Icon::BASEBALL_BALL, $options);
    }

    public static function basketballBall($options = []): Icon
    {
        return static::show(Icon::BASKETBALL_BALL, $options);
    }

    public static function bath($options = []): Icon
    {
        return static::show(Icon::BATH, $options);
    }

    public static function batteryEmpty($options = []): Icon
    {
        return static::show(Icon::BATTERY_EMPTY, $options);
    }

    public static function batteryFull($options = []): Icon
    {
        return static::show(Icon::BATTERY_FULL, $options);
    }

    public static function batteryHalf($options = []): Icon
    {
        return static::show(Icon::BATTERY_HALF, $options);
    }

    public static function batteryQuarter($options = []): Icon
    {
        return static::show(Icon::BATTERY_QUARTER, $options);
    }

    public static function batteryThreeQuarters($options = []): Icon
    {
        return static::show(Icon::BATTERY_THREE_QUARTERS, $options);
    }

    public static function bed($options = []): Icon
    {
        return static::show(Icon::BED, $options);
    }

    public static function beer($options = []): Icon
    {
        return static::show(Icon::BEER, $options);
    }

    public static function bell($options = []): Icon
    {
        return static::show(Icon::BELL, $options);
    }

    public static function bellSlash($options = []): Icon
    {
        return static::show(Icon::BELL_SLASH, $options);
    }

    public static function bezierCurve($options = []): Icon
    {
        return static::show(Icon::BEZIER_CURVE, $options);
    }

    public static function bible($options = []): Icon
    {
        return static::show(Icon::BIBLE, $options);
    }

    public static function bicycle($options = []): Icon
    {
        return static::show(Icon::BICYCLE, $options);
    }

    public static function biking($options = []): Icon
    {
        return static::show(Icon::BIKING, $options);
    }

    public static function binoculars($options = []): Icon
    {
        return static::show(Icon::BINOCULARS, $options);
    }

    public static function biohazard($options = []): Icon
    {
        return static::show(Icon::BIOHAZARD, $options);
    }

    public static function birthdayCake($options = []): Icon
    {
        return static::show(Icon::BIRTHDAY_CAKE, $options);
    }

    public static function blender($options = []): Icon
    {
        return static::show(Icon::BLENDER, $options);
    }

    public static function blenderPhone($options = []): Icon
    {
        return static::show(Icon::BLENDER_PHONE, $options);
    }

    public static function blind($options = []): Icon
    {
        return static::show(Icon::BLIND, $options);
    }

    public static function blog($options = []): Icon
    {
        return static::show(Icon::BLOG, $options);
    }

    public static function bold($options = []): Icon
    {
        return static::show(Icon::BOLD, $options);
    }

    public static function bolt($options = []): Icon
    {
        return static::show(Icon::BOLT, $options);
    }

    public static function bomb($options = []): Icon
    {
        return static::show(Icon::BOMB, $options);
    }

    public static function bone($options = []): Icon
    {
        return static::show(Icon::BONE, $options);
    }

    public static function bong($options = []): Icon
    {
        return static::show(Icon::BONG, $options);
    }

    public static function book($options = []): Icon
    {
        return static::show(Icon::BOOK, $options);
    }

    public static function bookDead($options = []): Icon
    {
        return static::show(Icon::BOOK_DEAD, $options);
    }

    public static function bookMedical($options = []): Icon
    {
        return static::show(Icon::BOOK_MEDICAL, $options);
    }

    public static function bookOpen($options = []): Icon
    {
        return static::show(Icon::BOOK_OPEN, $options);
    }

    public static function bookReader($options = []): Icon
    {
        return static::show(Icon::BOOK_READER, $options);
    }

    public static function bookmark($options = []): Icon
    {
        return static::show(Icon::BOOKMARK, $options);
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

    public static function bowlingBall($options = []): Icon
    {
        return static::show(Icon::BOWLING_BALL, $options);
    }

    public static function box($options = []): Icon
    {
        return static::show(Icon::BOX, $options);
    }

    public static function boxOpen($options = []): Icon
    {
        return static::show(Icon::BOX_OPEN, $options);
    }

    public static function boxTissue($options = []): Icon
    {
        return static::show(Icon::BOX_TISSUE, $options);
    }

    public static function boxes($options = []): Icon
    {
        return static::show(Icon::BOXES, $options);
    }

    public static function braille($options = []): Icon
    {
        return static::show(Icon::BRAILLE, $options);
    }

    public static function brain($options = []): Icon
    {
        return static::show(Icon::BRAIN, $options);
    }

    public static function breadSlice($options = []): Icon
    {
        return static::show(Icon::BREAD_SLICE, $options);
    }

    public static function briefcase($options = []): Icon
    {
        return static::show(Icon::BRIEFCASE, $options);
    }

    public static function briefcaseMedical($options = []): Icon
    {
        return static::show(Icon::BRIEFCASE_MEDICAL, $options);
    }

    public static function broadcastTower($options = []): Icon
    {
        return static::show(Icon::BROADCAST_TOWER, $options);
    }

    public static function broom($options = []): Icon
    {
        return static::show(Icon::BROOM, $options);
    }

    public static function brush($options = []): Icon
    {
        return static::show(Icon::BRUSH, $options);
    }

    public static function bug($options = []): Icon
    {
        return static::show(Icon::BUG, $options);
    }

    public static function building($options = []): Icon
    {
        return static::show(Icon::BUILDING, $options);
    }

    public static function bullhorn($options = []): Icon
    {
        return static::show(Icon::BULLHORN, $options);
    }

    public static function bullseye($options = []): Icon
    {
        return static::show(Icon::BULLSEYE, $options);
    }

    public static function burn($options = []): Icon
    {
        return static::show(Icon::BURN, $options);
    }

    public static function bus($options = []): Icon
    {
        return static::show(Icon::BUS, $options);
    }

    public static function busAlt($options = []): Icon
    {
        return static::show(Icon::BUS_ALT, $options);
    }

    public static function businessTime($options = []): Icon
    {
        return static::show(Icon::BUSINESS_TIME, $options);
    }

    public static function calculator($options = []): Icon
    {
        return static::show(Icon::CALCULATOR, $options);
    }

    public static function calculatorAlt($options = []): Icon
    {
        return static::show(Icon::CALCULATOR_ALT, $options);
    }

    public static function calendar($options = []): Icon
    {
        return static::show(Icon::CALENDAR, $options);
    }

    public static function calendarAlt($options = []): Icon
    {
        return static::show(Icon::CALENDAR_ALT, $options);
    }

    public static function calendarCheck($options = []): Icon
    {
        return static::show(Icon::CALENDAR_CHECK, $options);
    }

    public static function calendarDay($options = []): Icon
    {
        return static::show(Icon::CALENDAR_DAY, $options);
    }

    public static function calendarMinus($options = []): Icon
    {
        return static::show(Icon::CALENDAR_MINUS, $options);
    }

    public static function calendarPlus($options = []): Icon
    {
        return static::show(Icon::CALENDAR_PLUS, $options);
    }

    public static function calendarTimes($options = []): Icon
    {
        return static::show(Icon::CALENDAR_TIMES, $options);
    }

    public static function calendarWeek($options = []): Icon
    {
        return static::show(Icon::CALENDAR_WEEK, $options);
    }

    public static function camera($options = []): Icon
    {
        return static::show(Icon::CAMERA, $options);
    }

    public static function cameraRetro($options = []): Icon
    {
        return static::show(Icon::CAMERA_RETRO, $options);
    }

    public static function campground($options = []): Icon
    {
        return static::show(Icon::CAMPGROUND, $options);
    }

    public static function candyCane($options = []): Icon
    {
        return static::show(Icon::CANDY_CANE, $options);
    }

    public static function cannabis($options = []): Icon
    {
        return static::show(Icon::CANNABIS, $options);
    }

    public static function capsules($options = []): Icon
    {
        return static::show(Icon::CAPSULES, $options);
    }

    public static function car($options = []): Icon
    {
        return static::show(Icon::CAR, $options);
    }

    public static function carAlt($options = []): Icon
    {
        return static::show(Icon::CAR_ALT, $options);
    }

    public static function carBattery($options = []): Icon
    {
        return static::show(Icon::CAR_BATTERY, $options);
    }

    public static function carCrash($options = []): Icon
    {
        return static::show(Icon::CAR_CRASH, $options);
    }

    public static function carSide($options = []): Icon
    {
        return static::show(Icon::CAR_SIDE, $options);
    }

    public static function caravan($options = []): Icon
    {
        return static::show(Icon::CARAVAN, $options);
    }

    public static function caretDown($options = []): Icon
    {
        return static::show(Icon::CARET_DOWN, $options);
    }

    public static function caretLeft($options = []): Icon
    {
        return static::show(Icon::CARET_LEFT, $options);
    }

    public static function caretRight($options = []): Icon
    {
        return static::show(Icon::CARET_RIGHT, $options);
    }

    public static function caretSquareDown($options = []): Icon
    {
        return static::show(Icon::CARET_SQUARE_DOWN, $options);
    }

    public static function caretSquareLeft($options = []): Icon
    {
        return static::show(Icon::CARET_SQUARE_LEFT, $options);
    }

    public static function caretSquareRight($options = []): Icon
    {
        return static::show(Icon::CARET_SQUARE_RIGHT, $options);
    }

    public static function caretSquareUp($options = []): Icon
    {
        return static::show(Icon::CARET_SQUARE_UP, $options);
    }

    public static function caretUp($options = []): Icon
    {
        return static::show(Icon::CARET_UP, $options);
    }

    public static function carrot($options = []): Icon
    {
        return static::show(Icon::CARROT, $options);
    }

    public static function cartArrowDown($options = []): Icon
    {
        return static::show(Icon::CART_ARROW_DOWN, $options);
    }

    public static function cartPlus($options = []): Icon
    {
        return static::show(Icon::CART_PLUS, $options);
    }

    public static function cashRegister($options = []): Icon
    {
        return static::show(Icon::CASH_REGISTER, $options);
    }

    public static function cat($options = []): Icon
    {
        return static::show(Icon::CAT, $options);
    }

    public static function certificate($options = []): Icon
    {
        return static::show(Icon::CERTIFICATE, $options);
    }

    public static function chair($options = []): Icon
    {
        return static::show(Icon::CHAIR, $options);
    }

    public static function chalkboard($options = []): Icon
    {
        return static::show(Icon::CHALKBOARD, $options);
    }

    public static function chalkboardTeacher($options = []): Icon
    {
        return static::show(Icon::CHALKBOARD_TEACHER, $options);
    }

    public static function chargingStation($options = []): Icon
    {
        return static::show(Icon::CHARGING_STATION, $options);
    }

    public static function chartArea($options = []): Icon
    {
        return static::show(Icon::CHART_AREA, $options);
    }

    public static function chartBar($options = []): Icon
    {
        return static::show(Icon::CHART_BAR, $options);
    }

    public static function chartLine($options = []): Icon
    {
        return static::show(Icon::CHART_LINE, $options);
    }

    public static function chartPie($options = []): Icon
    {
        return static::show(Icon::CHART_PIE, $options);
    }

    public static function check($options = []): Icon
    {
        return static::show(Icon::CHECK, $options);
    }

    public static function checkCircle($options = []): Icon
    {
        return static::show(Icon::CHECK_CIRCLE, $options);
    }

    public static function checkDouble($options = []): Icon
    {
        return static::show(Icon::CHECK_DOUBLE, $options);
    }

    public static function checkSquare($options = []): Icon
    {
        return static::show(Icon::CHECK_SQUARE, $options);
    }

    public static function cheese($options = []): Icon
    {
        return static::show(Icon::CHEESE, $options);
    }

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

    public static function chevronCircleDown($options = []): Icon
    {
        return static::show(Icon::CHEVRON_CIRCLE_DOWN, $options);
    }

    public static function chevronCircleLeft($options = []): Icon
    {
        return static::show(Icon::CHEVRON_CIRCLE_LEFT, $options);
    }

    public static function chevronCircleRight($options = []): Icon
    {
        return static::show(Icon::CHEVRON_CIRCLE_RIGHT, $options);
    }

    public static function chevronCircleUp($options = []): Icon
    {
        return static::show(Icon::CHEVRON_CIRCLE_UP, $options);
    }

    public static function chevronDown($options = []): Icon
    {
        return static::show(Icon::CHEVRON_DOWN, $options);
    }

    public static function chevronLeft($options = []): Icon
    {
        return static::show(Icon::CHEVRON_LEFT, $options);
    }

    public static function chevronRight($options = []): Icon
    {
        return static::show(Icon::CHEVRON_RIGHT, $options);
    }

    public static function chevronUp($options = []): Icon
    {
        return static::show(Icon::CHEVRON_UP, $options);
    }

    public static function child($options = []): Icon
    {
        return static::show(Icon::CHILD, $options);
    }

    public static function church($options = []): Icon
    {
        return static::show(Icon::CHURCH, $options);
    }

    public static function circle($options = []): Icon
    {
        return static::show(Icon::CIRCLE, $options);
    }

    public static function circleNotch($options = []): Icon
    {
        return static::show(Icon::CIRCLE_NOTCH, $options);
    }

    public static function city($options = []): Icon
    {
        return static::show(Icon::CITY, $options);
    }

    public static function clinicMedical($options = []): Icon
    {
        return static::show(Icon::CLINIC_MEDICAL, $options);
    }

    public static function clipboard($options = []): Icon
    {
        return static::show(Icon::CLIPBOARD, $options);
    }

    public static function clipboardCheck($options = []): Icon
    {
        return static::show(Icon::CLIPBOARD_CHECK, $options);
    }

    public static function clipboardList($options = []): Icon
    {
        return static::show(Icon::CLIPBOARD_LIST, $options);
    }

    public static function clock($options = []): Icon
    {
        return static::show(Icon::CLOCK, $options);
    }

    public static function clone($options = []): Icon
    {
        return static::show(Icon::CLONE, $options);
    }

    public static function closedCaptioning($options = []): Icon
    {
        return static::show(Icon::CLOSED_CAPTIONING, $options);
    }

    public static function cloud($options = []): Icon
    {
        return static::show(Icon::CLOUD, $options);
    }

    public static function cloudDownloadAlt($options = []): Icon
    {
        return static::show(Icon::CLOUD_DOWNLOAD_ALT, $options);
    }

    public static function cloudMeatball($options = []): Icon
    {
        return static::show(Icon::CLOUD_MEATBALL, $options);
    }

    public static function cloudMoon($options = []): Icon
    {
        return static::show(Icon::CLOUD_MOON, $options);
    }

    public static function cloudMoonRain($options = []): Icon
    {
        return static::show(Icon::CLOUD_MOON_RAIN, $options);
    }

    public static function cloudRain($options = []): Icon
    {
        return static::show(Icon::CLOUD_RAIN, $options);
    }

    public static function cloudShowersHeavy($options = []): Icon
    {
        return static::show(Icon::CLOUD_SHOWERS_HEAVY, $options);
    }

    public static function cloudSun($options = []): Icon
    {
        return static::show(Icon::CLOUD_SUN, $options);
    }

    public static function cloudSunRain($options = []): Icon
    {
        return static::show(Icon::CLOUD_SUN_RAIN, $options);
    }

    public static function cloudUploadAlt($options = []): Icon
    {
        return static::show(Icon::CLOUD_UPLOAD_ALT, $options);
    }

    public static function cocktail($options = []): Icon
    {
        return static::show(Icon::COCKTAIL, $options);
    }

    public static function code($options = []): Icon
    {
        return static::show(Icon::CODE, $options);
    }

    public static function codeBranch($options = []): Icon
    {
        return static::show(Icon::CODE_BRANCH, $options);
    }

    public static function coffee($options = []): Icon
    {
        return static::show(Icon::COFFEE, $options);
    }

    public static function cog($options = []): Icon
    {
        return static::show(Icon::COG, $options);
    }

    public static function cogs($options = []): Icon
    {
        return static::show(Icon::COGS, $options);
    }

    public static function coins($options = []): Icon
    {
        return static::show(Icon::COINS, $options);
    }

    public static function columns($options = []): Icon
    {
        return static::show(Icon::COLUMNS, $options);
    }

    public static function comment($options = []): Icon
    {
        return static::show(Icon::COMMENT, $options);
    }

    public static function commentAlt($options = []): Icon
    {
        return static::show(Icon::COMMENT_ALT, $options);
    }

    public static function commentDollar($options = []): Icon
    {
        return static::show(Icon::COMMENT_DOLLAR, $options);
    }

    public static function commentDots($options = []): Icon
    {
        return static::show(Icon::COMMENT_DOTS, $options);
    }

    public static function commentMedical($options = []): Icon
    {
        return static::show(Icon::COMMENT_MEDICAL, $options);
    }

    public static function commentSlash($options = []): Icon
    {
        return static::show(Icon::COMMENT_SLASH, $options);
    }

    public static function comments($options = []): Icon
    {
        return static::show(Icon::COMMENTS, $options);
    }

    public static function commentsDollar($options = []): Icon
    {
        return static::show(Icon::COMMENTS_DOLLAR, $options);
    }

    public static function compactDisc($options = []): Icon
    {
        return static::show(Icon::COMPACT_DISC, $options);
    }

    public static function compass($options = []): Icon
    {
        return static::show(Icon::COMPASS, $options);
    }

    public static function compress($options = []): Icon
    {
        return static::show(Icon::COMPRESS, $options);
    }

    public static function compressAlt($options = []): Icon
    {
        return static::show(Icon::COMPRESS_ALT, $options);
    }

    public static function compressArrowsAlt($options = []): Icon
    {
        return static::show(Icon::COMPRESS_ARROWS_ALT, $options);
    }

    public static function conciergeBell($options = []): Icon
    {
        return static::show(Icon::CONCIERGE_BELL, $options);
    }

    public static function cookie($options = []): Icon
    {
        return static::show(Icon::COOKIE, $options);
    }

    public static function cookieBite($options = []): Icon
    {
        return static::show(Icon::COOKIE_BITE, $options);
    }

    public static function copy($options = []): Icon
    {
        return static::show(Icon::COPY, $options);
    }

    public static function copyright($options = []): Icon
    {
        return static::show(Icon::COPYRIGHT, $options);
    }

    public static function couch($options = []): Icon
    {
        return static::show(Icon::COUCH, $options);
    }

    public static function creditCard($options = []): Icon
    {
        return static::show(Icon::CREDIT_CARD, $options);
    }

    public static function crop($options = []): Icon
    {
        return static::show(Icon::CROP, $options);
    }

    public static function cropAlt($options = []): Icon
    {
        return static::show(Icon::CROP_ALT, $options);
    }

    public static function cross($options = []): Icon
    {
        return static::show(Icon::CROSS, $options);
    }

    public static function crosshairs($options = []): Icon
    {
        return static::show(Icon::CROSSHAIRS, $options);
    }

    public static function crow($options = []): Icon
    {
        return static::show(Icon::CROW, $options);
    }

    public static function crown($options = []): Icon
    {
        return static::show(Icon::CROWN, $options);
    }

    public static function crutch($options = []): Icon
    {
        return static::show(Icon::CRUTCH, $options);
    }

    public static function cube($options = []): Icon
    {
        return static::show(Icon::CUBE, $options);
    }

    public static function cubes($options = []): Icon
    {
        return static::show(Icon::CUBES, $options);
    }

    public static function cut($options = []): Icon
    {
        return static::show(Icon::CUT, $options);
    }

    public static function database($options = []): Icon
    {
        return static::show(Icon::DATABASE, $options);
    }

    public static function deaf($options = []): Icon
    {
        return static::show(Icon::DEAF, $options);
    }

    public static function democrat($options = []): Icon
    {
        return static::show(Icon::DEMOCRAT, $options);
    }

    public static function desktop($options = []): Icon
    {
        return static::show(Icon::DESKTOP, $options);
    }

    public static function dharmachakra($options = []): Icon
    {
        return static::show(Icon::DHARMACHAKRA, $options);
    }

    public static function diagnoses($options = []): Icon
    {
        return static::show(Icon::DIAGNOSES, $options);
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

    public static function digitalTachograph($options = []): Icon
    {
        return static::show(Icon::DIGITAL_TACHOGRAPH, $options);
    }

    public static function directions($options = []): Icon
    {
        return static::show(Icon::DIRECTIONS, $options);
    }

    public static function disease($options = []): Icon
    {
        return static::show(Icon::DISEASE, $options);
    }

    public static function divide($options = []): Icon
    {
        return static::show(Icon::DIVIDE, $options);
    }

    public static function dizzy($options = []): Icon
    {
        return static::show(Icon::DIZZY, $options);
    }

    public static function dna($options = []): Icon
    {
        return static::show(Icon::DNA, $options);
    }

    public static function dog($options = []): Icon
    {
        return static::show(Icon::DOG, $options);
    }

    public static function dollarSign($options = []): Icon
    {
        return static::show(Icon::DOLLAR_SIGN, $options);
    }

    public static function dolly($options = []): Icon
    {
        return static::show(Icon::DOLLY, $options);
    }

    public static function dollyFlatbed($options = []): Icon
    {
        return static::show(Icon::DOLLY_FLATBED, $options);
    }

    public static function donate($options = []): Icon
    {
        return static::show(Icon::DONATE, $options);
    }

    public static function doorClosed($options = []): Icon
    {
        return static::show(Icon::DOOR_CLOSED, $options);
    }

    public static function doorOpen($options = []): Icon
    {
        return static::show(Icon::DOOR_OPEN, $options);
    }

    public static function dotCircle($options = []): Icon
    {
        return static::show(Icon::DOT_CIRCLE, $options);
    }

    public static function dove($options = []): Icon
    {
        return static::show(Icon::DOVE, $options);
    }

    public static function download($options = []): Icon
    {
        return static::show(Icon::DOWNLOAD, $options);
    }

    public static function draftingCompass($options = []): Icon
    {
        return static::show(Icon::DRAFTING_COMPASS, $options);
    }

    public static function dragon($options = []): Icon
    {
        return static::show(Icon::DRAGON, $options);
    }

    public static function drawPolygon($options = []): Icon
    {
        return static::show(Icon::DRAW_POLYGON, $options);
    }

    public static function drum($options = []): Icon
    {
        return static::show(Icon::DRUM, $options);
    }

    public static function drumSteelpan($options = []): Icon
    {
        return static::show(Icon::DRUM_STEELPAN, $options);
    }

    public static function drumstickBite($options = []): Icon
    {
        return static::show(Icon::DRUMSTICK_BITE, $options);
    }

    public static function dumbbell($options = []): Icon
    {
        return static::show(Icon::DUMBBELL, $options);
    }

    public static function dumpster($options = []): Icon
    {
        return static::show(Icon::DUMPSTER, $options);
    }

    public static function dumpsterFire($options = []): Icon
    {
        return static::show(Icon::DUMPSTER_FIRE, $options);
    }

    public static function dungeon($options = []): Icon
    {
        return static::show(Icon::DUNGEON, $options);
    }

    public static function edit($options = []): Icon
    {
        return static::show(Icon::EDIT, $options);
    }

    public static function egg($options = []): Icon
    {
        return static::show(Icon::EGG, $options);
    }

    public static function eject($options = []): Icon
    {
        return static::show(Icon::EJECT, $options);
    }

    public static function ellipsisH($options = []): Icon
    {
        return static::show(Icon::ELLIPSIS_H, $options);
    }

    public static function ellipsisV($options = []): Icon
    {
        return static::show(Icon::ELLIPSIS_V, $options);
    }

    public static function emptySet($options = []): Icon
    {
        return static::show(Icon::EMPTY_SET, $options);
    }

    public static function envelope($options = []): Icon
    {
        return static::show(Icon::ENVELOPE, $options);
    }

    public static function envelopeOpen($options = []): Icon
    {
        return static::show(Icon::ENVELOPE_OPEN, $options);
    }

    public static function envelopeOpenText($options = []): Icon
    {
        return static::show(Icon::ENVELOPE_OPEN_TEXT, $options);
    }

    public static function envelopeSquare($options = []): Icon
    {
        return static::show(Icon::ENVELOPE_SQUARE, $options);
    }

    public static function equals($options = []): Icon
    {
        return static::show(Icon::EQUALS, $options);
    }

    public static function eraser($options = []): Icon
    {
        return static::show(Icon::ERASER, $options);
    }

    public static function ethernet($options = []): Icon
    {
        return static::show(Icon::ETHERNET, $options);
    }

    public static function euroSign($options = []): Icon
    {
        return static::show(Icon::EURO_SIGN, $options);
    }

    public static function exchangeAlt($options = []): Icon
    {
        return static::show(Icon::EXCHANGE_ALT, $options);
    }

    public static function exclamation($options = []): Icon
    {
        return static::show(Icon::EXCLAMATION, $options);
    }

    public static function exclamationCircle($options = []): Icon
    {
        return static::show(Icon::EXCLAMATION_CIRCLE, $options);
    }

    public static function exclamationTriangle($options = []): Icon
    {
        return static::show(Icon::EXCLAMATION_TRIANGLE, $options);
    }

    public static function expand($options = []): Icon
    {
        return static::show(Icon::EXPAND, $options);
    }

    public static function expandAlt($options = []): Icon
    {
        return static::show(Icon::EXPAND_ALT, $options);
    }

    public static function expandArrowsAlt($options = []): Icon
    {
        return static::show(Icon::EXPAND_ARROWS_ALT, $options);
    }

    public static function externalLinkAlt($options = []): Icon
    {
        return static::show(Icon::EXTERNAL_LINK_ALT, $options);
    }

    public static function externalLinkSquareAlt($options = []): Icon
    {
        return static::show(Icon::EXTERNAL_LINK_SQUARE_ALT, $options);
    }

    public static function eye($options = []): Icon
    {
        return static::show(Icon::EYE, $options);
    }

    public static function eyeDropper($options = []): Icon
    {
        return static::show(Icon::EYE_DROPPER, $options);
    }

    public static function eyeSlash($options = []): Icon
    {
        return static::show(Icon::EYE_SLASH, $options);
    }

    public static function fan($options = []): Icon
    {
        return static::show(Icon::FAN, $options);
    }

    public static function fastBackward($options = []): Icon
    {
        return static::show(Icon::FAST_BACKWARD, $options);
    }

    public static function fastForward($options = []): Icon
    {
        return static::show(Icon::FAST_FORWARD, $options);
    }

    public static function faucet($options = []): Icon
    {
        return static::show(Icon::FAUCET, $options);
    }

    public static function fax($options = []): Icon
    {
        return static::show(Icon::FAX, $options);
    }

    public static function feather($options = []): Icon
    {
        return static::show(Icon::FEATHER, $options);
    }

    public static function featherAlt($options = []): Icon
    {
        return static::show(Icon::FEATHER_ALT, $options);
    }

    public static function female($options = []): Icon
    {
        return static::show(Icon::FEMALE, $options);
    }

    public static function fighterJet($options = []): Icon
    {
        return static::show(Icon::FIGHTER_JET, $options);
    }

    public static function file($options = []): Icon
    {
        return static::show(Icon::FILE, $options);
    }

    public static function fileAlt($options = []): Icon
    {
        return static::show(Icon::FILE_ALT, $options);
    }

    public static function fileArchive($options = []): Icon
    {
        return static::show(Icon::FILE_ARCHIVE, $options);
    }

    public static function fileAudio($options = []): Icon
    {
        return static::show(Icon::FILE_AUDIO, $options);
    }

    public static function fileCode($options = []): Icon
    {
        return static::show(Icon::FILE_CODE, $options);
    }

    public static function fileContract($options = []): Icon
    {
        return static::show(Icon::FILE_CONTRACT, $options);
    }

    public static function fileCsv($options = []): Icon
    {
        return static::show(Icon::FILE_CSV, $options);
    }

    public static function fileDownload($options = []): Icon
    {
        return static::show(Icon::FILE_DOWNLOAD, $options);
    }

    public static function fileExcel($options = []): Icon
    {
        return static::show(Icon::FILE_EXCEL, $options);
    }

    public static function fileExport($options = []): Icon
    {
        return static::show(Icon::FILE_EXPORT, $options);
    }

    public static function fileImage($options = []): Icon
    {
        return static::show(Icon::FILE_IMAGE, $options);
    }

    public static function fileImport($options = []): Icon
    {
        return static::show(Icon::FILE_IMPORT, $options);
    }

    public static function fileInvoice($options = []): Icon
    {
        return static::show(Icon::FILE_INVOICE, $options);
    }

    public static function fileInvoiceDollar($options = []): Icon
    {
        return static::show(Icon::FILE_INVOICE_DOLLAR, $options);
    }

    public static function fileMedical($options = []): Icon
    {
        return static::show(Icon::FILE_MEDICAL, $options);
    }

    public static function fileMedicalAlt($options = []): Icon
    {
        return static::show(Icon::FILE_MEDICAL_ALT, $options);
    }

    public static function filePdf($options = []): Icon
    {
        return static::show(Icon::FILE_PDF, $options);
    }

    public static function filePowerpoint($options = []): Icon
    {
        return static::show(Icon::FILE_POWERPOINT, $options);
    }

    public static function filePrescription($options = []): Icon
    {
        return static::show(Icon::FILE_PRESCRIPTION, $options);
    }

    public static function fileSignature($options = []): Icon
    {
        return static::show(Icon::FILE_SIGNATURE, $options);
    }

    public static function fileUpload($options = []): Icon
    {
        return static::show(Icon::FILE_UPLOAD, $options);
    }

    public static function fileVideo($options = []): Icon
    {
        return static::show(Icon::FILE_VIDEO, $options);
    }

    public static function fileWord($options = []): Icon
    {
        return static::show(Icon::FILE_WORD, $options);
    }

    public static function fill($options = []): Icon
    {
        return static::show(Icon::FILL, $options);
    }

    public static function fillDrip($options = []): Icon
    {
        return static::show(Icon::FILL_DRIP, $options);
    }

    public static function film($options = []): Icon
    {
        return static::show(Icon::FILM, $options);
    }

    public static function filter($options = []): Icon
    {
        return static::show(Icon::FILTER, $options);
    }

    public static function fingerprint($options = []): Icon
    {
        return static::show(Icon::FINGERPRINT, $options);
    }

    public static function fire($options = []): Icon
    {
        return static::show(Icon::FIRE, $options);
    }

    public static function fireAlt($options = []): Icon
    {
        return static::show(Icon::FIRE_ALT, $options);
    }

    public static function fireExtinguisher($options = []): Icon
    {
        return static::show(Icon::FIRE_EXTINGUISHER, $options);
    }

    public static function firstAid($options = []): Icon
    {
        return static::show(Icon::FIRST_AID, $options);
    }

    public static function fish($options = []): Icon
    {
        return static::show(Icon::FISH, $options);
    }

    public static function fistRaised($options = []): Icon
    {
        return static::show(Icon::FIST_RAISED, $options);
    }

    public static function flag($options = []): Icon
    {
        return static::show(Icon::FLAG, $options);
    }

    public static function flagCheckered($options = []): Icon
    {
        return static::show(Icon::FLAG_CHECKERED, $options);
    }

    public static function flagUsa($options = []): Icon
    {
        return static::show(Icon::FLAG_USA, $options);
    }

    public static function flask($options = []): Icon
    {
        return static::show(Icon::FLASK, $options);
    }

    public static function flushed($options = []): Icon
    {
        return static::show(Icon::FLUSHED, $options);
    }

    public static function folder($options = []): Icon
    {
        return static::show(Icon::FOLDER, $options);
    }

    public static function folderMinus($options = []): Icon
    {
        return static::show(Icon::FOLDER_MINUS, $options);
    }

    public static function folderOpen($options = []): Icon
    {
        return static::show(Icon::FOLDER_OPEN, $options);
    }

    public static function folderPlus($options = []): Icon
    {
        return static::show(Icon::FOLDER_PLUS, $options);
    }

    public static function font($options = []): Icon
    {
        return static::show(Icon::FONT, $options);
    }

    public static function footballBall($options = []): Icon
    {
        return static::show(Icon::FOOTBALL_BALL, $options);
    }

    public static function forward($options = []): Icon
    {
        return static::show(Icon::FORWARD, $options);
    }

    public static function frog($options = []): Icon
    {
        return static::show(Icon::FROG, $options);
    }

    public static function frown($options = []): Icon
    {
        return static::show(Icon::FROWN, $options);
    }

    public static function frownOpen($options = []): Icon
    {
        return static::show(Icon::FROWN_OPEN, $options);
    }

    public static function function($options = []): Icon
    {
        return static::show(Icon::FUNCTION, $options);
    }

    public static function funnelDollar($options = []): Icon
    {
        return static::show(Icon::FUNNEL_DOLLAR, $options);
    }

    public static function futbol($options = []): Icon
    {
        return static::show(Icon::FUTBOL, $options);
    }

    public static function gamepad($options = []): Icon
    {
        return static::show(Icon::GAMEPAD, $options);
    }

    public static function gasPump($options = []): Icon
    {
        return static::show(Icon::GAS_PUMP, $options);
    }

    public static function gavel($options = []): Icon
    {
        return static::show(Icon::GAVEL, $options);
    }

    public static function gem($options = []): Icon
    {
        return static::show(Icon::GEM, $options);
    }

    public static function genderless($options = []): Icon
    {
        return static::show(Icon::GENDERLESS, $options);
    }

    public static function ghost($options = []): Icon
    {
        return static::show(Icon::GHOST, $options);
    }

    public static function gift($options = []): Icon
    {
        return static::show(Icon::GIFT, $options);
    }

    public static function gifts($options = []): Icon
    {
        return static::show(Icon::GIFTS, $options);
    }

    public static function glassCheers($options = []): Icon
    {
        return static::show(Icon::GLASS_CHEERS, $options);
    }

    public static function glassMartini($options = []): Icon
    {
        return static::show(Icon::GLASS_MARTINI, $options);
    }

    public static function glassMartiniAlt($options = []): Icon
    {
        return static::show(Icon::GLASS_MARTINI_ALT, $options);
    }

    public static function glassWhiskey($options = []): Icon
    {
        return static::show(Icon::GLASS_WHISKEY, $options);
    }

    public static function glasses($options = []): Icon
    {
        return static::show(Icon::GLASSES, $options);
    }

    public static function globe($options = []): Icon
    {
        return static::show(Icon::GLOBE, $options);
    }

    public static function globeAfrica($options = []): Icon
    {
        return static::show(Icon::GLOBE_AFRICA, $options);
    }

    public static function globeAmericas($options = []): Icon
    {
        return static::show(Icon::GLOBE_AMERICAS, $options);
    }

    public static function globeAsia($options = []): Icon
    {
        return static::show(Icon::GLOBE_ASIA, $options);
    }

    public static function globeEurope($options = []): Icon
    {
        return static::show(Icon::GLOBE_EUROPE, $options);
    }

    public static function golfBall($options = []): Icon
    {
        return static::show(Icon::GOLF_BALL, $options);
    }

    public static function gopuram($options = []): Icon
    {
        return static::show(Icon::GOPURAM, $options);
    }

    public static function graduationCap($options = []): Icon
    {
        return static::show(Icon::GRADUATION_CAP, $options);
    }

    public static function greaterThan($options = []): Icon
    {
        return static::show(Icon::GREATER_THAN, $options);
    }

    public static function greaterThanEqual($options = []): Icon
    {
        return static::show(Icon::GREATER_THAN_EQUAL, $options);
    }

    public static function grimace($options = []): Icon
    {
        return static::show(Icon::GRIMACE, $options);
    }

    public static function grin($options = []): Icon
    {
        return static::show(Icon::GRIN, $options);
    }

    public static function grinAlt($options = []): Icon
    {
        return static::show(Icon::GRIN_ALT, $options);
    }

    public static function grinBeam($options = []): Icon
    {
        return static::show(Icon::GRIN_BEAM, $options);
    }

    public static function grinBeamSweat($options = []): Icon
    {
        return static::show(Icon::GRIN_BEAM_SWEAT, $options);
    }

    public static function grinHearts($options = []): Icon
    {
        return static::show(Icon::GRIN_HEARTS, $options);
    }

    public static function grinSquint($options = []): Icon
    {
        return static::show(Icon::GRIN_SQUINT, $options);
    }

    public static function grinSquintTears($options = []): Icon
    {
        return static::show(Icon::GRIN_SQUINT_TEARS, $options);
    }

    public static function grinStars($options = []): Icon
    {
        return static::show(Icon::GRIN_STARS, $options);
    }

    public static function grinTears($options = []): Icon
    {
        return static::show(Icon::GRIN_TEARS, $options);
    }

    public static function grinTongue($options = []): Icon
    {
        return static::show(Icon::GRIN_TONGUE, $options);
    }

    public static function grinTongueSquint($options = []): Icon
    {
        return static::show(Icon::GRIN_TONGUE_SQUINT, $options);
    }

    public static function grinTongueWink($options = []): Icon
    {
        return static::show(Icon::GRIN_TONGUE_WINK, $options);
    }

    public static function grinWink($options = []): Icon
    {
        return static::show(Icon::GRIN_WINK, $options);
    }

    public static function gripHorizontal($options = []): Icon
    {
        return static::show(Icon::GRIP_HORIZONTAL, $options);
    }

    public static function gripLines($options = []): Icon
    {
        return static::show(Icon::GRIP_LINES, $options);
    }

    public static function gripLinesVertical($options = []): Icon
    {
        return static::show(Icon::GRIP_LINES_VERTICAL, $options);
    }

    public static function gripVertical($options = []): Icon
    {
        return static::show(Icon::GRIP_VERTICAL, $options);
    }

    public static function guitar($options = []): Icon
    {
        return static::show(Icon::GUITAR, $options);
    }

    public static function hSquare($options = []): Icon
    {
        return static::show(Icon::H_SQUARE, $options);
    }

    public static function hamburger($options = []): Icon
    {
        return static::show(Icon::HAMBURGER, $options);
    }

    public static function hammer($options = []): Icon
    {
        return static::show(Icon::HAMMER, $options);
    }

    public static function hamsa($options = []): Icon
    {
        return static::show(Icon::HAMSA, $options);
    }

    public static function handHolding($options = []): Icon
    {
        return static::show(Icon::HAND_HOLDING, $options);
    }

    public static function handHoldingHeart($options = []): Icon
    {
        return static::show(Icon::HAND_HOLDING_HEART, $options);
    }

    public static function handHoldingMedical($options = []): Icon
    {
        return static::show(Icon::HAND_HOLDING_MEDICAL, $options);
    }

    public static function handHoldingUsd($options = []): Icon
    {
        return static::show(Icon::HAND_HOLDING_USD, $options);
    }

    public static function handHoldingWater($options = []): Icon
    {
        return static::show(Icon::HAND_HOLDING_WATER, $options);
    }

    public static function handLizard($options = []): Icon
    {
        return static::show(Icon::HAND_LIZARD, $options);
    }

    public static function handMiddleFinger($options = []): Icon
    {
        return static::show(Icon::HAND_MIDDLE_FINGER, $options);
    }

    public static function handPaper($options = []): Icon
    {
        return static::show(Icon::HAND_PAPER, $options);
    }

    public static function handPeace($options = []): Icon
    {
        return static::show(Icon::HAND_PEACE, $options);
    }

    public static function handPointDown($options = []): Icon
    {
        return static::show(Icon::HAND_POINT_DOWN, $options);
    }

    public static function handPointLeft($options = []): Icon
    {
        return static::show(Icon::HAND_POINT_LEFT, $options);
    }

    public static function handPointRight($options = []): Icon
    {
        return static::show(Icon::HAND_POINT_RIGHT, $options);
    }

    public static function handPointUp($options = []): Icon
    {
        return static::show(Icon::HAND_POINT_UP, $options);
    }

    public static function handPointer($options = []): Icon
    {
        return static::show(Icon::HAND_POINTER, $options);
    }

    public static function handRock($options = []): Icon
    {
        return static::show(Icon::HAND_ROCK, $options);
    }

    public static function handScissors($options = []): Icon
    {
        return static::show(Icon::HAND_SCISSORS, $options);
    }

    public static function handSparkles($options = []): Icon
    {
        return static::show(Icon::HAND_SPARKLES, $options);
    }

    public static function handSpock($options = []): Icon
    {
        return static::show(Icon::HAND_SPOCK, $options);
    }

    public static function hands($options = []): Icon
    {
        return static::show(Icon::HANDS, $options);
    }

    public static function handsHelping($options = []): Icon
    {
        return static::show(Icon::HANDS_HELPING, $options);
    }

    public static function handsWash($options = []): Icon
    {
        return static::show(Icon::HANDS_WASH, $options);
    }

    public static function handshake($options = []): Icon
    {
        return static::show(Icon::HANDSHAKE, $options);
    }

    public static function handshakeAltSlash($options = []): Icon
    {
        return static::show(Icon::HANDSHAKE_ALT_SLASH, $options);
    }

    public static function handshakeSlash($options = []): Icon
    {
        return static::show(Icon::HANDSHAKE_SLASH, $options);
    }

    public static function hanukiah($options = []): Icon
    {
        return static::show(Icon::HANUKIAH, $options);
    }

    public static function hardHat($options = []): Icon
    {
        return static::show(Icon::HARD_HAT, $options);
    }

    public static function hashtag($options = []): Icon
    {
        return static::show(Icon::HASHTAG, $options);
    }

    public static function hatCowboy($options = []): Icon
    {
        return static::show(Icon::HAT_COWBOY, $options);
    }

    public static function hatCowboySide($options = []): Icon
    {
        return static::show(Icon::HAT_COWBOY_SIDE, $options);
    }

    public static function hatWizard($options = []): Icon
    {
        return static::show(Icon::HAT_WIZARD, $options);
    }

    public static function haykal($options = []): Icon
    {
        return static::show(Icon::HAYKAL, $options);
    }

    public static function hdd($options = []): Icon
    {
        return static::show(Icon::HDD, $options);
    }

    public static function headSideCough($options = []): Icon
    {
        return static::show(Icon::HEAD_SIDE_COUGH, $options);
    }

    public static function headSideCoughSlash($options = []): Icon
    {
        return static::show(Icon::HEAD_SIDE_COUGH_SLASH, $options);
    }

    public static function headSideMask($options = []): Icon
    {
        return static::show(Icon::HEAD_SIDE_MASK, $options);
    }

    public static function headSideVirus($options = []): Icon
    {
        return static::show(Icon::HEAD_SIDE_VIRUS, $options);
    }

    public static function heading($options = []): Icon
    {
        return static::show(Icon::HEADING, $options);
    }

    public static function headphones($options = []): Icon
    {
        return static::show(Icon::HEADPHONES, $options);
    }

    public static function headphonesAlt($options = []): Icon
    {
        return static::show(Icon::HEADPHONES_ALT, $options);
    }

    public static function headset($options = []): Icon
    {
        return static::show(Icon::HEADSET, $options);
    }

    public static function heart($options = []): Icon
    {
        return static::show(Icon::HEART, $options);
    }

    public static function heartBroken($options = []): Icon
    {
        return static::show(Icon::HEART_BROKEN, $options);
    }

    public static function heartbeat($options = []): Icon
    {
        return static::show(Icon::HEARTBEAT, $options);
    }

    public static function helicopter($options = []): Icon
    {
        return static::show(Icon::HELICOPTER, $options);
    }

    public static function highlighter($options = []): Icon
    {
        return static::show(Icon::HIGHLIGHTER, $options);
    }

    public static function hiking($options = []): Icon
    {
        return static::show(Icon::HIKING, $options);
    }

    public static function hippo($options = []): Icon
    {
        return static::show(Icon::HIPPO, $options);
    }

    public static function history($options = []): Icon
    {
        return static::show(Icon::HISTORY, $options);
    }

    public static function hockeyPuck($options = []): Icon
    {
        return static::show(Icon::HOCKEY_PUCK, $options);
    }

    public static function hollyBerry($options = []): Icon
    {
        return static::show(Icon::HOLLY_BERRY, $options);
    }

    public static function home($options = []): Icon
    {
        return static::show(Icon::HOME, $options);
    }

    public static function horse($options = []): Icon
    {
        return static::show(Icon::HORSE, $options);
    }

    public static function horseHead($options = []): Icon
    {
        return static::show(Icon::HORSE_HEAD, $options);
    }

    public static function hospital($options = []): Icon
    {
        return static::show(Icon::HOSPITAL, $options);
    }

    public static function hospitalAlt($options = []): Icon
    {
        return static::show(Icon::HOSPITAL_ALT, $options);
    }

    public static function hospitalSymbol($options = []): Icon
    {
        return static::show(Icon::HOSPITAL_SYMBOL, $options);
    }

    public static function hospitalUser($options = []): Icon
    {
        return static::show(Icon::HOSPITAL_USER, $options);
    }

    public static function hotTub($options = []): Icon
    {
        return static::show(Icon::HOT_TUB, $options);
    }

    public static function hotdog($options = []): Icon
    {
        return static::show(Icon::HOTDOG, $options);
    }

    public static function hotel($options = []): Icon
    {
        return static::show(Icon::HOTEL, $options);
    }

    public static function hourglass($options = []): Icon
    {
        return static::show(Icon::HOURGLASS, $options);
    }

    public static function hourglassEnd($options = []): Icon
    {
        return static::show(Icon::HOURGLASS_END, $options);
    }

    public static function hourglassHalf($options = []): Icon
    {
        return static::show(Icon::HOURGLASS_HALF, $options);
    }

    public static function hourglassStart($options = []): Icon
    {
        return static::show(Icon::HOURGLASS_START, $options);
    }

    public static function houseDamage($options = []): Icon
    {
        return static::show(Icon::HOUSE_DAMAGE, $options);
    }

    public static function houseUser($options = []): Icon
    {
        return static::show(Icon::HOUSE_USER, $options);
    }

    public static function hryvnia($options = []): Icon
    {
        return static::show(Icon::HRYVNIA, $options);
    }

    public static function iCursor($options = []): Icon
    {
        return static::show(Icon::I_CURSOR, $options);
    }

    public static function iceCream($options = []): Icon
    {
        return static::show(Icon::ICE_CREAM, $options);
    }

    public static function icicles($options = []): Icon
    {
        return static::show(Icon::ICICLES, $options);
    }

    public static function icons($options = []): Icon
    {
        return static::show(Icon::ICONS, $options);
    }

    public static function idBadge($options = []): Icon
    {
        return static::show(Icon::ID_BADGE, $options);
    }

    public static function idCard($options = []): Icon
    {
        return static::show(Icon::ID_CARD, $options);
    }

    public static function idCardAlt($options = []): Icon
    {
        return static::show(Icon::ID_CARD_ALT, $options);
    }

    public static function igloo($options = []): Icon
    {
        return static::show(Icon::IGLOO, $options);
    }

    public static function image($options = []): Icon
    {
        return static::show(Icon::IMAGE, $options);
    }

    public static function images($options = []): Icon
    {
        return static::show(Icon::IMAGES, $options);
    }

    public static function inbox($options = []): Icon
    {
        return static::show(Icon::INBOX, $options);
    }

    public static function indent($options = []): Icon
    {
        return static::show(Icon::INDENT, $options);
    }

    public static function industry($options = []): Icon
    {
        return static::show(Icon::INDUSTRY, $options);
    }

    public static function infinity($options = []): Icon
    {
        return static::show(Icon::INFINITY, $options);
    }

    public static function info($options = []): Icon
    {
        return static::show(Icon::INFO, $options);
    }

    public static function infoCircle($options = []): Icon
    {
        return static::show(Icon::INFO_CIRCLE, $options);
    }

    public static function integral($options = []): Icon
    {
        return static::show(Icon::INTEGRAL, $options);
    }

    public static function intersection($options = []): Icon
    {
        return static::show(Icon::INTERSECTION, $options);
    }

    public static function italic($options = []): Icon
    {
        return static::show(Icon::ITALIC, $options);
    }

    public static function jedi($options = []): Icon
    {
        return static::show(Icon::JEDI, $options);
    }

    public static function joint($options = []): Icon
    {
        return static::show(Icon::JOINT, $options);
    }

    public static function journalWhills($options = []): Icon
    {
        return static::show(Icon::JOURNAL_WHILLS, $options);
    }

    public static function kaaba($options = []): Icon
    {
        return static::show(Icon::KAABA, $options);
    }

    public static function key($options = []): Icon
    {
        return static::show(Icon::KEY, $options);
    }

    public static function keyboard($options = []): Icon
    {
        return static::show(Icon::KEYBOARD, $options);
    }

    public static function khanda($options = []): Icon
    {
        return static::show(Icon::KHANDA, $options);
    }

    public static function kiss($options = []): Icon
    {
        return static::show(Icon::KISS, $options);
    }

    public static function kissBeam($options = []): Icon
    {
        return static::show(Icon::KISS_BEAM, $options);
    }

    public static function kissWinkHeart($options = []): Icon
    {
        return static::show(Icon::KISS_WINK_HEART, $options);
    }

    public static function kiwiBird($options = []): Icon
    {
        return static::show(Icon::KIWI_BIRD, $options);
    }

    public static function lambda($options = []): Icon
    {
        return static::show(Icon::LAMBDA, $options);
    }

    public static function landmark($options = []): Icon
    {
        return static::show(Icon::LANDMARK, $options);
    }

    public static function language($options = []): Icon
    {
        return static::show(Icon::LANGUAGE, $options);
    }

    public static function laptop($options = []): Icon
    {
        return static::show(Icon::LAPTOP, $options);
    }

    public static function laptopCode($options = []): Icon
    {
        return static::show(Icon::LAPTOP_CODE, $options);
    }

    public static function laptopHouse($options = []): Icon
    {
        return static::show(Icon::LAPTOP_HOUSE, $options);
    }

    public static function laptopMedical($options = []): Icon
    {
        return static::show(Icon::LAPTOP_MEDICAL, $options);
    }

    public static function laugh($options = []): Icon
    {
        return static::show(Icon::LAUGH, $options);
    }

    public static function laughBeam($options = []): Icon
    {
        return static::show(Icon::LAUGH_BEAM, $options);
    }

    public static function laughSquint($options = []): Icon
    {
        return static::show(Icon::LAUGH_SQUINT, $options);
    }

    public static function laughWink($options = []): Icon
    {
        return static::show(Icon::LAUGH_WINK, $options);
    }

    public static function layerGroup($options = []): Icon
    {
        return static::show(Icon::LAYER_GROUP, $options);
    }

    public static function leaf($options = []): Icon
    {
        return static::show(Icon::LEAF, $options);
    }

    public static function lemon($options = []): Icon
    {
        return static::show(Icon::LEMON, $options);
    }

    public static function lessThan($options = []): Icon
    {
        return static::show(Icon::LESS_THAN, $options);
    }

    public static function lessThanEqual($options = []): Icon
    {
        return static::show(Icon::LESS_THAN_EQUAL, $options);
    }

    public static function levelDownAlt($options = []): Icon
    {
        return static::show(Icon::LEVEL_DOWN_ALT, $options);
    }

    public static function levelUpAlt($options = []): Icon
    {
        return static::show(Icon::LEVEL_UP_ALT, $options);
    }

    public static function lifeRing($options = []): Icon
    {
        return static::show(Icon::LIFE_RING, $options);
    }

    public static function lightbulb($options = []): Icon
    {
        return static::show(Icon::LIGHTBULB, $options);
    }

    public static function link($options = []): Icon
    {
        return static::show(Icon::LINK, $options);
    }

    public static function liraSign($options = []): Icon
    {
        return static::show(Icon::LIRA_SIGN, $options);
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

    public static function locationArrow($options = []): Icon
    {
        return static::show(Icon::LOCATION_ARROW, $options);
    }

    public static function lock($options = []): Icon
    {
        return static::show(Icon::LOCK, $options);
    }

    public static function lockOpen($options = []): Icon
    {
        return static::show(Icon::LOCK_OPEN, $options);
    }

    public static function longArrowAltDown($options = []): Icon
    {
        return static::show(Icon::LONG_ARROW_ALT_DOWN, $options);
    }

    public static function longArrowAltLeft($options = []): Icon
    {
        return static::show(Icon::LONG_ARROW_ALT_LEFT, $options);
    }

    public static function longArrowAltRight($options = []): Icon
    {
        return static::show(Icon::LONG_ARROW_ALT_RIGHT, $options);
    }

    public static function longArrowAltUp($options = []): Icon
    {
        return static::show(Icon::LONG_ARROW_ALT_UP, $options);
    }

    public static function lowVision($options = []): Icon
    {
        return static::show(Icon::LOW_VISION, $options);
    }

    public static function luggageCart($options = []): Icon
    {
        return static::show(Icon::LUGGAGE_CART, $options);
    }

    public static function lungs($options = []): Icon
    {
        return static::show(Icon::LUNGS, $options);
    }

    public static function lungsVirus($options = []): Icon
    {
        return static::show(Icon::LUNGS_VIRUS, $options);
    }

    public static function magic($options = []): Icon
    {
        return static::show(Icon::MAGIC, $options);
    }

    public static function magnet($options = []): Icon
    {
        return static::show(Icon::MAGNET, $options);
    }

    public static function mailBulk($options = []): Icon
    {
        return static::show(Icon::MAIL_BULK, $options);
    }

    public static function male($options = []): Icon
    {
        return static::show(Icon::MALE, $options);
    }

    public static function map($options = []): Icon
    {
        return static::show(Icon::MAP, $options);
    }

    public static function mapMarked($options = []): Icon
    {
        return static::show(Icon::MAP_MARKED, $options);
    }

    public static function mapMarkedAlt($options = []): Icon
    {
        return static::show(Icon::MAP_MARKED_ALT, $options);
    }

    public static function mapMarker($options = []): Icon
    {
        return static::show(Icon::MAP_MARKER, $options);
    }

    public static function mapMarkerAlt($options = []): Icon
    {
        return static::show(Icon::MAP_MARKER_ALT, $options);
    }

    public static function mapPin($options = []): Icon
    {
        return static::show(Icon::MAP_PIN, $options);
    }

    public static function mapSigns($options = []): Icon
    {
        return static::show(Icon::MAP_SIGNS, $options);
    }

    public static function marker($options = []): Icon
    {
        return static::show(Icon::MARKER, $options);
    }

    public static function mars($options = []): Icon
    {
        return static::show(Icon::MARS, $options);
    }

    public static function marsDouble($options = []): Icon
    {
        return static::show(Icon::MARS_DOUBLE, $options);
    }

    public static function marsStroke($options = []): Icon
    {
        return static::show(Icon::MARS_STROKE, $options);
    }

    public static function marsStrokeH($options = []): Icon
    {
        return static::show(Icon::MARS_STROKE_H, $options);
    }

    public static function marsStrokeV($options = []): Icon
    {
        return static::show(Icon::MARS_STROKE_V, $options);
    }

    public static function mask($options = []): Icon
    {
        return static::show(Icon::MASK, $options);
    }

    public static function medal($options = []): Icon
    {
        return static::show(Icon::MEDAL, $options);
    }

    public static function medkit($options = []): Icon
    {
        return static::show(Icon::MEDKIT, $options);
    }

    public static function meh($options = []): Icon
    {
        return static::show(Icon::MEH, $options);
    }

    public static function mehBlank($options = []): Icon
    {
        return static::show(Icon::MEH_BLANK, $options);
    }

    public static function mehRollingEyes($options = []): Icon
    {
        return static::show(Icon::MEH_ROLLING_EYES, $options);
    }

    public static function memory($options = []): Icon
    {
        return static::show(Icon::MEMORY, $options);
    }

    public static function menorah($options = []): Icon
    {
        return static::show(Icon::MENORAH, $options);
    }

    public static function mercury($options = []): Icon
    {
        return static::show(Icon::MERCURY, $options);
    }

    public static function meteor($options = []): Icon
    {
        return static::show(Icon::METEOR, $options);
    }

    public static function microchip($options = []): Icon
    {
        return static::show(Icon::MICROCHIP, $options);
    }

    public static function microphone($options = []): Icon
    {
        return static::show(Icon::MICROPHONE, $options);
    }

    public static function microphoneAlt($options = []): Icon
    {
        return static::show(Icon::MICROPHONE_ALT, $options);
    }

    public static function microphoneAltSlash($options = []): Icon
    {
        return static::show(Icon::MICROPHONE_ALT_SLASH, $options);
    }

    public static function microphoneSlash($options = []): Icon
    {
        return static::show(Icon::MICROPHONE_SLASH, $options);
    }

    public static function microscope($options = []): Icon
    {
        return static::show(Icon::MICROSCOPE, $options);
    }

    public static function minus($options = []): Icon
    {
        return static::show(Icon::MINUS, $options);
    }

    public static function minusCircle($options = []): Icon
    {
        return static::show(Icon::MINUS_CIRCLE, $options);
    }

    public static function minusSquare($options = []): Icon
    {
        return static::show(Icon::MINUS_SQUARE, $options);
    }

    public static function mitten($options = []): Icon
    {
        return static::show(Icon::MITTEN, $options);
    }

    public static function mobile($options = []): Icon
    {
        return static::show(Icon::MOBILE, $options);
    }

    public static function mobileAlt($options = []): Icon
    {
        return static::show(Icon::MOBILE_ALT, $options);
    }

    public static function moneyBill($options = []): Icon
    {
        return static::show(Icon::MONEY_BILL, $options);
    }

    public static function moneyBillAlt($options = []): Icon
    {
        return static::show(Icon::MONEY_BILL_ALT, $options);
    }

    public static function moneyBillWave($options = []): Icon
    {
        return static::show(Icon::MONEY_BILL_WAVE, $options);
    }

    public static function moneyBillWaveAlt($options = []): Icon
    {
        return static::show(Icon::MONEY_BILL_WAVE_ALT, $options);
    }

    public static function moneyCheck($options = []): Icon
    {
        return static::show(Icon::MONEY_CHECK, $options);
    }

    public static function moneyCheckAlt($options = []): Icon
    {
        return static::show(Icon::MONEY_CHECK_ALT, $options);
    }

    public static function monument($options = []): Icon
    {
        return static::show(Icon::MONUMENT, $options);
    }

    public static function moon($options = []): Icon
    {
        return static::show(Icon::MOON, $options);
    }

    public static function mortarPestle($options = []): Icon
    {
        return static::show(Icon::MORTAR_PESTLE, $options);
    }

    public static function mosque($options = []): Icon
    {
        return static::show(Icon::MOSQUE, $options);
    }

    public static function motorcycle($options = []): Icon
    {
        return static::show(Icon::MOTORCYCLE, $options);
    }

    public static function mountain($options = []): Icon
    {
        return static::show(Icon::MOUNTAIN, $options);
    }

    public static function mouse($options = []): Icon
    {
        return static::show(Icon::MOUSE, $options);
    }

    public static function mousePointer($options = []): Icon
    {
        return static::show(Icon::MOUSE_POINTER, $options);
    }

    public static function mugHot($options = []): Icon
    {
        return static::show(Icon::MUG_HOT, $options);
    }

    public static function music($options = []): Icon
    {
        return static::show(Icon::MUSIC, $options);
    }

    public static function networkWired($options = []): Icon
    {
        return static::show(Icon::NETWORK_WIRED, $options);
    }

    public static function neuter($options = []): Icon
    {
        return static::show(Icon::NEUTER, $options);
    }

    public static function newspaper($options = []): Icon
    {
        return static::show(Icon::NEWSPAPER, $options);
    }

    public static function notEqual($options = []): Icon
    {
        return static::show(Icon::NOT_EQUAL, $options);
    }

    public static function notesMedical($options = []): Icon
    {
        return static::show(Icon::NOTES_MEDICAL, $options);
    }

    public static function objectGroup($options = []): Icon
    {
        return static::show(Icon::OBJECT_GROUP, $options);
    }

    public static function objectUngroup($options = []): Icon
    {
        return static::show(Icon::OBJECT_UNGROUP, $options);
    }

    public static function oilCan($options = []): Icon
    {
        return static::show(Icon::OIL_CAN, $options);
    }

    public static function om($options = []): Icon
    {
        return static::show(Icon::OM, $options);
    }

    public static function omega($options = []): Icon
    {
        return static::show(Icon::OMEGA, $options);
    }

    public static function otter($options = []): Icon
    {
        return static::show(Icon::OTTER, $options);
    }

    public static function outdent($options = []): Icon
    {
        return static::show(Icon::OUTDENT, $options);
    }

    public static function pager($options = []): Icon
    {
        return static::show(Icon::PAGER, $options);
    }

    public static function paintBrush($options = []): Icon
    {
        return static::show(Icon::PAINT_BRUSH, $options);
    }

    public static function paintRoller($options = []): Icon
    {
        return static::show(Icon::PAINT_ROLLER, $options);
    }

    public static function palette($options = []): Icon
    {
        return static::show(Icon::PALETTE, $options);
    }

    public static function pallet($options = []): Icon
    {
        return static::show(Icon::PALLET, $options);
    }

    public static function paperPlane($options = []): Icon
    {
        return static::show(Icon::PAPER_PLANE, $options);
    }

    public static function paperclip($options = []): Icon
    {
        return static::show(Icon::PAPERCLIP, $options);
    }

    public static function parachuteBox($options = []): Icon
    {
        return static::show(Icon::PARACHUTE_BOX, $options);
    }

    public static function paragraph($options = []): Icon
    {
        return static::show(Icon::PARAGRAPH, $options);
    }

    public static function parking($options = []): Icon
    {
        return static::show(Icon::PARKING, $options);
    }

    public static function passport($options = []): Icon
    {
        return static::show(Icon::PASSPORT, $options);
    }

    public static function pastafarianism($options = []): Icon
    {
        return static::show(Icon::PASTAFARIANISM, $options);
    }

    public static function paste($options = []): Icon
    {
        return static::show(Icon::PASTE, $options);
    }

    public static function pause($options = []): Icon
    {
        return static::show(Icon::PAUSE, $options);
    }

    public static function pauseCircle($options = []): Icon
    {
        return static::show(Icon::PAUSE_CIRCLE, $options);
    }

    public static function paw($options = []): Icon
    {
        return static::show(Icon::PAW, $options);
    }

    public static function peace($options = []): Icon
    {
        return static::show(Icon::PEACE, $options);
    }

    public static function pen($options = []): Icon
    {
        return static::show(Icon::PEN, $options);
    }

    public static function penAlt($options = []): Icon
    {
        return static::show(Icon::PEN_ALT, $options);
    }

    public static function penFancy($options = []): Icon
    {
        return static::show(Icon::PEN_FANCY, $options);
    }

    public static function penNib($options = []): Icon
    {
        return static::show(Icon::PEN_NIB, $options);
    }

    public static function penSquare($options = []): Icon
    {
        return static::show(Icon::PEN_SQUARE, $options);
    }

    public static function pencilAlt($options = []): Icon
    {
        return static::show(Icon::PENCIL_ALT, $options);
    }

    public static function pencilRuler($options = []): Icon
    {
        return static::show(Icon::PENCIL_RULER, $options);
    }

    public static function peopleArrows($options = []): Icon
    {
        return static::show(Icon::PEOPLE_ARROWS, $options);
    }

    public static function peopleCarry($options = []): Icon
    {
        return static::show(Icon::PEOPLE_CARRY, $options);
    }

    public static function pepperHot($options = []): Icon
    {
        return static::show(Icon::PEPPER_HOT, $options);
    }

    public static function percent($options = []): Icon
    {
        return static::show(Icon::PERCENT, $options);
    }

    public static function percentage($options = []): Icon
    {
        return static::show(Icon::PERCENTAGE, $options);
    }

    public static function personBooth($options = []): Icon
    {
        return static::show(Icon::PERSON_BOOTH, $options);
    }

    public static function phone($options = []): Icon
    {
        return static::show(Icon::PHONE, $options);
    }

    public static function phoneAlt($options = []): Icon
    {
        return static::show(Icon::PHONE_ALT, $options);
    }

    public static function phoneSlash($options = []): Icon
    {
        return static::show(Icon::PHONE_SLASH, $options);
    }

    public static function phoneSquare($options = []): Icon
    {
        return static::show(Icon::PHONE_SQUARE, $options);
    }

    public static function phoneSquareAlt($options = []): Icon
    {
        return static::show(Icon::PHONE_SQUARE_ALT, $options);
    }

    public static function phoneVolume($options = []): Icon
    {
        return static::show(Icon::PHONE_VOLUME, $options);
    }

    public static function photoVideo($options = []): Icon
    {
        return static::show(Icon::PHOTO_VIDEO, $options);
    }

    public static function pi($options = []): Icon
    {
        return static::show(Icon::PI, $options);
    }

    public static function piggyBank($options = []): Icon
    {
        return static::show(Icon::PIGGY_BANK, $options);
    }

    public static function pills($options = []): Icon
    {
        return static::show(Icon::PILLS, $options);
    }

    public static function pizzaSlice($options = []): Icon
    {
        return static::show(Icon::PIZZA_SLICE, $options);
    }

    public static function placeOfWorship($options = []): Icon
    {
        return static::show(Icon::PLACE_OF_WORSHIP, $options);
    }

    public static function plane($options = []): Icon
    {
        return static::show(Icon::PLANE, $options);
    }

    public static function planeArrival($options = []): Icon
    {
        return static::show(Icon::PLANE_ARRIVAL, $options);
    }

    public static function planeDeparture($options = []): Icon
    {
        return static::show(Icon::PLANE_DEPARTURE, $options);
    }

    public static function planeSlash($options = []): Icon
    {
        return static::show(Icon::PLANE_SLASH, $options);
    }

    public static function play($options = []): Icon
    {
        return static::show(Icon::PLAY, $options);
    }

    public static function playCircle($options = []): Icon
    {
        return static::show(Icon::PLAY_CIRCLE, $options);
    }

    public static function plug($options = []): Icon
    {
        return static::show(Icon::PLUG, $options);
    }

    public static function plus($options = []): Icon
    {
        return static::show(Icon::PLUS, $options);
    }

    public static function plusCircle($options = []): Icon
    {
        return static::show(Icon::PLUS_CIRCLE, $options);
    }

    public static function plusSquare($options = []): Icon
    {
        return static::show(Icon::PLUS_SQUARE, $options);
    }

    public static function podcast($options = []): Icon
    {
        return static::show(Icon::PODCAST, $options);
    }

    public static function poll($options = []): Icon
    {
        return static::show(Icon::POLL, $options);
    }

    public static function pollH($options = []): Icon
    {
        return static::show(Icon::POLL_H, $options);
    }

    public static function poo($options = []): Icon
    {
        return static::show(Icon::POO, $options);
    }

    public static function pooStorm($options = []): Icon
    {
        return static::show(Icon::POO_STORM, $options);
    }

    public static function poop($options = []): Icon
    {
        return static::show(Icon::POOP, $options);
    }

    public static function portrait($options = []): Icon
    {
        return static::show(Icon::PORTRAIT, $options);
    }

    public static function poundSign($options = []): Icon
    {
        return static::show(Icon::POUND_SIGN, $options);
    }

    public static function powerOff($options = []): Icon
    {
        return static::show(Icon::POWER_OFF, $options);
    }

    public static function pray($options = []): Icon
    {
        return static::show(Icon::PRAY, $options);
    }

    public static function prayingHands($options = []): Icon
    {
        return static::show(Icon::PRAYING_HANDS, $options);
    }

    public static function prescription($options = []): Icon
    {
        return static::show(Icon::PRESCRIPTION, $options);
    }

    public static function prescriptionBottle($options = []): Icon
    {
        return static::show(Icon::PRESCRIPTION_BOTTLE, $options);
    }

    public static function prescriptionBottleAlt($options = []): Icon
    {
        return static::show(Icon::PRESCRIPTION_BOTTLE_ALT, $options);
    }

    public static function print($options = []): Icon
    {
        return static::show(Icon::PRINT, $options);
    }

    public static function procedures($options = []): Icon
    {
        return static::show(Icon::PROCEDURES, $options);
    }

    public static function projectDiagram($options = []): Icon
    {
        return static::show(Icon::PROJECT_DIAGRAM, $options);
    }

    public static function pumpMedical($options = []): Icon
    {
        return static::show(Icon::PUMP_MEDICAL, $options);
    }

    public static function pumpSoap($options = []): Icon
    {
        return static::show(Icon::PUMP_SOAP, $options);
    }

    public static function puzzlePiece($options = []): Icon
    {
        return static::show(Icon::PUZZLE_PIECE, $options);
    }

    public static function qrcode($options = []): Icon
    {
        return static::show(Icon::QRCODE, $options);
    }

    public static function question($options = []): Icon
    {
        return static::show(Icon::QUESTION, $options);
    }

    public static function questionCircle($options = []): Icon
    {
        return static::show(Icon::QUESTION_CIRCLE, $options);
    }

    public static function quidditch($options = []): Icon
    {
        return static::show(Icon::QUIDDITCH, $options);
    }

    public static function quoteLeft($options = []): Icon
    {
        return static::show(Icon::QUOTE_LEFT, $options);
    }

    public static function quoteRight($options = []): Icon
    {
        return static::show(Icon::QUOTE_RIGHT, $options);
    }

    public static function quran($options = []): Icon
    {
        return static::show(Icon::QURAN, $options);
    }

    public static function radiation($options = []): Icon
    {
        return static::show(Icon::RADIATION, $options);
    }

    public static function radiationAlt($options = []): Icon
    {
        return static::show(Icon::RADIATION_ALT, $options);
    }

    public static function rainbow($options = []): Icon
    {
        return static::show(Icon::RAINBOW, $options);
    }

    public static function random($options = []): Icon
    {
        return static::show(Icon::RANDOM, $options);
    }

    public static function receipt($options = []): Icon
    {
        return static::show(Icon::RECEIPT, $options);
    }

    public static function recordVinyl($options = []): Icon
    {
        return static::show(Icon::RECORD_VINYL, $options);
    }

    public static function recycle($options = []): Icon
    {
        return static::show(Icon::RECYCLE, $options);
    }

    public static function redo($options = []): Icon
    {
        return static::show(Icon::REDO, $options);
    }

    public static function redoAlt($options = []): Icon
    {
        return static::show(Icon::REDO_ALT, $options);
    }

    public static function registered($options = []): Icon
    {
        return static::show(Icon::REGISTERED, $options);
    }

    public static function removeFormat($options = []): Icon
    {
        return static::show(Icon::REMOVE_FORMAT, $options);
    }

    public static function reply($options = []): Icon
    {
        return static::show(Icon::REPLY, $options);
    }

    public static function replyAll($options = []): Icon
    {
        return static::show(Icon::REPLY_ALL, $options);
    }

    public static function republican($options = []): Icon
    {
        return static::show(Icon::REPUBLICAN, $options);
    }

    public static function restroom($options = []): Icon
    {
        return static::show(Icon::RESTROOM, $options);
    }

    public static function retweet($options = []): Icon
    {
        return static::show(Icon::RETWEET, $options);
    }

    public static function ribbon($options = []): Icon
    {
        return static::show(Icon::RIBBON, $options);
    }

    public static function ring($options = []): Icon
    {
        return static::show(Icon::RING, $options);
    }

    public static function road($options = []): Icon
    {
        return static::show(Icon::ROAD, $options);
    }

    public static function robot($options = []): Icon
    {
        return static::show(Icon::ROBOT, $options);
    }

    public static function rocket($options = []): Icon
    {
        return static::show(Icon::ROCKET, $options);
    }

    public static function route($options = []): Icon
    {
        return static::show(Icon::ROUTE, $options);
    }

    public static function rss($options = []): Icon
    {
        return static::show(Icon::RSS, $options);
    }

    public static function rssSquare($options = []): Icon
    {
        return static::show(Icon::RSS_SQUARE, $options);
    }

    public static function rubleSign($options = []): Icon
    {
        return static::show(Icon::RUBLE_SIGN, $options);
    }

    public static function ruler($options = []): Icon
    {
        return static::show(Icon::RULER, $options);
    }

    public static function rulerCombined($options = []): Icon
    {
        return static::show(Icon::RULER_COMBINED, $options);
    }

    public static function rulerHorizontal($options = []): Icon
    {
        return static::show(Icon::RULER_HORIZONTAL, $options);
    }

    public static function rulerVertical($options = []): Icon
    {
        return static::show(Icon::RULER_VERTICAL, $options);
    }

    public static function running($options = []): Icon
    {
        return static::show(Icon::RUNNING, $options);
    }

    public static function rupeeSign($options = []): Icon
    {
        return static::show(Icon::RUPEE_SIGN, $options);
    }

    public static function sadCry($options = []): Icon
    {
        return static::show(Icon::SAD_CRY, $options);
    }

    public static function sadTear($options = []): Icon
    {
        return static::show(Icon::SAD_TEAR, $options);
    }

    public static function satellite($options = []): Icon
    {
        return static::show(Icon::SATELLITE, $options);
    }

    public static function satelliteDish($options = []): Icon
    {
        return static::show(Icon::SATELLITE_DISH, $options);
    }

    public static function save($options = []): Icon
    {
        return static::show(Icon::SAVE, $options);
    }

    public static function school($options = []): Icon
    {
        return static::show(Icon::SCHOOL, $options);
    }

    public static function screwdriver($options = []): Icon
    {
        return static::show(Icon::SCREWDRIVER, $options);
    }

    public static function scroll($options = []): Icon
    {
        return static::show(Icon::SCROLL, $options);
    }

    public static function sdCard($options = []): Icon
    {
        return static::show(Icon::SD_CARD, $options);
    }

    public static function search($options = []): Icon
    {
        return static::show(Icon::SEARCH, $options);
    }

    public static function searchDollar($options = []): Icon
    {
        return static::show(Icon::SEARCH_DOLLAR, $options);
    }

    public static function searchLocation($options = []): Icon
    {
        return static::show(Icon::SEARCH_LOCATION, $options);
    }

    public static function searchMinus($options = []): Icon
    {
        return static::show(Icon::SEARCH_MINUS, $options);
    }

    public static function searchPlus($options = []): Icon
    {
        return static::show(Icon::SEARCH_PLUS, $options);
    }

    public static function seedling($options = []): Icon
    {
        return static::show(Icon::SEEDLING, $options);
    }

    public static function server($options = []): Icon
    {
        return static::show(Icon::SERVER, $options);
    }

    public static function shapes($options = []): Icon
    {
        return static::show(Icon::SHAPES, $options);
    }

    public static function share($options = []): Icon
    {
        return static::show(Icon::SHARE, $options);
    }

    public static function shareAlt($options = []): Icon
    {
        return static::show(Icon::SHARE_ALT, $options);
    }

    public static function shareAltSquare($options = []): Icon
    {
        return static::show(Icon::SHARE_ALT_SQUARE, $options);
    }

    public static function shareSquare($options = []): Icon
    {
        return static::show(Icon::SHARE_SQUARE, $options);
    }

    public static function shekelSign($options = []): Icon
    {
        return static::show(Icon::SHEKEL_SIGN, $options);
    }

    public static function shieldAlt($options = []): Icon
    {
        return static::show(Icon::SHIELD_ALT, $options);
    }

    public static function shieldVirus($options = []): Icon
    {
        return static::show(Icon::SHIELD_VIRUS, $options);
    }

    public static function ship($options = []): Icon
    {
        return static::show(Icon::SHIP, $options);
    }

    public static function shippingFast($options = []): Icon
    {
        return static::show(Icon::SHIPPING_FAST, $options);
    }

    public static function shoePrints($options = []): Icon
    {
        return static::show(Icon::SHOE_PRINTS, $options);
    }

    public static function shoppingBag($options = []): Icon
    {
        return static::show(Icon::SHOPPING_BAG, $options);
    }

    public static function shoppingBasket($options = []): Icon
    {
        return static::show(Icon::SHOPPING_BASKET, $options);
    }

    public static function shoppingCart($options = []): Icon
    {
        return static::show(Icon::SHOPPING_CART, $options);
    }

    public static function shower($options = []): Icon
    {
        return static::show(Icon::SHOWER, $options);
    }

    public static function shuttleVan($options = []): Icon
    {
        return static::show(Icon::SHUTTLE_VAN, $options);
    }

    public static function sigma($options = []): Icon
    {
        return static::show(Icon::SIGMA, $options);
    }

    public static function sign($options = []): Icon
    {
        return static::show(Icon::SIGN, $options);
    }

    public static function signInAlt($options = []): Icon
    {
        return static::show(Icon::SIGN_IN_ALT, $options);
    }

    public static function signLanguage($options = []): Icon
    {
        return static::show(Icon::SIGN_LANGUAGE, $options);
    }

    public static function signOutAlt($options = []): Icon
    {
        return static::show(Icon::SIGN_OUT_ALT, $options);
    }

    public static function signal($options = []): Icon
    {
        return static::show(Icon::SIGNAL, $options);
    }

    public static function signalAlt($options = []): Icon
    {
        return static::show(Icon::SIGNAL_ALT, $options);
    }

    public static function signalAltSlash($options = []): Icon
    {
        return static::show(Icon::SIGNAL_ALT_SLASH, $options);
    }

    public static function signalSlash($options = []): Icon
    {
        return static::show(Icon::SIGNAL_SLASH, $options);
    }

    public static function signature($options = []): Icon
    {
        return static::show(Icon::SIGNATURE, $options);
    }

    public static function simCard($options = []): Icon
    {
        return static::show(Icon::SIM_CARD, $options);
    }

    public static function sink($options = []): Icon
    {
        return static::show(Icon::SINK, $options);
    }

    public static function sitemap($options = []): Icon
    {
        return static::show(Icon::SITEMAP, $options);
    }

    public static function skating($options = []): Icon
    {
        return static::show(Icon::SKATING, $options);
    }

    public static function skiing($options = []): Icon
    {
        return static::show(Icon::SKIING, $options);
    }

    public static function skiingNordic($options = []): Icon
    {
        return static::show(Icon::SKIING_NORDIC, $options);
    }

    public static function skull($options = []): Icon
    {
        return static::show(Icon::SKULL, $options);
    }

    public static function skullCrossbones($options = []): Icon
    {
        return static::show(Icon::SKULL_CROSSBONES, $options);
    }

    public static function slash($options = []): Icon
    {
        return static::show(Icon::SLASH, $options);
    }

    public static function sleigh($options = []): Icon
    {
        return static::show(Icon::SLEIGH, $options);
    }

    public static function slidersH($options = []): Icon
    {
        return static::show(Icon::SLIDERS_H, $options);
    }

    public static function smile($options = []): Icon
    {
        return static::show(Icon::SMILE, $options);
    }

    public static function smileBeam($options = []): Icon
    {
        return static::show(Icon::SMILE_BEAM, $options);
    }

    public static function smileWink($options = []): Icon
    {
        return static::show(Icon::SMILE_WINK, $options);
    }

    public static function smog($options = []): Icon
    {
        return static::show(Icon::SMOG, $options);
    }

    public static function smoking($options = []): Icon
    {
        return static::show(Icon::SMOKING, $options);
    }

    public static function smokingBan($options = []): Icon
    {
        return static::show(Icon::SMOKING_BAN, $options);
    }

    public static function sms($options = []): Icon
    {
        return static::show(Icon::SMS, $options);
    }

    public static function snowboarding($options = []): Icon
    {
        return static::show(Icon::SNOWBOARDING, $options);
    }

    public static function snowflake($options = []): Icon
    {
        return static::show(Icon::SNOWFLAKE, $options);
    }

    public static function snowman($options = []): Icon
    {
        return static::show(Icon::SNOWMAN, $options);
    }

    public static function snowplow($options = []): Icon
    {
        return static::show(Icon::SNOWPLOW, $options);
    }

    public static function soap($options = []): Icon
    {
        return static::show(Icon::SOAP, $options);
    }

    public static function socks($options = []): Icon
    {
        return static::show(Icon::SOCKS, $options);
    }

    public static function solarPanel($options = []): Icon
    {
        return static::show(Icon::SOLAR_PANEL, $options);
    }

    public static function sort($options = []): Icon
    {
        return static::show(Icon::SORT, $options);
    }

    public static function sortAlphaDown($options = []): Icon
    {
        return static::show(Icon::SORT_ALPHA_DOWN, $options);
    }

    public static function sortAlphaDownAlt($options = []): Icon
    {
        return static::show(Icon::SORT_ALPHA_DOWN_ALT, $options);
    }

    public static function sortAlphaUp($options = []): Icon
    {
        return static::show(Icon::SORT_ALPHA_UP, $options);
    }

    public static function sortAlphaUpAlt($options = []): Icon
    {
        return static::show(Icon::SORT_ALPHA_UP_ALT, $options);
    }

    public static function sortAmountDown($options = []): Icon
    {
        return static::show(Icon::SORT_AMOUNT_DOWN, $options);
    }

    public static function sortAmountDownAlt($options = []): Icon
    {
        return static::show(Icon::SORT_AMOUNT_DOWN_ALT, $options);
    }

    public static function sortAmountUp($options = []): Icon
    {
        return static::show(Icon::SORT_AMOUNT_UP, $options);
    }

    public static function sortAmountUpAlt($options = []): Icon
    {
        return static::show(Icon::SORT_AMOUNT_UP_ALT, $options);
    }

    public static function sortDown($options = []): Icon
    {
        return static::show(Icon::SORT_DOWN, $options);
    }

    public static function sortNumericDown($options = []): Icon
    {
        return static::show(Icon::SORT_NUMERIC_DOWN, $options);
    }

    public static function sortNumericDownAlt($options = []): Icon
    {
        return static::show(Icon::SORT_NUMERIC_DOWN_ALT, $options);
    }

    public static function sortNumericUp($options = []): Icon
    {
        return static::show(Icon::SORT_NUMERIC_UP, $options);
    }

    public static function sortNumericUpAlt($options = []): Icon
    {
        return static::show(Icon::SORT_NUMERIC_UP_ALT, $options);
    }

    public static function sortUp($options = []): Icon
    {
        return static::show(Icon::SORT_UP, $options);
    }

    public static function spa($options = []): Icon
    {
        return static::show(Icon::SPA, $options);
    }

    public static function spaceShuttle($options = []): Icon
    {
        return static::show(Icon::SPACE_SHUTTLE, $options);
    }

    public static function spellCheck($options = []): Icon
    {
        return static::show(Icon::SPELL_CHECK, $options);
    }

    public static function spider($options = []): Icon
    {
        return static::show(Icon::SPIDER, $options);
    }

    public static function spinner($options = []): Icon
    {
        return static::show(Icon::SPINNER, $options);
    }

    public static function splotch($options = []): Icon
    {
        return static::show(Icon::SPLOTCH, $options);
    }

    public static function sprayCan($options = []): Icon
    {
        return static::show(Icon::SPRAY_CAN, $options);
    }

    public static function square($options = []): Icon
    {
        return static::show(Icon::SQUARE, $options);
    }

    public static function squareFull($options = []): Icon
    {
        return static::show(Icon::SQUARE_FULL, $options);
    }

    public static function squareRoot($options = []): Icon
    {
        return static::show(Icon::SQUARE_ROOT, $options);
    }

    public static function squareRootAlt($options = []): Icon
    {
        return static::show(Icon::SQUARE_ROOT_ALT, $options);
    }

    public static function stamp($options = []): Icon
    {
        return static::show(Icon::STAMP, $options);
    }

    public static function star($options = []): Icon
    {
        return static::show(Icon::STAR, $options);
    }

    public static function starAndCrescent($options = []): Icon
    {
        return static::show(Icon::STAR_AND_CRESCENT, $options);
    }

    public static function starHalf($options = []): Icon
    {
        return static::show(Icon::STAR_HALF, $options);
    }

    public static function starHalfAlt($options = []): Icon
    {
        return static::show(Icon::STAR_HALF_ALT, $options);
    }

    public static function starOfDavid($options = []): Icon
    {
        return static::show(Icon::STAR_OF_DAVID, $options);
    }

    public static function starOfLife($options = []): Icon
    {
        return static::show(Icon::STAR_OF_LIFE, $options);
    }

    public static function stepBackward($options = []): Icon
    {
        return static::show(Icon::STEP_BACKWARD, $options);
    }

    public static function stepForward($options = []): Icon
    {
        return static::show(Icon::STEP_FORWARD, $options);
    }

    public static function stethoscope($options = []): Icon
    {
        return static::show(Icon::STETHOSCOPE, $options);
    }

    public static function stickyNote($options = []): Icon
    {
        return static::show(Icon::STICKY_NOTE, $options);
    }

    public static function stop($options = []): Icon
    {
        return static::show(Icon::STOP, $options);
    }

    public static function stopCircle($options = []): Icon
    {
        return static::show(Icon::STOP_CIRCLE, $options);
    }

    public static function stopwatch($options = []): Icon
    {
        return static::show(Icon::STOPWATCH, $options);
    }

    public static function stopwatch20($options = []): Icon
    {
        return static::show(Icon::STOPWATCH_20, $options);
    }

    public static function store($options = []): Icon
    {
        return static::show(Icon::STORE, $options);
    }

    public static function storeAlt($options = []): Icon
    {
        return static::show(Icon::STORE_ALT, $options);
    }

    public static function storeAltSlash($options = []): Icon
    {
        return static::show(Icon::STORE_ALT_SLASH, $options);
    }

    public static function storeSlash($options = []): Icon
    {
        return static::show(Icon::STORE_SLASH, $options);
    }

    public static function stream($options = []): Icon
    {
        return static::show(Icon::STREAM, $options);
    }

    public static function streetView($options = []): Icon
    {
        return static::show(Icon::STREET_VIEW, $options);
    }

    public static function strikethrough($options = []): Icon
    {
        return static::show(Icon::STRIKETHROUGH, $options);
    }

    public static function stroopwafel($options = []): Icon
    {
        return static::show(Icon::STROOPWAFEL, $options);
    }

    public static function subscript($options = []): Icon
    {
        return static::show(Icon::SUBSCRIPT, $options);
    }

    public static function subway($options = []): Icon
    {
        return static::show(Icon::SUBWAY, $options);
    }

    public static function suitcase($options = []): Icon
    {
        return static::show(Icon::SUITCASE, $options);
    }

    public static function suitcaseRolling($options = []): Icon
    {
        return static::show(Icon::SUITCASE_ROLLING, $options);
    }

    public static function sun($options = []): Icon
    {
        return static::show(Icon::SUN, $options);
    }

    public static function superscript($options = []): Icon
    {
        return static::show(Icon::SUPERSCRIPT, $options);
    }

    public static function surprise($options = []): Icon
    {
        return static::show(Icon::SURPRISE, $options);
    }

    public static function swatchbook($options = []): Icon
    {
        return static::show(Icon::SWATCHBOOK, $options);
    }

    public static function swimmer($options = []): Icon
    {
        return static::show(Icon::SWIMMER, $options);
    }

    public static function swimmingPool($options = []): Icon
    {
        return static::show(Icon::SWIMMING_POOL, $options);
    }

    public static function synagogue($options = []): Icon
    {
        return static::show(Icon::SYNAGOGUE, $options);
    }

    public static function sync($options = []): Icon
    {
        return static::show(Icon::SYNC, $options);
    }

    public static function syncAlt($options = []): Icon
    {
        return static::show(Icon::SYNC_ALT, $options);
    }

    public static function syringe($options = []): Icon
    {
        return static::show(Icon::SYRINGE, $options);
    }

    public static function table($options = []): Icon
    {
        return static::show(Icon::TABLE, $options);
    }

    public static function tableTennis($options = []): Icon
    {
        return static::show(Icon::TABLE_TENNIS, $options);
    }

    public static function tablet($options = []): Icon
    {
        return static::show(Icon::TABLET, $options);
    }

    public static function tabletAlt($options = []): Icon
    {
        return static::show(Icon::TABLET_ALT, $options);
    }

    public static function tablets($options = []): Icon
    {
        return static::show(Icon::TABLETS, $options);
    }

    public static function tachometerAlt($options = []): Icon
    {
        return static::show(Icon::TACHOMETER_ALT, $options);
    }

    public static function tag($options = []): Icon
    {
        return static::show(Icon::TAG, $options);
    }

    public static function tags($options = []): Icon
    {
        return static::show(Icon::TAGS, $options);
    }

    public static function tally($options = []): Icon
    {
        return static::show(Icon::TALLY, $options);
    }

    public static function tape($options = []): Icon
    {
        return static::show(Icon::TAPE, $options);
    }

    public static function tasks($options = []): Icon
    {
        return static::show(Icon::TASKS, $options);
    }

    public static function taxi($options = []): Icon
    {
        return static::show(Icon::TAXI, $options);
    }

    public static function teeth($options = []): Icon
    {
        return static::show(Icon::TEETH, $options);
    }

    public static function teethOpen($options = []): Icon
    {
        return static::show(Icon::TEETH_OPEN, $options);
    }

    public static function temperatureHigh($options = []): Icon
    {
        return static::show(Icon::TEMPERATURE_HIGH, $options);
    }

    public static function temperatureLow($options = []): Icon
    {
        return static::show(Icon::TEMPERATURE_LOW, $options);
    }

    public static function tenge($options = []): Icon
    {
        return static::show(Icon::TENGE, $options);
    }

    public static function terminal($options = []): Icon
    {
        return static::show(Icon::TERMINAL, $options);
    }

    public static function textHeight($options = []): Icon
    {
        return static::show(Icon::TEXT_HEIGHT, $options);
    }

    public static function textWidth($options = []): Icon
    {
        return static::show(Icon::TEXT_WIDTH, $options);
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

    public static function theaterMasks($options = []): Icon
    {
        return static::show(Icon::THEATER_MASKS, $options);
    }

    public static function thermometer($options = []): Icon
    {
        return static::show(Icon::THERMOMETER, $options);
    }

    public static function thermometerEmpty($options = []): Icon
    {
        return static::show(Icon::THERMOMETER_EMPTY, $options);
    }

    public static function thermometerFull($options = []): Icon
    {
        return static::show(Icon::THERMOMETER_FULL, $options);
    }

    public static function thermometerHalf($options = []): Icon
    {
        return static::show(Icon::THERMOMETER_HALF, $options);
    }

    public static function thermometerQuarter($options = []): Icon
    {
        return static::show(Icon::THERMOMETER_QUARTER, $options);
    }

    public static function thermometerThreeQuarters($options = []): Icon
    {
        return static::show(Icon::THERMOMETER_THREE_QUARTERS, $options);
    }

    public static function theta($options = []): Icon
    {
        return static::show(Icon::THETA, $options);
    }

    public static function thumbsDown($options = []): Icon
    {
        return static::show(Icon::THUMBS_DOWN, $options);
    }

    public static function thumbsUp($options = []): Icon
    {
        return static::show(Icon::THUMBS_UP, $options);
    }

    public static function thumbtack($options = []): Icon
    {
        return static::show(Icon::THUMBTACK, $options);
    }

    public static function ticketAlt($options = []): Icon
    {
        return static::show(Icon::TICKET_ALT, $options);
    }

    public static function tilde($options = []): Icon
    {
        return static::show(Icon::TILDE, $options);
    }

    public static function times($options = []): Icon
    {
        return static::show(Icon::TIMES, $options);
    }

    public static function timesCircle($options = []): Icon
    {
        return static::show(Icon::TIMES_CIRCLE, $options);
    }

    public static function tint($options = []): Icon
    {
        return static::show(Icon::TINT, $options);
    }

    public static function tintSlash($options = []): Icon
    {
        return static::show(Icon::TINT_SLASH, $options);
    }

    public static function tired($options = []): Icon
    {
        return static::show(Icon::TIRED, $options);
    }

    public static function toggleOff($options = []): Icon
    {
        return static::show(Icon::TOGGLE_OFF, $options);
    }

    public static function toggleOn($options = []): Icon
    {
        return static::show(Icon::TOGGLE_ON, $options);
    }

    public static function toilet($options = []): Icon
    {
        return static::show(Icon::TOILET, $options);
    }

    public static function toiletPaper($options = []): Icon
    {
        return static::show(Icon::TOILET_PAPER, $options);
    }

    public static function toiletPaperSlash($options = []): Icon
    {
        return static::show(Icon::TOILET_PAPER_SLASH, $options);
    }

    public static function toolbox($options = []): Icon
    {
        return static::show(Icon::TOOLBOX, $options);
    }

    public static function tools($options = []): Icon
    {
        return static::show(Icon::TOOLS, $options);
    }

    public static function tooth($options = []): Icon
    {
        return static::show(Icon::TOOTH, $options);
    }

    public static function torah($options = []): Icon
    {
        return static::show(Icon::TORAH, $options);
    }

    public static function toriiGate($options = []): Icon
    {
        return static::show(Icon::TORII_GATE, $options);
    }

    public static function tractor($options = []): Icon
    {
        return static::show(Icon::TRACTOR, $options);
    }

    public static function trademark($options = []): Icon
    {
        return static::show(Icon::TRADEMARK, $options);
    }

    public static function trafficLight($options = []): Icon
    {
        return static::show(Icon::TRAFFIC_LIGHT, $options);
    }

    public static function trailer($options = []): Icon
    {
        return static::show(Icon::TRAILER, $options);
    }

    public static function train($options = []): Icon
    {
        return static::show(Icon::TRAIN, $options);
    }

    public static function tram($options = []): Icon
    {
        return static::show(Icon::TRAM, $options);
    }

    public static function transgender($options = []): Icon
    {
        return static::show(Icon::TRANSGENDER, $options);
    }

    public static function transgenderAlt($options = []): Icon
    {
        return static::show(Icon::TRANSGENDER_ALT, $options);
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

    public static function tree($options = []): Icon
    {
        return static::show(Icon::TREE, $options);
    }

    public static function trophy($options = []): Icon
    {
        return static::show(Icon::TROPHY, $options);
    }

    public static function truck($options = []): Icon
    {
        return static::show(Icon::TRUCK, $options);
    }

    public static function truckLoading($options = []): Icon
    {
        return static::show(Icon::TRUCK_LOADING, $options);
    }

    public static function truckMonster($options = []): Icon
    {
        return static::show(Icon::TRUCK_MONSTER, $options);
    }

    public static function truckMoving($options = []): Icon
    {
        return static::show(Icon::TRUCK_MOVING, $options);
    }

    public static function truckPickup($options = []): Icon
    {
        return static::show(Icon::TRUCK_PICKUP, $options);
    }

    public static function tshirt($options = []): Icon
    {
        return static::show(Icon::TSHIRT, $options);
    }

    public static function tty($options = []): Icon
    {
        return static::show(Icon::TTY, $options);
    }

    public static function tv($options = []): Icon
    {
        return static::show(Icon::TV, $options);
    }

    public static function umbrella($options = []): Icon
    {
        return static::show(Icon::UMBRELLA, $options);
    }

    public static function umbrellaBeach($options = []): Icon
    {
        return static::show(Icon::UMBRELLA_BEACH, $options);
    }

    public static function underline($options = []): Icon
    {
        return static::show(Icon::UNDERLINE, $options);
    }

    public static function undo($options = []): Icon
    {
        return static::show(Icon::UNDO, $options);
    }

    public static function undoAlt($options = []): Icon
    {
        return static::show(Icon::UNDO_ALT, $options);
    }

    public static function union($options = []): Icon
    {
        return static::show(Icon::UNION, $options);
    }

    public static function universalAccess($options = []): Icon
    {
        return static::show(Icon::UNIVERSAL_ACCESS, $options);
    }

    public static function university($options = []): Icon
    {
        return static::show(Icon::UNIVERSITY, $options);
    }

    public static function unlink($options = []): Icon
    {
        return static::show(Icon::UNLINK, $options);
    }

    public static function unlock($options = []): Icon
    {
        return static::show(Icon::UNLOCK, $options);
    }

    public static function unlockAlt($options = []): Icon
    {
        return static::show(Icon::UNLOCK_ALT, $options);
    }

    public static function upload($options = []): Icon
    {
        return static::show(Icon::UPLOAD, $options);
    }

    public static function user($options = []): Icon
    {
        return static::show(Icon::USER, $options);
    }

    public static function userAlt($options = []): Icon
    {
        return static::show(Icon::USER_ALT, $options);
    }

    public static function userAltSlash($options = []): Icon
    {
        return static::show(Icon::USER_ALT_SLASH, $options);
    }

    public static function userAstronaut($options = []): Icon
    {
        return static::show(Icon::USER_ASTRONAUT, $options);
    }

    public static function userCheck($options = []): Icon
    {
        return static::show(Icon::USER_CHECK, $options);
    }

    public static function userCircle($options = []): Icon
    {
        return static::show(Icon::USER_CIRCLE, $options);
    }

    public static function userClock($options = []): Icon
    {
        return static::show(Icon::USER_CLOCK, $options);
    }

    public static function userCog($options = []): Icon
    {
        return static::show(Icon::USER_COG, $options);
    }

    public static function userEdit($options = []): Icon
    {
        return static::show(Icon::USER_EDIT, $options);
    }

    public static function userFriends($options = []): Icon
    {
        return static::show(Icon::USER_FRIENDS, $options);
    }

    public static function userGraduate($options = []): Icon
    {
        return static::show(Icon::USER_GRADUATE, $options);
    }

    public static function userInjured($options = []): Icon
    {
        return static::show(Icon::USER_INJURED, $options);
    }

    public static function userLock($options = []): Icon
    {
        return static::show(Icon::USER_LOCK, $options);
    }

    public static function userMd($options = []): Icon
    {
        return static::show(Icon::USER_MD, $options);
    }

    public static function userMinus($options = []): Icon
    {
        return static::show(Icon::USER_MINUS, $options);
    }

    public static function userNinja($options = []): Icon
    {
        return static::show(Icon::USER_NINJA, $options);
    }

    public static function userNurse($options = []): Icon
    {
        return static::show(Icon::USER_NURSE, $options);
    }

    public static function userPlus($options = []): Icon
    {
        return static::show(Icon::USER_PLUS, $options);
    }

    public static function userSecret($options = []): Icon
    {
        return static::show(Icon::USER_SECRET, $options);
    }

    public static function userShield($options = []): Icon
    {
        return static::show(Icon::USER_SHIELD, $options);
    }

    public static function userSlash($options = []): Icon
    {
        return static::show(Icon::USER_SLASH, $options);
    }

    public static function userTag($options = []): Icon
    {
        return static::show(Icon::USER_TAG, $options);
    }

    public static function userTie($options = []): Icon
    {
        return static::show(Icon::USER_TIE, $options);
    }

    public static function userTimes($options = []): Icon
    {
        return static::show(Icon::USER_TIMES, $options);
    }

    public static function users($options = []): Icon
    {
        return static::show(Icon::USERS, $options);
    }

    public static function usersCog($options = []): Icon
    {
        return static::show(Icon::USERS_COG, $options);
    }

    public static function usersSlash($options = []): Icon
    {
        return static::show(Icon::USERS_SLASH, $options);
    }

    public static function utensilSpoon($options = []): Icon
    {
        return static::show(Icon::UTENSIL_SPOON, $options);
    }

    public static function utensils($options = []): Icon
    {
        return static::show(Icon::UTENSILS, $options);
    }

    public static function valueAbsolute($options = []): Icon
    {
        return static::show(Icon::VALUE_ABSOLUTE, $options);
    }

    public static function vectorSquare($options = []): Icon
    {
        return static::show(Icon::VECTOR_SQUARE, $options);
    }

    public static function venus($options = []): Icon
    {
        return static::show(Icon::VENUS, $options);
    }

    public static function venusDouble($options = []): Icon
    {
        return static::show(Icon::VENUS_DOUBLE, $options);
    }

    public static function venusMars($options = []): Icon
    {
        return static::show(Icon::VENUS_MARS, $options);
    }

    public static function vest($options = []): Icon
    {
        return static::show(Icon::VEST, $options);
    }

    public static function vestPatches($options = []): Icon
    {
        return static::show(Icon::VEST_PATCHES, $options);
    }

    public static function vial($options = []): Icon
    {
        return static::show(Icon::VIAL, $options);
    }

    public static function vials($options = []): Icon
    {
        return static::show(Icon::VIALS, $options);
    }

    public static function video($options = []): Icon
    {
        return static::show(Icon::VIDEO, $options);
    }

    public static function videoSlash($options = []): Icon
    {
        return static::show(Icon::VIDEO_SLASH, $options);
    }

    public static function vihara($options = []): Icon
    {
        return static::show(Icon::VIHARA, $options);
    }

    public static function virus($options = []): Icon
    {
        return static::show(Icon::VIRUS, $options);
    }

    public static function virusSlash($options = []): Icon
    {
        return static::show(Icon::VIRUS_SLASH, $options);
    }

    public static function viruses($options = []): Icon
    {
        return static::show(Icon::VIRUSES, $options);
    }

    public static function voicemail($options = []): Icon
    {
        return static::show(Icon::VOICEMAIL, $options);
    }

    public static function volleyballBall($options = []): Icon
    {
        return static::show(Icon::VOLLEYBALL_BALL, $options);
    }

    public static function volume($options = []): Icon
    {
        return static::show(Icon::VOLUME, $options);
    }

    public static function volumeDown($options = []): Icon
    {
        return static::show(Icon::VOLUME_DOWN, $options);
    }

    public static function volumeMute($options = []): Icon
    {
        return static::show(Icon::VOLUME_MUTE, $options);
    }

    public static function volumeOff($options = []): Icon
    {
        return static::show(Icon::VOLUME_OFF, $options);
    }

    public static function volumeSlash($options = []): Icon
    {
        return static::show(Icon::VOLUME_SLASH, $options);
    }

    public static function volumeUp($options = []): Icon
    {
        return static::show(Icon::VOLUME_UP, $options);
    }

    public static function voteYea($options = []): Icon
    {
        return static::show(Icon::VOTE_YEA, $options);
    }

    public static function vrCardboard($options = []): Icon
    {
        return static::show(Icon::VR_CARDBOARD, $options);
    }

    public static function walking($options = []): Icon
    {
        return static::show(Icon::WALKING, $options);
    }

    public static function wallet($options = []): Icon
    {
        return static::show(Icon::WALLET, $options);
    }

    public static function warehouse($options = []): Icon
    {
        return static::show(Icon::WAREHOUSE, $options);
    }

    public static function water($options = []): Icon
    {
        return static::show(Icon::WATER, $options);
    }

    public static function waveSquare($options = []): Icon
    {
        return static::show(Icon::WAVE_SQUARE, $options);
    }

    public static function weight($options = []): Icon
    {
        return static::show(Icon::WEIGHT, $options);
    }

    public static function weightHanging($options = []): Icon
    {
        return static::show(Icon::WEIGHT_HANGING, $options);
    }

    public static function wheelchair($options = []): Icon
    {
        return static::show(Icon::WHEELCHAIR, $options);
    }

    public static function wifi($options = []): Icon
    {
        return static::show(Icon::WIFI, $options);
    }

    public static function wifiSlash($options = []): Icon
    {
        return static::show(Icon::WIFI_SLASH, $options);
    }

    public static function wind($options = []): Icon
    {
        return static::show(Icon::WIND, $options);
    }

    public static function windowClose($options = []): Icon
    {
        return static::show(Icon::WINDOW_CLOSE, $options);
    }

    public static function windowMaximize($options = []): Icon
    {
        return static::show(Icon::WINDOW_MAXIMIZE, $options);
    }

    public static function windowMinimize($options = []): Icon
    {
        return static::show(Icon::WINDOW_MINIMIZE, $options);
    }

    public static function windowRestore($options = []): Icon
    {
        return static::show(Icon::WINDOW_RESTORE, $options);
    }

    public static function wineBottle($options = []): Icon
    {
        return static::show(Icon::WINE_BOTTLE, $options);
    }

    public static function wineGlass($options = []): Icon
    {
        return static::show(Icon::WINE_GLASS, $options);
    }

    public static function wineGlassAlt($options = []): Icon
    {
        return static::show(Icon::WINE_GLASS_ALT, $options);
    }

    public static function wonSign($options = []): Icon
    {
        return static::show(Icon::WON_SIGN, $options);
    }

    public static function wrench($options = []): Icon
    {
        return static::show(Icon::WRENCH, $options);
    }

    public static function xRay($options = []): Icon
    {
        return static::show(Icon::X_RAY, $options);
    }

    public static function yenSign($options = []): Icon
    {
        return static::show(Icon::YEN_SIGN, $options);
    }

    public static function yinYang($options = []): Icon
    {
        return static::show(Icon::YIN_YANG, $options);
    }
}
