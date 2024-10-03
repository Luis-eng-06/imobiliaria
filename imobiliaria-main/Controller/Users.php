<?php

public  function    index(){
    $users =  User::all();
    return  view('users',[
        'users'=> $users,
    ]);
}

@foreach ($users    as  $users)
    {(  $user->name)}<br/>
@endforeach

?>