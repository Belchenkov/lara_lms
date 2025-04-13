<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Levels\CreateLevelRequest;
use App\Models\CourseLevel;
use App\Repositories\CourseLevelRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class CourseLevelController extends Controller
{
    public function __construct(
        private readonly CourseLevelRepository $r_course_level
    )
    {}

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $levels = $this->r_course_level->paginate(15);

        return view('admin.course.course-level.index', compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.course.course-level.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateLevelRequest $request): RedirectResponse
    {
        $validate = $request->validated();

        $this->r_course_level->create([
            'name' => $validate['name'],
            'slug' => \Str::slug($validate['name']),
        ]);

        notyf()->success('Created Successfully');

        return redirect()->route('admin.course-levels.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseLevel $course_level): View
    {
        return view('admin.course.course-level.edit', compact('course_level'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateLevelRequest $request, string $id): RedirectResponse
    {
        $validate = $request->validated();

        $this->r_course_level->updateById($id, [
            'name' => $validate['name'],
        ]);

        notyf()->success('Updated Successfully');

        return redirect()->route('admin.course-levels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseLevel $course_level): ?JsonResponse
    {
        try {
            $this->r_course_level->deleteById($course_level->id);

            notyf()->success('Deleted Successfully!');

            return response()->json([
                'message' => 'Deleted Successfully!',
            ]);
        } catch (\Exception $th) {
            notyf()->error($th->getMessage());

            return response()->json([
                'message' => 'Something went wrong!',
            ], 500);
        }
    }
}
