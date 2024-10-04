<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserContoller extends Controller 

{

    public function show(User $user) {
        return $user;
    }
}



?>