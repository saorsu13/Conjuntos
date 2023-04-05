<?php

function ConexionBdTenant($tenant){
    env('DB_CONNECTION2',$tenant->driver);
    env('DB_PORT2',$tenant->port);
    env('DB_HOST2',$tenant->hostname);
    env('DB_DATABASE2',$tenant->database_name);
    env('DB_USERNAME2',$tenant->user_name);
    env('DB_PASSWORD2',$tenant->password);
}