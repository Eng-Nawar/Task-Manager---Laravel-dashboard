<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class AuthController1 extends Controller
{
    //
    public function getToken(Request $request)
    {
        $user = User::where(['status'=>'active', 'email'=>$request->email])->first();
        if ($user != null) {
            if (Hash::check($request->password, $user->password)) {
                //team member
                if ($user->role_id == '3') {
                    return response()->json([
                        'status' => true,
                        'token' => $user->remember_token,
                        'id' => $user->id,
                        'name' => $user->first_name,
                        'email' => $user->email,
                        'role' => 'staff'
                    ],status:200);
                } 
              /*  else if($user->hasRole(['driver'])){
                    return response()->json([
                        'status' => true,
                        'token' => $user->api_token,
                        'id' => $user->id,
                        'name' => $user->name,
                        'email' => $user->email,
                        'role' => 'driver'
                    ],status:200);
                }*/
                else {
                    return response()->json([
                        'status' => false,
                        'errMsg' => 'User is not authorized !',
                    ]);
                }
            } else {
                return response()->json([
                    'status' => false,
                    'errMsg' => 'Incorrect password!',
                ],status:203);
            }
        } else {
            return response()->json([
                'status' => false,
                'errMsg' => 'User not found. Incorrect email!',
            ],status:203);
        }
    }

    /*public function register(Request $request)
    {
        
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'unique:users', 'max:255'],
                'phone' => ['required', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
                'password' => ['required', 'string', 'min:8'],
            ]);

            if (!$validator->fails()) {
                $client = new User;

                $client->name = $request->name;
                $client->email = $request->email;
                $client->phone = $request->phone;
                $client->password = Hash::make($request->password);
                $client->api_token = Str::random(80);
                $client->save();

                //Assign role
                $client->assignRole('client');

                return response()->json([
                    'status' => true,
                    'token' => $client->api_token,
                    'id' => $client->id,
                    'role' => 'client'
                ],status:201);
            } else {
                return response()->json([
                    'status' => false,
                    'errMsg' => $validator->errors(),
                ],status:203);
            }
        
    }
*/
    
    public function getUseData()
    {
        $user = User::where(['remember_token' => $_GET['api_token']])->first();

        if ($user) {
            return response()->json([
                'status' => true,
                'data' => [
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => 'staff'
                ],
                'msg' => 'User found!',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errMsg' => 'User not found!',
            ]);
        }
    }
}
