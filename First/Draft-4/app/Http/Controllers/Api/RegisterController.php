<?php

use App\Http\Controllers\Api;

use Illuminate\Support\Facades\Validator;
use App\Models\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = Register::create([
            'username' => $request->username,
            'password' => $request->password,
        ]);

        return response()->json(['message' => 'User Created successfully!'], 201);
    }
}
