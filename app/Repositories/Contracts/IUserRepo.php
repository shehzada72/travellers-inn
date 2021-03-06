<?php
/**
 * Created by PhpStorm.
 * User: soft
 * Date: 5/26/2017
 * Time: 6:04 PM
 */

namespace App\Repositories\Contracts;


interface IUserRepo extends IBaseRepo
{
    public function fetchUsers(array $params=[]);

    public function fetchDiariesByUserId(array $params=[]);

}