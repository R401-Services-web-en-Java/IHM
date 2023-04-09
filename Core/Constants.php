<?php

// Rappel : nous sommes dans le répertoire Core, voilà pourquoi dans realpath je "remonte d'un cran" pour faire référence
// à la VRAIE racine de mon application

/**
 *
 */
final class Constants
{
    // Les constantes relatives aux chemins

    /**
     *
     */
    const VIEW_DIRECTORY        = '/Views/';

    /**
     *
     */
    const MODEL_DIRECTORY      = '/Model/';

    /**
     *
     */
    const CORE_DIRECTORY       = '/Core/';

    /**
     *
     */
    const EXCEPTIONS_DIRECTORY  = '/Core/Exceptions/';

    /**
     *
     */
    const CONTROLLERS_DIRECTORY = '/Controllers/';

    /**
     * @return false|string
     */
    public static function rootDirectory() {
        return realpath(__DIR__ . '/../');
    }

    /**
     * @return string
     */
    public static function coreDirectory() {
        return self::rootDirectory() . self::CORE_DIRECTORY;
    }

    /**
     * @return string
     */
    public static function exceptionsDirectory() {
        return self::rootDirectory() . self::EXCEPTIONS_DIRECTORY;
    }

    /**
     * @return string
     */
    public static function viewsDirectory() {
        return self::rootDirectory() . self::VIEW_DIRECTORY;
    }

    /**
     * @return string
     */
    public static function modelDirectory() {
        return self::rootDirectory() . self::MODEL_DIRECTORY;
    }

    /**
     * @return string
     */
    public static function controllersDirectory() {
        return self::rootDirectory() . self::CONTROLLERS_DIRECTORY;
    }

}