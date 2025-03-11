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
        $jumlahUser = UserModel::where('level_id', 2)->count();
        return view('user', ['jumlahUser' => $jumlahUser]);
    }
}
