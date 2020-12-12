<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function show() {
    	return Inertia::render('Users/Create');
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

    	$user = User::create(request(['name', 'email', 'password']));

    	return redirect('welcome')->with('success',  "{$user->name} was created.");
    }

    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8',],
        ]);
    }
}
