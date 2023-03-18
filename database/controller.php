<?php
    if (isset($POST['submit'])) { // capturar informacion con el isset verifica si existe
        $username = $POST['username'];
        $password = $POST['password'];

        if( empty($username) || empty ($password) ) { // verifica si esta vacio con el empty 
            echo '<div class = "alert alert-danger>Nombre de usuario o contraseña vacia </div>"';
        }else{ 
            $user = new user;
            if($user->getuser($username,$password)){// si el objeto usuario es igual al que trajo el GET en la BD
                session_start();
                $_SESSION['usuario'] = $username;
                header('Location: templates/inicio.php');
            }else{
                echo '<div class = "alert alert-danger>Lo siento, su usuario no se encuentra registrado</div>"';
            }

    }
}