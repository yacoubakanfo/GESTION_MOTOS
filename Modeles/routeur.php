<?php

        function charger_class($class)
        {
            include($class.'.class.php');
        };

        spl_autoload_register('charger_class');

    