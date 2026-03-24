<?php

namespace App\Http\Controllers;

use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index(Request $request){

        $serach = $request->search??"";
        $id = $request->id??"";
        $data = array();

        $userList = User::select("*");

        if (!empty($id)) {
            $userList = $userList->where("id",$id);
        }

        $userList = $userList->orderBy("created_at","desc")->get();
        $data["userList"] = $userList;

        return view('user.users',$data);
    }

    public function SaveUser(Request $request){
        Log::info($request->all());
        $response = [
            "message"=>"Failed to save user."
        ];
        $isSuccess = false;

        try {
            $id = $request->id??"";
            $name = $request->name??"";
            $email = $request->email??"";
            $print = $request->print??"";
            $password = $request->password??"";
            $confPassword = $request->confPassword??"";
            $gpReport = $request->gpReport??"";

            if (!empty($name) && !empty($email)) {
                if (empty($id)) {
                    $userData = User::where("email",$email)->first();
                    if (empty($userData)) {
                        if ($password == $confPassword) {
                            $saveUser = User::create(
                                [
                                    "name" => $name,
                                    "email" => $email,
                                    "password" => Hash::make($password),
                                    "print" => $print=="1"?"1":"0",
                                    "gp_report" => $gpReport=="1"?"1":"0"
                                ]
                            );

                            if (isset($saveUser->id)) {
                                $isSuccess = true;
                                $response = [
                                    "message"=>"User saved successfully."
                                ];
                            }
                        }else{
                            $response = [
                                "message"=>"Password didn't matched."
                            ];
                        } 
                    }else{
                        $response = [
                            "message"=>"Email already exist."
                        ];
                    }
                }else{
                    $userData = User::where("id",$id)->first();
                    $currentEmail = $userData->email;
                    
                    $validateEmailExist = User::where("email",$email)->where("id","<>",$id)->first();

                    if ($currentEmail == $email || empty($validateEmailExist)) {
                        $saveUser = User::updateOrCreate(
                            ["id"=>$id],
                            [
                                "name" => $name,
                                "email" => $email,
                                // "password" => Hash::make($password),
                                "print" => $print=="1"?"1":"0",
                                "gp_report" => $gpReport=="1"?"1":"0"
                            ]
                        );
                        if (isset($saveUser->id)) {
                           $response = [
                                "message"=>"User saved successfully."
                            ];
                            $isSuccess = true;
                        }
                    }else{
                        $response = [
                            "message"=>"Email already exist."
                        ];
                    }
                }
                
            }
            
        } catch (Exception $th) {
            Log::error("ERROR IN SAVING USER: {$th->getMessage()}");
        }

        if ($isSuccess) {
            return response()->json($response,200);
        }else{
            return response()->json($response,400);
        }
    } 

    public function GetUserDetails(Request $request){
        $response = [
            "message"=>"Failed to retrieved information",
            "data"=>null
        ];
        $isSuccess = false;

        try {
            $id = $request->id??"";
            if (!empty($id)) {
                $userData = User::where("id",$id)->first();
                if (!empty($userData)) {
                    $isSuccess = true;
                    $response = [
                        "message"=>"Successfully retrieved user details",
                        "data"=>$userData
                    ];
                }    
            }
            
        } catch (\Throwable $th) {
            Log::error("ERROR IN GFETTING USER INFO: {$th->getMessage}");
        }

        if ($isSuccess) {
            return response()->json($response,200);
        }else{
            return response()->json($response,400);
        }
    } 

    public function DeleteUser(Request $request){
        $response = ["message" => "Failed to delete user."];
        $isSuccess = false;

        try {
            $id = $request->id??"";
            $deleteUser = User::find($id)->delete();
            $isSuccess = true;
            $response = ["message" => "User deleted successfully."];
        } catch (\Throwable $th) {
            Log::error("ERROR IN DELETING USER: {$th->getMessage()}");
        }

        if ($isSuccess) {
            return response()->json($response,200);
        }else{
            return response()->json($response,400);
        }
    }
}
