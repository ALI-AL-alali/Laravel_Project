<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class AuthController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests ;
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:15',
        ]);
        $Passval = Validator::make($request->all(), [
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([$validator->errors(),
            'message'=>'البريد الالكتوني موجود مسبقا'
            ], 422);
        }
        if ($Passval->fails()) {
            return response()->json([$Passval->errors(),
            'message'=>'تاكد من كلمة السر انها لا تقل عن 8 احرف '
            ], 422);
        }

        $user = User::create([
          'UserId',
            'Name' => $request->name,
            'Email' => $request->email,
            'Password' => Hash::make($request->password),
            'PhoneNumber' => $request->phone_number,
        ]);
       // $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['message' => 'تمت عملية انشاء الحساب بنجاح اهلا بكم في تطبيقنا',

        'user' => $user,
        'token' => $user->createToken('auth_token')->plainTextToken

        ],201);
    }

    public function login(Request $request)
    {
        try
        {
                $request->validate([
                    'email' => 'required|email',
                    'password' => 'required',
                ]);

                $user = User::where('Email', $request->email)->first();

                if (!$user || !Hash::check($request->password, $user->Password)) {
                    throw ValidationException::withMessages([
                        'email' => ['تاكد  من صحة الايميل و كلمة السر'],
                    ]);
                }
                 // $token = $user->createToken('auth_token')->plainTextToken;
                 //  $user->tokens()->delete();

                return response()->json([
                    'user' => $user,
                 'token' => $user->createToken('auth_token')->plainTextToken


                ],200);
            }
            catch (ValidationException $e) {
                return response()->json([
                    'message' => 'Validation error',
                    'errors' => $e->errors(),
                ], 401);
            }
    }
}

