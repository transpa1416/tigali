<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2|max:50|alpha',
            'email' => 'required|min:2|max:50|email',
            'password' => 'required|min:2|max:50',
        ], Controller::$messages)->validate();

        $input = $request->all();
        $input['password'] = Hash::make($request->password);

        User::create($input);

        return response()->json([
            'transaction' => "ok",
            'message' => 'Usuario creado correctamente'
        ], 200);

    }

    function changePassword(Request $request) {
        $data = $request->all();
        $user = auth()->user();

        //Changing the password only if is different of null
        if( isset($data['oldPassword']) && !empty($data['oldPassword']) && $data['oldPassword'] !== "" && $data['oldPassword'] !=='undefined') {
            //checking the old password first
            $check  = Auth::guard('web')->attempt([
                'username' => $user->username,
                'password' => $data['oldPassword']
            ]);
            if($check && isset($data['newPassword']) && !empty($data['newPassword']) && $data['newPassword'] !== "" && $data['newPassword'] !=='undefined') {
                $user->password = bcrypt($data['newPassword']);
                $user->isFirstTime = false; //variable created by me to know if is the dummy password or generated by user.
                $user->token()->revoke();
                $token = $user->createToken('newToken')->accessToken;

                //Changing the type
                $user->save();

                return json_encode(array('token' => $token)); //sending the new token
            }
            else {
                return "Wrong password information";
            }
        }
        return "Wrong password information";
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:2',
        ]);

        if ($validator->fails()) {
            return response(['errors'=>$validator->errors()->all()], 422);
        }

        $user = User::whereEmail($request->email)->first();

        if (is_null($user)){
            return response()->json([
                "transaction"=>"bad",
                "message"=>"Correo no valido "
            ], 200);
        }

        if (Hash::check($request->password, $user->password)) {

            $roles = array_map(
                function($x) {
                    return $x['name'];
                },
                $user->roles->toArray());

            $token = $user->createToken('crm_inmob_aguilar', $roles)->accessToken;

            return response()->json([
                "transaction"=>"ok",
                "token"=>$token,
                "message"=>"login"
            ], 200);
        } else {
            return response()->json([
                "transaction"=>"bad",
                "message"=>"cuenta o password incorrecto"
            ], 200);
        }

    }

    public function logout() {
        $user = auth()->user();
        $user->tokens->each(function ($token, $key){
            $token->delete();
        });

        $user->save();

        return response()->json([
            "transaction"=>"ok",
            "message"=>"sesi??n cerrado en todos los dispositivos"
        ], 200);
    }

    public function getUserLogIn () {
        $user = auth()->user();

        $modules = Module::where('MOD_NOMBRE', '=', 'CRM')
            ->with('childrenModules')
            ->get();

        return response()->json([
            "transaction"=>"ok",
            "user"=>$user,
            "modules" => $modules,
            "message"=>"datos obtenidos de manera correcta"
        ], 200);
    }
}
