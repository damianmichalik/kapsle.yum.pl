<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 2017-04-22
 * Time: 09:28
 */

namespace AppBundle\Utils;

class Tools
{
    public static function getRoles()
    {
        $roles = array(
            "Główny administrator" => "ROLE_SUPER_ADMIN" ,
            "Administrator" => "ROLE_ADMIN" ,
            "Użytkownik" => "ROLE_USER",
        );

        return $roles;
    }
}
