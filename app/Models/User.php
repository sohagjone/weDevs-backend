<?php 

namespace App\Models;
use DB;

class User
{
    function addUser($data)
    {
        DB::table('users')->insert($data);
    }
    function getUser($email)
    {
        $data = DB::table('users')->where('email', $email)->get();
        return $data;
    }

}

?>