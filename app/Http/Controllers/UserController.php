<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//namespace App\Http\Controllers;
    
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{

    public function index ()
    { dd('ok');
        $users = json_decode(\Illuminate\Support\Facades\File::get(\storage_path('users.json')),true);
        return view ('users.index',["users" => $users]);
      
    }
    public function create ()
    { 
        return view ('users.create');
    }
    public function store (Requset $requset)
    { 
    dd($requset->all());
    }

    public function show ($id)
    { 
        return view ('users.show' -> with( ['id'=> $id]) );
    }
    public function update (Request $requset , $id)
    {
        return  ' Upduate the specifed resource eith id in storage ';
    }
    public function destory ($id)
    {
        return  "Delete the specifed resource with id from storage .";
    }



}