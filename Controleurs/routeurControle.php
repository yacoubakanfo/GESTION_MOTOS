<?php

class RouteurControle
{
    public function controleur()
    {
        function charger_controleurs($controleur)
        {
            include($controleur.'.php');
        };

        spl_autoload_register('charger_controleurs');
    }
}