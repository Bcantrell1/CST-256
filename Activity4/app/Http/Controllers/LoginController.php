<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Business\SecurityService;
use App\Models\UserModel;
use Illuminate\Support\Facades\Log;
use App\Services\Utility\MyLogger1;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        //$logger = new MyLogger1();
        try {
            //Log location to reference 
            //$logger->info("Entering LoginController::index()");
        	Log::info("Entering LoginController::index()");
            $service = new SecurityService();
            $username = $request->input('username');
            $password = $request->input('password');
            //Logging the user and pass info to be used to log in 
            //$logger->info("Parameters are: ", 
            //    array("username" => $username, "password" => $password));
            Log::info("Parameters are: ",array("username" => $username, "password" => $password));
            $user = new UserModel($username, $password);
            $result = $service->login($user);
            if ($result) {
                //Logging Successful login
                //$logger->info("Exit LoginController::index() with login passing");
                Log::info("Exit LoginController::index() with login passing");
                // Successfully logged in view
                return view('loginPassed2')->with('user', $user);
            }

            //Logging failed login
            //$logger->info("Exit LoginController::index() with login failing");
            Log::info("Exit LoginController::index() with login failing");
            return view('loginFailed');
        } catch (Exception $e) {

            //Error with logging in
            //$logger->error("Exception LoginController::index()" . $e->getMessage());
            Log::error("Exception LoginController::index()" . $e->getMessage());
        }
    }
}
