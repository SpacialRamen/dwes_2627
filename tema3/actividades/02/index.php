<?php

    /*
        actividad 3.2
        formulario de registro con acceso segun perfil de usuario

        formulario de registro:
            nombre usuario
            email
            contraseña
            perfil de usuario (admin, edit, user)

        tipos de perfiles
            admin: añadir, eliminar, actualizar y consultar
            edit: añadir, actualizar y consultar
            user: consultar

    */

    //models

    //negociado
            //crear lista de perfiles
            $perfiles = ['admin', 'edit', 'user'];
    //vista

    include 'views/index.view.php';