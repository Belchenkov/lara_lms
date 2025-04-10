<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Courses\CreateCourseRequest;
use App\Models\CourseLanguage;
use App\Repositories\CourseLanguageRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CourseLanguageController extends Controller
{
    public function __construct(
        private readonly CourseLanguageRepository $r_course_language
    )
    {}

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $languages = $this->r_course_language->paginate(15);

        return view('admin.course.course-language.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.course.course-language.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCourseRequest $request): RedirectResponse
    {
        $validate = $request->validated();

        $this->r_course_language->create([
            'name' => $validate['name'],
            'slug' => \Str::slug($validate['name']),
        ]);

        notyf()->success('Created Successfully');

        return redirect()->route('admin.course-languages.index');
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
    public function edit(CourseLanguage $course_language): View
    {
        return view('admin.course.course-language.edit', compact('course_language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateCourseRequest $request, string $id)
    {
        $validate = $request->validated();

        $this->r_course_language->updateById($id, [
            'name' => $validate['name'],
        ]);

        notyf()->success('Updated Successfully');

        return redirect()->route('admin.course-languages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseLanguage $course_language)
    {
        try {
            $this->r_course_language->deleteById($course_language->id);

            notyf()->success('Deleted Successfully! ');

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
