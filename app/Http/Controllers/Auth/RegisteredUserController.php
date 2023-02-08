<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // $role = DB::table('roles')->get();
        $user = User::create([
            'name' => 'Eyob',

            'email' => 'eyob@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);

        $user->assignRole('president');

        return view('auth.register');
    }
    public function index()
    {
        $role = Role::where('name', 'president');
        $roles = Role::get()->pluck('name', 'name');

        $users = User::paginate(8);
        return view('users.index', compact('users'));
    }
    public function crt()
    {

        // $user = User::all();
        // $user->assignRole('hr');
        return view('users.create', compact('user'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    // public function edit($id)
    // {
    //     $user = User::find($id);

    //     $user->assignRole('president');
    //     return view('users.edit', compact('user'));
    // }
    public function destroy($id)
    {
        $user = User::find($id);


        $user->delete();
        return redirect('user')->with('status', '  deleted successfully');
    }
}
