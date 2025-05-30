<?php

namespace App\Http\Controllers\Auth;

use App\Enums\ApproveStatus;
use App\Enums\Roles;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Traits\FileUpload;

class RegisteredUserController extends Controller
{
    use FileUpload;

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): string
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user_role =  Roles::STUDENT->value;
        $approve_status = ApproveStatus::APPROVED->value;
        $file_path = null;

        if ($request->type === Roles::INSTRUCTOR->value) {
            $user_role = Roles::INSTRUCTOR->value;
            $approve_status = ApproveStatus::PENDING->value;

            $request->validate(['document' => ['required', 'max:12000']]);
            $file_path = $this->uploadFile($request->file('document'));
        }

        if (!in_array($request->type,[Roles::INSTRUCTOR->value, Roles::STUDENT->value], true)) {
            abort(403);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $user_role,
            'approve_status' => $approve_status,
            'document' => $file_path,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return $request->user()->role === Roles::INSTRUCTOR->value
            ? redirect()->intended(route('instructor.dashboard', absolute: false))
            : redirect()->intended(route('student.dashboard', absolute: false));
    }
}
