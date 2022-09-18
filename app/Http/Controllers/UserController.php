<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $users = User::all();
        return view('user.index', compact('users'));
    }
    public function edit($id){
        $users = User::find($id);
        return view('user.edit', compact('users'));
    }
    public function update(Request $Request, $id){
        $users = User::find($id);
        $Request->validate([
            'name'=>['required', 'string', 'max:200'],
            'last_name'=>['required', 'string', 'max:200'],
            'email'=>['required', 'string', 'email', 'max:200'],
            'direction'=>['string', 'max:200'],
            'user_id'=>['required', 'string', 'max:100'],
        ]);
        /**
         *
         *
         * En proceso para validar
         *         if (!$Request->password) {
         *             $Request->validate([
         *                 'password'=>['confirmed', Rules\Password::defaults()],
         *             ]);
         *             $users->password = bcrypt($Request->password);
         *         }
         */

        $users->name = $Request->name;
        $users->last_name = $Request->last_name;
        $users->email = $Request->email;
        $users->direction = $Request->direction;
        $users->user_id = $Request->user_id;
        $users->telf = $Request->telf;
        $users->save();
        return view('user.edit', compact('users'));
    }
    public function create(){
        return view('user.create');
    }
    public function store(Request $Request){

        $Request->validate([
            'name'=>['required', 'string', 'max:200'],
            'last_name'=>['required', 'string', 'max:200'],
            'email'=>['required', 'string', 'email', 'max:200'],
            'password'=>['required', 'confirmed', Rules\Password::defaults()],
            'direction'=>['string', 'max:200'],
            'user_id'=>['required', 'string', 'max:100'],
            'telf'=>['required', 'string', 'max:50'],
        ]);
        $User = User::create([
            'name' => $Request->name,
            'user_id' => $Request->user_id,
            'telf' => $Request->telf,
            'direction' => $Request->direction,
            'last_name' => $Request->last_name,
            'email' => $Request->email,
            'password' => bcrypt($Request->password),
        ]);


        return to_route('user.index')->with('status', 'Cuenta creada!');
    }
}
