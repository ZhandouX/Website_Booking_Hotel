<?php

namespace App\Helpers;

class UserJsonHelper
{
    public static function getAllUsers()
    {
        $file = storage_path('app/users.json');
        if (!file_exists($file)) return [];
        return json_decode(file_get_contents($file), true);
    }

    public static function saveUser($data)
    {
        $users = self::getAllUsers();
        $users[] = $data;
        file_put_contents(storage_path('app/users.json'), json_encode($users, JSON_PRETTY_PRINT));
    }

    public static function findUserByEmail($email)
    {
        $users = self::getAllUsers();
        foreach ($users as $user) {
            if ($user['email'] === $email) {
                return $user;
            }
        }
        return null;
    }
}
