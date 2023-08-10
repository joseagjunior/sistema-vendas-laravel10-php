<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public readonly User $user;
    public function __construct()
    {
        $this->user = new User();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seach = request('search');

        if($seach) {

            $user = User::where([
                ['name', 'like', '%'.$seach.'%']
            ])->get();

        } else {
            $user = $this->user->all();
        }
        return view('users', ['users' => $user, 'search' => $seach]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->user->create([
            'name' => $request-> input('name'),
            'email' => $request-> input('email'),
            'password' => password_hash($request-> input('password'), PASSWORD_DEFAULT),
        ]);
        if ($created) {
            return redirect()->back()->with('message', 'Successfully created');
        } else {
            return redirect()->back()->with('message', 'Erro');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user_show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user_edit', ['users' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->user->where('id', $id)->update([
            'name' => $request-> input('name'),
            'email' => $request-> input('email'),
            'password' => password_hash($request-> input('password'), PASSWORD_DEFAULT),
        ]);
        if ($updated) {
            return redirect()->back()->with('message', 'Successfully updated');
        } else {
            return redirect()->back()->with('message', 'Erro');
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
