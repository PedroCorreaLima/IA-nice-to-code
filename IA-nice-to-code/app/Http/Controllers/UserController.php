<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $users = User::all();
            return response()->json($users, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data = ($request->validated());

        try {
            $user = new User();
            $user->fill($data);
            $user->password = Hash::make(123);
            $user->save();

            return response()->json('Usuário criado com sucesso: '. $user, 201);

        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Falha ao inserir usuário: '
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $user = User::findOrFail($id);
            return response()->json($user, 200);

        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Falha ao buscar usuário: ' . $id
            ], 404);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        $data = ($request->validated());
        dd($data);

        try {
            $user = User::findOrFail($id);
            $user->update($data);

            return response()->json('Usuário atualizado com sucesso: '. $user, 200);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Falha ao inserir usuário: '
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
