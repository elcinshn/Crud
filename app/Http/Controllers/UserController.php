<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class UserController extends Controller {
   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
     $users=User::all();
      return view('users.index',compact('users'));
   }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
        return view('users.create');
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store()
   {
     $user=Request::all();
     User::create($user);
     return redirect('users');
   }
   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($ID)
   {
      $users=User::find($ID);
      return view('users.show',compact('users'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($ID)
   {
     $user=User::find($ID);
     return view('users.edit',compact('user'));
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update(User $ID)
   {
     $userUpdate=Request::all();
     $user=User::find($ID);
     $user->update($userUpdate);
     return redirect('users');
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy(User $ID)
   {
     User::find($ID)->delete();
     return redirect('users');
   }
}
