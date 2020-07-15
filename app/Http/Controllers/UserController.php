<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use DataTables;

class UserController extends Controller
{
  
    public function index()
    {
        $users = Users::latest()->paginate(5);
  
        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

   
    public function create()
    {
        return view('users.add');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
        ]);
  
        Users::create($request->all());
   
        return redirect()->route('users.index')
                        ->with('success','User added successfully.');
    }

   
    public function show(Users $user)
    {
        return view('users.show', compact('user'));
    }

  
    public function edit(Users $user)
    {
        return view('users.update',compact('user'));
    }

   
    public function update(Request $request, Users $users)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
        ]);
  
        $users->update($request->all());
  
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

   
    public function destroy(Users $user)
    {
        $user->delete();
  
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}
