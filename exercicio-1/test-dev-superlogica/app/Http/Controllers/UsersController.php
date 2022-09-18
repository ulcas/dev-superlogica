<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserFormRequest;
use App\Models\User;
use App\Http\Requests\UpdateUserFormRequest;

class UsersController extends Controller
{
    protected $userModel;

    public function __construct(User $user) {
        $this->userModel = $user;
    }

    public function index()
    {
        $users = $this->userModel->get();

        return view('users.index', ['users' => $users]);
    }

    public function registration()
    {
        return view('users.registration');
    }

    public function store(StoreUserFormRequest $request)
    {
        $this->userModel->storeUser($request);

        return view('users.return', ['message' => 'registrado']);
    }

    public function show($id)
    {
        if (!$user = $this->userModel->find($id))
            return redirect()->route('users_list');

        return view('users.show', ['user' => $user]);
    }

    public function edit($id)
    {
        if (!$user = $this->userModel->find($id))
            return redirect()->route('users_list');
        
        return view('users.edit', ['user' => $user]);
    }

    public function update(UpdateUserFormRequest $request, $id)
    {
        if (!$this->userModel->find($id))
            return redirect()->route('users_list');

        $this->userModel->updateUser($request, $id);

        return view('users.return', ['message' => 'atualizado']);
    }

    public function delete($id)
    {
        if (!$user = $this->userModel->find($id))
            return redirect()->route('users_list');

        return view('users.delete', ['user' => $user]);
    }

    public function destroy($id)
    {
        if (!$user = $this->userModel->find($id))
            return redirect()->route('users_list');
        
        $user->delete();
        return view('users.return', ['message' => 'Excluido']);
    }
}
