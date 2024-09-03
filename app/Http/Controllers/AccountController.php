<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('accounts.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|unique:account,username',
            'password' => 'required',
            'name' => 'required',
            'role' => 'required|in:admin,author',
        ]);

        // Buat akun baru
        $account = new Account();
        $account->username = $request->input('username');
        $account->password = bcrypt($request->input('password')); // Enkripsi password
        $account->name = $request->input('name');
        $account->role = $request->input('role');
        $account->save();

        return redirect()->route('accounts.index')->with('success', 'Account created successfully.');
    }

    public function edit($username)
    {
        $account = Account::findOrFail($username);
        return view('accounts.edit', compact('account'));
    }

    public function update(Request $request, $username)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'role' => 'required|string|max:45',
        ]);

        $account = Account::findOrFail($username);
        $account->update([
            'name' => $request->name,
            'role' => $request->role,
        ]);

        return redirect()->route('accounts.index');
    }

    public function destroy($username)
    {
        Account::findOrFail($username)->delete();
        return redirect()->route('accounts.index');
    }
}

