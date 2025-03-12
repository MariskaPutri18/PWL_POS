<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
       /*$data =[
        'username' => 'customer-1',
        'nama' => 'Pelanggan',
        'password' => Hash::make('12345'),
        'level_id' => 4
       ];
       UserModel::insert($data);

       $user = UserModel::all();
       return view('user', ['data'=> $user]);*/

        /*$data = [
            'nama' => 'Pelanggan Pertama'
        ];
        UserModel::where ('username', 'customer-1')->update($data);*/
     public function index()
     {
        $user = UserModel::create(
            [
                'username' => 'manager55',
                'nama' => 'Manager55',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
        );
        $user-> username = 'manager56';
        
        $user->isDirty(); //true
        $user->isDirty('username'); //true
        $user->isDirty('nama'); //fales
        $user->isDirty(['nama', 'username']); //true

        $user->isClean(); //fales
        $user->isClean('username'); //fales
        $user->isClean('nama'); //true
        $user->isClean(['nama', 'username']); //fales

        $user->save();

        $user->isDirty(); //fales
        $user->isClean();//true
        dd($user->isDirty());

    }
}
