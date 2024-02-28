<?php

namespace App\Operations\User;

use App\Models\User;

class UserUpdate
{
    protected $user_id;

    public function __construct($userId) {
        $this->user_id = $userId;
    }

    public function update($params) {

        $search = User::where([
            ['email', $this->params['email']],
            ['name', $this->params['name']]
        ]);
        
        if($search->count() > 0) {
            return [
                'message' => 'nome ou e-mail já cadastrado para outro usuário',
                $search->first()
            ];
        }

        $user = User::where('id', $this->user_id)->first();
        
        if($user->count() > 0) {
            $user->update([
                'email' => $params['email'] ?? $user->email,
                'name' => $params['name'] ?? $user->name,
                'address_id' => $params['address_id'] ?? $user->address_id,
                'city_id' => $params['city_id'] ?? $user->city_id,
                'state_id' => $params['state_id'] ?? $user->state_id,
            ]);

            return [
                'message' => 'usuário atualizado com sucesso',
                $user->first()
            ];
        }

        
        return [
            'message' => 'usuário não encontrado',
        ];
    }
}