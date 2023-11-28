<?php

class Security extends Connection
{

    //nos guardamos en los atributos el login y el index.php

    private string $loginPage = "login.php";
    private string $homePage = "inicio.php";

    public function __construct()
    {
        $this->connect(); //establecemos la conexion

        if(session_status() !== PHP_SESSION_ACTIVE) session_start(); //Le decimos que a partor de ahora vamos a usar el sistema de sesiones, tendremos que invocarlo en cualquier otro punto de la app donde las vayamos a utilizar

    }

    //Esta función comprueba si estamos loggeados
    public function checkLoggedIn()
    {
        //Este condicional comprueba si está establecida la variable de session loggedIn o si está establecida a false
        if (!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"]) {
            header("Location: " . $this->loginPage);
        }
    }

    public function doLogin()
    {
        if (count($_POST) > 0) {
            $user = $this->getUser($_POST["userAccount"]); //obtenemos la información del usuario con getUser y nos la guardamos en $user
            $_SESSION["loggedIn"] = $this->checkUser($user, $_POST["userPassword"]) ? $user["nombreCuenta"] : false; //checkUser comprueba si el usuario está correctamente identificado o no
            if ($_SESSION["loggedIn"]) {
                //si la variable de session loggedIn está establecida nos redirige a el index.php
                header("Location: " . $this->homePage);
            } else {
                //de lo contrario nos informa de que es incorrecto, esto lo usaremos posteriormente para escribir un mensaje en la zona del cuestionario avisandonos del error
                return "Incorrect User Account or Password";
            }
        } else {
            return null; //si no tenemos información de post, nos retorna un null, ya que la primera vez que entremos no habrá dicha información
        }
    }

    public function getUserData()
    {
        //esta función te dice que usuario es
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            return $_SESSION["loggedIn"];
        }
    }

    private function checkUser($user, $userPassword)
    {
        //compruebo que el usuario no sea false, ya el getUser me puede devolver falso en caso de que no esté dicho usuario
        if ($user) {
            return $this->checkPassword($user["contraseña"], $userPassword);
        } else {
            return false;
        }
    }

    private function checkPassword($securePassword, $userPassword)
    {
        //return password_verify($userPassword, $securePassword); Password verify desencriptas
        return ($userPassword === $securePassword); //en el caso de que no tenga seguridad solo retornamos si las dos passwords son iguales
    }

    private function getUser($userAccount)
    {
        $stmt = $this->conn->prepare("SELECT * FROM cliente WHERE nombreCuenta = ? ");
        $stmt->bindParam(1, $userAccount, PDO::PARAM_STR);

        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            return $data;
        } else {
            return null;
        }
    }

}
