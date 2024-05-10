<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //create json column

    public function create(){
        User::create([
            'Info'=>[
                'Name'=>'Litu',
                'Email'=>'litu@gmail.com',
                'Mobile'=>'022455',
                'personal'=>[
                    'Gender'=>'Male',
                    'Dept'=>'Bangla'
                ]
            ],
        ]);
    }



    //read json data column

    public function index(){
        // $users=User::get();                      //get all data
        // $users=User::find(4);                    //get single data

        $users=User::find(4);       
        // return $users->Info['Name'];
        return $users->Info['personal']['Dept'];      //nested data
    }




    //read json data Asscending Order

    public function findOrderBy(){
        $users=User::orderBy('Info->Name')->get();     

        return $users;
    }


    //update json data

    public function update(){
        $users = User::find(3);
        $users->update([
            // 'Info->personal->Gender'=>'male',
            'Info->City'=>'Thakurgaon'
        ]);
    }

    //Delete Json data

    public function delete(){
        $users=User::find(3);
        $users->Info = collect($users->Info)->forget('City');
        $users->save();

    }

}
