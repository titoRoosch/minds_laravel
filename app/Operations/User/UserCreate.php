<?php

namespace App\Operations\User;

use App\Models\User;

class UserCreate
{

    protected $params;

    public function __construct($params) {
        $this->params = $params;
    }

    public function create() : array
    {

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

        try {
            $user = User::create([
                'email' => $this->params['email'],
                'name' => $this->params['name'],
                'password' => $this->params['password'],
                'address_id' => $this->params['address_id'] ?? null,
                'city_id' => $this->params['city_id'] ?? null,
                'state_id' => $this->params['state_id'] ?? null,
            ]);
    
            return [
                'message' => 'usuário cadastrado com sucesso',
                $user
            ];
        } catch(Exception $e) {
            return [
                'message' => 'erro ao cadastrar usuário',
                $e->getMessage()
            ];
        }
    }
}