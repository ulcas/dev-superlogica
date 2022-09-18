<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\StoreUserFormRequest;
use App\Http\Requests\UpdateUserFormRequest;

class User extends Model
{
    protected $fillable = ['name',
        'user_name',
        'zip_code',
        'email',
        'password',
    ];

    public function storeUser(StoreUserFormRequest $request)
    {
        $this->create([
            'name' => $request->name,
            'user_name' => $request->userName,
            'zip_code' => $request->zipCode,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    }

    public function updateUser(UpdateUserFormRequest $request, $id)
    {
        $user = $this->find($id);

        $data = $request->only('name', 'email', 'zipCode', 'userName');
        
        $data['zip_code'] = $request->zipCode;
        $data['user_name'] = $request->userName;

        if ($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);
    }
}
