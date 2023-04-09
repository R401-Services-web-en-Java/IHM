<?php

require 'Core/Constants.php';

/**
 *
 */
final class AutoLoad
{
    /**
     * @param $S_className
     * @return null
     */
    public static function loadCoreClasses($S_className)
    {
        $S_file = Constants::coreDirectory() . "$S_className.php";
        return static::_load($S_file);
    }

    /**
     * @param $S_className
     * @return null
     */
    public static function loadExceptionClasses($S_className)
    {
        $S_file = Constants::exceptionsDirectory() . "$S_className.php";

        return static::_load($S_file);
    }

    /**
     * @param $S_className
     * @return null
     */
    public static function loadModelClasses($S_className)
    {
        $S_file = Constants::modelDirectory() . "$S_className.php";

        return static::_load($S_file);
    }


    /**
     * @param $S_className
     * @return null
     */
    public static function loadViewClasses($S_className)
    {
        $S_file = Constants::viewsDirectory() . "$S_className.php";

        return static::_load($S_file);
    }

    /**
     * @param $S_className
     * @return null
     */
    public static function loadControllerClass($S_className)
    {
        $S_file = Constants::controllersDirectory() . "$S_className.php";

        return static::_load($S_file);
    }

    /**
     * @param $S_className
     * @return null
     */
    public static function loadDatabaseClass($S_className)
    {
        $S_file = Constants::databseDirectory() . "$S_className.php";

        return static::_load($S_file);
    }

    /**
     * @param $S_className
     * @return null
     */
    public static function loadPHPMailerClasses($S_className)
    {
        $S_file = Constants::phpMailerDirectory() . "$S_className.php";

        return static::_load($S_file);
    }

    /**
     * @param $S_fileToLoad
     * @return void
     */
    private static function _load($S_fileToLoad)
    {
        if (is_readable($S_fileToLoad)) {
            require $S_fileToLoad;
        }
    }
}

// J'empile tout ce beau monde comme j'ai toujours appris à le faire...
spl_autoload_register('AutoLoad::loadCoreClasses');
spl_autoload_register('AutoLoad::loadExceptionClasses');
spl_autoload_register('AutoLoad::loadModelClasses');
spl_autoload_register('AutoLoad::loadViewClasses');
spl_autoload_register('AutoLoad::loadControllerClass');
