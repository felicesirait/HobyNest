<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function SignUp (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors()
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['token'] = $user->createToken('auth_token')->plainTextToken;
        $success['name'] = $user->name;

        return response()->json([
            'success' => true,
            'message' => 'Success Sign Up',
            'data' => $success
        ]);

    }
    
    public function getAllUsers()
    {
        $users = User::all();

        return response()->json([
            'success' => true,
            'message' => 'Users retrieved successfully',
            'data' => $users
        ]);
    }

    // public function SignIn(Request $request)
    // {
    //     if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    //         $auth = Auth::user();
    //         $success['token'] = $auth->createToken('auth_token')->plainTextToken;
    //         $success['name'] = $auth->name;

    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Sign In Sukses',
    //             'data' => $success
    //         ]);
    //     } else {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Gagal Sign In',
    //             'data' => ''
    //         ]);
    //     }
    // }
}