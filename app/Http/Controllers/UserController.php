<?php

namespace App\Http\Controllers;

use App\Operations\User\UserCreate;
use App\Operations\User\UserDelete;
use App\Operations\User\UserUpdate;
use App\Operations\User\UserSearcher;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getUsers() {

        $operation = new UserSearcher();
        $users = $operation->search();

        return response($users, 200)
            ->header('Content-Type', 'text/json');
    }

    public function getUserById(Request $req) {
        
        $operation = new UserSearcher();

        $user = $operation->search($req->user_id);

        return response($user, 200)
            ->header('Content-Type', 'text/json');
    }

    public function createUser(Request $req) {
        $params = $req->all();
        $operation = new UserCreate($params);
        $users = $operation->create();

        return response( json_encode($users), 200)
            ->header('Content-Type', 'text/json');
    }

    public function updateUser(Request $req) {
        $params = $req->all();
        $operation = new UserUpdate($req->user_id);
        $users = $operation->update($params);

        return response( json_encode($users), 200)
            ->header('Content-Type', 'text/json');
    }

    public function deleteUser(Request $req) {
        $params = $req->all();
        $operation = new UserDelete();
        $users = $operation->delete($req->user_id);

        return response( json_encode($users), 200)
            ->header('Content-Type', 'text/json');
    }
}
