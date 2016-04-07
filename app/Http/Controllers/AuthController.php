<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Input;
use App\User;
use Response;

class AuthController extends Controller
{
    public function __construct(User $user){        
    	$this->user = $user;
    }
    
    public function postLogin()
    {
        $input = Input::all();
        $user = $input['user'];
        $password = $input['password'];

        if (Auth::attempt(['user' => $user, 'password' => $password])) {
            
            $userLogado = $this->user->getUser($user);

            return Response::json($userLogado,200);
            
        }
        return Response::json(['response'=>"Registro não encontrado!"], 400);
    }
}