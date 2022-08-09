<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use PhpParser\Node\Expr\Cast\Object_;
use App\Models\User ;



class UserController extends Controller
{
    function index(){
         $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true);
        return view('users.index', ["users" => $users]) ;
    }
    function create(){
        return view('users.create') ;  
    }
    function show($id){
       
        $users = $user = User::where('id', $id)->first();        ;
        return view ('users.show' -> with( ['id'=> $id]) );
        
    }
    function store(Request $request){
          // dd($requset->all());
        $name = $request->input('name') ;
        $email = $request->input('email') ;
        $password = $request->input('password') ;

        User::create([
            'name' => $name ,
            'password' => $password,
            'email' => $email
            ]
        );
    
        return header(route('users.index')); 
        
    }
    function edit($id){
        $user = User::where('id', $id)->first();
        return view('users.edit' , ['id' => $id , "user" => $user ]) ;
        
    }
    function update(Request $request , $id){
        
        $user = User::where('id', $id)->first() ; 
        $user->update(
            $request->only([
                'name' , 'email'
            ]) 
        );
    
        return redirect()->route("users.index") ;
        
    }
    function destroy($id){
        
        $user = User::where('id', $id)->first()->delete();

        return "account is deleted " ;

    }

   
   
    
  
    // public function update (Request $requset , $id)
    // {
    //     return  ' Upduate the specifed resource eith id in storage ';
    // }
    // public function destory ($id)
    // {
    //     return  "Delete the specifed resource with id from storage .";
    // }



}