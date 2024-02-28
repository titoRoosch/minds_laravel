<?php

namespace App\Operations\User;

use App\Models\User;

class UserDelete
{

    public function __construct() {

    }

    public function delete(int $userId) {

        $user = User::where('id', $userId);
        
        if($user->count() > 0) {
            $user->delete();
            return [
                'message' => 'usuário deletado com sucesso',
            ];
        }

        return [
            'message' => 'usuário não encontrado',
        ];
    }
}