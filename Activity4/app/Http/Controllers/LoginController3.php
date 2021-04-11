<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Business\SecurityService;
use App\Models\UserModel;

class LoginController3 extends Controller
{
    public function index(Request $request) {
		$this->validateForm($request);
        $service = new SecurityService();
        $username = $request->input('username');
        $password = $request->input('password');

        $user = new UserModel($username, $password);
        $result = $service->login($user);
        if($result) {
            return view('loginPassed')->with('user', $user);
        }
        return view('loginFailed');
    }

		private function validateForm(Request $request)
    {
        //Validation Rules
        $rules = ['username' => 'Required | Between:4,10 | Alpha',
                'password' => 'Required | Between:4,10'];

        // Run Rule set
        $this->validate($request, $rules);
    }
}