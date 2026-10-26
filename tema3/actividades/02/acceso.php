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
            //obtener los detalles del formulario
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $profile = $_POST['profile'];
    //vista

    include 'views/acceso.view.php';