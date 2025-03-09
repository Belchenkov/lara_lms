<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ApproveStatus;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Contracts\View\View;
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
        $instructors_requests = $this->r_user->getByApprovedStatus(ApproveStatus::PENDING->value);

        dd($instructors_requests);
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
