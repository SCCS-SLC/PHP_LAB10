<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

//https://laravel.com/docs/12.x/database
use Illuminate\Support\Facades\DB;

//https://stackoverflow.com/questions/44696084/how-to-compare-a-string-password-with-laravel-encrypted-password
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //SCCS - LAB10

    public function regUser(Request $request){
        $userData = $request->validate([
            "name" => ["required", "string", "max:200"],
            "email" => ["required", "string"],
            "password" => ["required", "string", "min:2"],
        ]);
        
        //encrypt password
        $userData["password"] = bcrypt($userData["password"]);
        $user = User::create($userData);
        return redirect("/");
    }

    public function login(Request $request) {
        //gets the name and password that you're trying to log in with
        $loginData = $request->validate([
            "name" => ["required", "string", "max:200"],
            "password" => ["required", "string", "min:2"],
        ]);

        //pulls from the database to get the name and password for the 
        // user that shares the same name
        $user = DB::select("select name, password from users where name = \"" . $loginData["name"] . "\"");

        //print_r($user[0]->password);

        if($user == NULL){
            //no data was found, since there is nothing in user
            return redirect("/page1?name=INVALID");
        }
        else{
            //this then checks the password the user typed to the decrypted password 
            // that was obtained from the database
            if(Hash::check($loginData["password"], $user[0]->password))
            {
                //if the passwords match, they are moved onto page 1
                echo "VALID PASSWORD";

                return redirect("/page1?name=".$user[0]->name);
            }
            else{
                //if its not a match, they're sent back
                echo "INVALID PASSWORD";
                return redirect("/page1?name=INVALID");
            }
        }
    }
}
?>