<?php
    session_start();

    require 'Medoo.php';

    use Medoo\Medoo;

    try{
        $database = new Medoo([
                // [required]
                'type' => 'MariaDB',
                'host' => 'localhost',
                'database' => 'id20718292_cms_avanzado',
                'username' => 'id20718292_cecati_125_admin',
                'password' => 'Hi\Je)jodnx0D5_q',

            
            ]);
    }catch(PDOException $e){
        echo "No se pudo conectar a la base de datos";
    }

    
?>