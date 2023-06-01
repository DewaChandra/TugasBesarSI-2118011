<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'users'=>User::get(),
        ]);
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        session()->flash('success', 'Data Berhasil Ditambahkan');
        return redirect()->route('user.index');
    }

    public function edit($id){
        $user = User::find($id);
        return view('user.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);
        
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        session()->flash('info', 'Data Berhasil Diperbarui');
        return redirect()->route('user.index');
    }

    public function destroy($id){
        $training = User::find($id);
        $training->delete();
        session()->flash('danger', 'Data Berhasil Dihapus');
        return redirect()->route('user.index');
    }
}
