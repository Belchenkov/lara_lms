<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ApproveStatus;
use App\Enums\Roles;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InstructorUpdateRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class InstructorRequestController extends Controller
{
    public function __construct(
        private readonly UserRepository $r_user,
    )
    {}

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $instructors_requests = $this->r_user->getByApprovedStatuses([
            ApproveStatus::PENDING->value,
            ApproveStatus::REJECTED->value
        ]);

        return view('admin.instructor-request.index', compact('instructors_requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InstructorUpdateRequest $request, User $instructor_request): RedirectResponse
    {
        $validate = $request->validated();
        $role = $validate['status'] === ApproveStatus::APPROVED->value
            ? Roles::INSTRUCTOR->value
            : Roles::STUDENT->value;

        $this->r_user->updateByUser([
            'approve_status' => $validate['status'],
            'role' => $role,
        ],
            $instructor_request->id
        );

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
