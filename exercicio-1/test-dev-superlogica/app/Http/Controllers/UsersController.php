<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserFormRequest;
use App\Models\User;
use App\Http\Requests\UpdateUserFormRequest;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::get();

        return view('users.index', ['users' => $users]);
    }

    public function registration()
    {
        return view('users.registration');
    }

    public function store(StoreUserFormRequest $request)
    {
        User::create([
            'name' => $request->name,
            'user_name' => $request->userName,
            'zip_code' => $request->zipCode,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return view('users.return', ['message' => 'registrado']);
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('users_list');
        }

        return view('users.show', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('users_list');
        }
        
        return view('users.edit', ['user' => $user]);
    }

    public function update(UpdateUserFormRequest $request, $id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('users_list');
        }

        $data = $request->only('name', 'email', 'zipCode');
        
        $data['zip_code'] = $request->zipCode;

        if ($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);

        return view('users.return', ['message' => 'atualizado']);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        return view('users.delete', ['user' => $user]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return view('users.return', ['message' => 'Excluido']);
    }
}
