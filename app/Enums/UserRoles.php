<?php
namespace App\Enums;
enum UserRoles: int{
case DOCTOR     = 0;
case SECRETARY  = 1;
case ADMIN      = 2;
public static function values(): array
    {
         return array_column(self::cases(), 'value','name');
        // ["deposit" => "Deposit", "withdraw" => "Withdraw"]
    }
public static  function isDoctor( UserRoles $useRole)
{
    return $useRole->value == UserRoles::DOCTOR->value;
}
public static  function isSecretary( UserRoles $useRole)
{
    return $useRole->value == UserRoles::SECRETARY->value;
}

public static  function isAdmin( UserRoles $useRole)
{
    return $useRole->value == UserRoles::ADMIN->value;
}
}