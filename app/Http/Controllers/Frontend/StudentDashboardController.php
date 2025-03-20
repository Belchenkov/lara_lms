<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\ApproveStatus;
use App\Enums\Roles;
use App\Http\Controllers\Controller;
use App\Http\Requests\Instructor\InstructorBecomeUpdateRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Traits\FileUpload;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StudentDashboardController extends Controller
{
    use FileUpload;

    public function __construct(
        private readonly UserRepository $r_user,
    )
    {}

    public function index(): View
    {
        return view('frontend.student-dashboard.index');
    }

    public function becomeInstructor(): View
    {
        if (auth()->user()->role === Roles::INSTRUCTOR->value) {
            abort(403);
        }

        return view('frontend.student-dashboard.become-instructor.index');
    }

    public function becomeInstructorUpdate(InstructorBecomeUpdateRequest $request, User $user): RedirectResponse
    {
        $validate = $request->validated();

        $file_path = $this->uploadFile($validate['document']);

        $this->r_user->updateByUser([
            'approve_status' => ApproveStatus::PENDING->value,
            'document' => $file_path,
        ],
            $user->id
        );

        return redirect()->route('student.become-instructor');
    }
}
