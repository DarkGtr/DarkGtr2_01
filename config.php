<?php

    $db = new mysqli("eu-cdbr-azure-north-d.cloudapp.net",
       "b9603ac0131ff3", "71f593f3", "db1400003-02" );

    IF ($db->connect_error){
        die('Connectfailed'['.$db->connect_error.']);
    }

?>