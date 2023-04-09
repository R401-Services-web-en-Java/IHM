<?php

/**
 *
 */
final class View
{
    /**
     * @return void
     */
    public static function openBuffer()
    {
        // On démarre le tampon de sortie, on va l'appeler "tampon principal"
        ob_start();
    }

    /**
     * @return false|string
     */
    public static function getBufferContent()
    {
        // On retourne le contenu du tampon principal
        return ob_get_clean();
    }

    /**
     * @param $S_location
     * @param $A_parameters
     * @return void
     */
    public static function show ($S_location, $A_parameters = array())
    {
        $S_file = Constants::viewsDirectory() . $S_location . '.php';

        $A_view = $A_parameters;
        // Démarrage d'un sous-tampon
        ob_start();
        include $S_file; // c'est dans ce fichier que sera utilisé A_vue, la vue est inclue dans le sous-tampon
        ob_end_flush();
    }
}