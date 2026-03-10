<?php

namespace ByTIC\Icons;

use ByTIC\Icons\Icons\HasArrowIcons;
use ByTIC\Icons\Icons\HasAlertIcons;
use ByTIC\Icons\Icons\HasAnimalIcons;
use ByTIC\Icons\Icons\HasAudioVideoIcons;
use ByTIC\Icons\Icons\HasBuildingIcons;
use ByTIC\Icons\Icons\HasBusinessIcons;
use ByTIC\Icons\Icons\HasComputerIcons;
use ByTIC\Icons\Icons\HasConstructionIcons;
use ByTIC\Icons\Icons\HasCommunicationIcons;
use ByTIC\Icons\Icons\HasCurrencyIcons;
use ByTIC\Icons\Icons\HasDateTimeIcons;
use ByTIC\Icons\Icons\HasDesignIcons;
use ByTIC\Icons\Icons\HasEditorIcons;
use ByTIC\Icons\Icons\HasEmojiIcons;
use ByTIC\Icons\Icons\HasEnergyIcons;
use ByTIC\Icons\Icons\HasFileIcons;
use ByTIC\Icons\Icons\HasFoodIcons;
use ByTIC\Icons\Icons\HasGamesIcons;
use ByTIC\Icons\Icons\HasGenderIcons;
use ByTIC\Icons\Icons\HasHandIcons;
use ByTIC\Icons\Icons\HasInterfacesIcons;
use ByTIC\Icons\Icons\HasMapIcons;
use ByTIC\Icons\Icons\HasMathIcons;
use ByTIC\Icons\Icons\HasMedicalIcons;
use ByTIC\Icons\Icons\HasPeopleIcons;
use ByTIC\Icons\Icons\HasReligionIcons;
use ByTIC\Icons\Icons\HasShoppingIcons;
use ByTIC\Icons\Icons\HasSpinnerIcons;
use ByTIC\Icons\Icons\HasSportIcons;
use ByTIC\Icons\Icons\HasStatusIcons;
use ByTIC\Icons\Icons\HasTravelIcons;
use ByTIC\Icons\Icons\HasVehicleIcons;
use ByTIC\Icons\Icons\HasWeatherIcons;
use ByTIC\Icons\Icons\HasGenericIcons;

/**
 * Class Icons
 * @package ByTIC\Icons
 */
class Icons implements IconNames
{
    use HasArrowIcons;
    use HasAlertIcons;
    use HasAnimalIcons;
    use HasAudioVideoIcons;
    use HasBuildingIcons;
    use HasBusinessIcons;
    use HasComputerIcons;
    use HasConstructionIcons;
    use HasCommunicationIcons;
    use HasCurrencyIcons;
    use HasDateTimeIcons;
    use HasDesignIcons;
    use HasEditorIcons;
    use HasEmojiIcons;
    use HasEnergyIcons;
    use HasFileIcons;
    use HasFoodIcons;
    use HasGamesIcons;
    use HasGenderIcons;
    use HasHandIcons;
    use HasInterfacesIcons;
    use HasMapIcons;
    use HasMathIcons;
    use HasMedicalIcons;
    use HasPeopleIcons;
    use HasReligionIcons;
    use HasShoppingIcons;
    use HasSpinnerIcons;
    use HasSportIcons;
    use HasStatusIcons;
    use HasTravelIcons;
    use HasVehicleIcons;
    use HasWeatherIcons;
    use HasGenericIcons;

    /**
     * @param $name
     * @param array $options
     */
    public static function show($name, $options = []): Icon
    {
        return static::manager()->icon($name, $options);
    }

    /**
     * @param $name
     * @return Collections\IconCollection
     */
    public static function collection($name = null): Collections\IconCollection
    {
        return static::manager()->create($name);
    }

    protected static function manager($newManager= null): IconsManager
    {
        static $manager;
        if ($newManager instanceof IconsManager) {
            $manager = $newManager;
        } elseif (!($manager instanceof IconsManager)) {
            $manager = new IconsManager();
        }
        return $manager;
    }
}