<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentUpdateProfileRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function __construct(
        private readonly UserRepository $r_user
    )
    {}

    public function index(): View
    {
        return view('frontend.student-dashboard.profile.index');
    }

    public function update(StudentUpdateProfileRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $this->r_user->updateByUser([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'bio' => $validated['about'],
            'headline' => $validated['headline'],
            'gender' => $validated['gender'],
        ], auth()->id());

        return redirect()->back();
    }
}
