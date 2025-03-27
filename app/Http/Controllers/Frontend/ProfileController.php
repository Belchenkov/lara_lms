<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentUpdatePasswordRequest;
use App\Http\Requests\Student\StudentUpdateProfileRequest;
use App\Http\Requests\Student\StudentUpdateSocialRequest;
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

    /**
     * @return View
     */
    public function index(): View
    {
        return view('frontend.student-dashboard.profile.index');
    }

    /**
     * @param StudentUpdateProfileRequest $request
     * @return RedirectResponse
     */
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

    /**
     * @param StudentUpdatePasswordRequest $request
     * @return RedirectResponse
     */
    public function updatePassword(StudentUpdatePasswordRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $this->r_user->updateByUser(['password' => bcrypt($validated['password'])], auth()->id());

        return redirect()->back();
    }

    /**
     * @param StudentUpdateSocialRequest $request
     * @return RedirectResponse
     */
    public function updateSocial(StudentUpdateSocialRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $this->r_user->updateByUser([
            'facebook' => $validated['facebook'],
            'x' => $validated['x'],
            'linkedin' => $validated['linkedin'],
            'website' => $validated['website'],
        ], auth()->id());

        return redirect()->back();
    }
}
