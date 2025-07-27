<?php

namespace App\Utils;

class UtilPermissions
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

    // con esta función devolvemos array de id que tiene asociado el usuario con la sesión activa
    public  static function getUserClients() : array {
        try {
            return auth()->user()->clientesId();
        } catch (\Throwable $th) {
            return [];
        }
    }

    public static function getUserPermissions() : array {
        try {
            $user = auth()->user();
            if(!$user) {
                return [];
            }
            return $user->getAllPermissions()->pluck('id')->toArray();
        } catch (\Throwable $th) {
            return [];
        }
    }

    public static function getUserPermissionsByName() : array {
        try {
            $user = auth()->user();
            if(!$user) {
                return [];
            }
            return $user->getAllPermissions()->pluck('name')->toArray();
        } catch (\Throwable $th) {
            return [];
        }
    }
}
