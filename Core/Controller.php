<?php

/**
 *
 */
final class Controller
{
    /**
     * @var
     */
    private $_A_peeredUrl;

    /**
     * @var array|string[]
     */
    private $_A_urlParameters;

    /**
     * @var
     */
    private $_A_postParams;

    /**
     * @param $S_url
     * @param $A_postParams
     */
    public function __construct ($S_url, $A_postParams)
    {
        if(!empty($S_url)) {
            // On élimine l'éventuel slash en fin d'URL sinon notre explode renverra une dernière entrée vide
            if ('/' == substr($S_url, -1, 1)) {
                $S_url = substr($S_url, 0, strlen($S_url) - 1);
            }

            // On éclate l'URL, elle va prendre place dans un tableau
            $A_urlToPeered = explode('/', $S_url);
        }

        if (empty($A_urlToPeered[0])) {
            // Nous avons pris le parti de préfixer tous les controleurs par "Controller"
            $A_urlToPeered[0] = 'HomeController';
        } else {
            $A_urlToPeered[0] =  ucfirst($A_urlToPeered[0]) . 'Controller';
        }

        if (empty($A_urlToPeered[1])) {
            // L'action est vide ! On la valorise par défaut
            $A_urlToPeered[1] = 'defaultAction';
        } else {
            // On part du principe que toutes nos actions sont suffixées par 'Action'...à nous de le rajouter
            $A_urlToPeered[1] = $A_urlToPeered[1] . 'Action';
        }


        // on dépile 2 fois de suite depuis le début, c'est à dire qu'on enlève de notre tableau le contrôleur et l'action
        // il ne reste donc que les éventuels parametres (si nous en avons)...
        $this->_A_peeredUrl['controller'] = array_shift($A_urlToPeered); // on recupere le contrôleur
        $this->_A_peeredUrl['action']     = array_shift($A_urlToPeered); // puis l'action

        // ...on stocke ces éventuels parametres dans la variable d'instance qui leur est réservée
        $this->_A_urlParameters = $A_urlToPeered;

        // On  s'occupe du tableau $A_postParams
        $this->_A_postParams = $A_postParams;


    }

    // On exécute notre triplet

    /**
     * @return void
     * @throws ControllerException
     */
    public function execute()
    {
        if (!class_exists($this->_A_peeredUrl['controller'])) {
            throw new ControllerException();
        }

        if (!method_exists($this->_A_peeredUrl['controller'], $this->_A_peeredUrl['action'])) {
            throw new ControllerException();
        }

        $B_called = call_user_func_array(array(new $this->_A_peeredUrl['controller'],
            $this->_A_peeredUrl['action']), array($this->_A_urlParameters, $this->_A_postParams ));

        if (false === $B_called) {
            throw new ControllerException();
        }
    }
}