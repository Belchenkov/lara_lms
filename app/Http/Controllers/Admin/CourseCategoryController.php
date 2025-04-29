<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Courses\CourseCategorySaveRequest;
use App\Http\Requests\Courses\CourseCategoryUpdateRequest;
use App\Models\CourseCategory;
use App\Repositories\CourseCategoryRepository;
use App\Traits\FileUpload;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseCategoryController extends Controller
{
    use FileUpload;

    public function __construct(
        private readonly CourseCategoryRepository $r_course_category
    )
    {}

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $categories = $this->r_course_category->paginate(15);

        return view('admin.course.course-category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.course.course-category.create');
    }

    /**
     * Store a newly created resource in storage.
     * @throws \Exception
     */
    public function store(CourseCategorySaveRequest $request): RedirectResponse
    {
        $validate = $request->validated();

        $image_path = $this->uploadFile($request->file('image'));

        $this->r_course_category->create([
            'name' => $validate['name'],
            'icon' => $validate['icon'],
            'slug' => \Str::slug($validate['name']),
            'show_at_trading' => $validate['show_at_trading'] ?? 0,
            'status' => $validate['status'] ?? 0,
            'image' => $image_path,
        ]);

        notyf()->success('Created Successfully');

        return to_route('admin.course-categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseCategory $course_category): View
    {
        return view('admin.course.course-category.edit', compact('course_category'));
    }

    /**
     * Update the specified resource in storage.
     * @throws \Exception
     */
    public function update(CourseCategoryUpdateRequest $request, CourseCategory $course_category): RedirectResponse
    {
        $validate = $request->validated();

        $data = [
            'name' => $validate['name'],
            'icon' => $validate['icon'],
            'slug' => \Str::slug($validate['name']),
            'show_at_trading' => $validate['show_at_trading'] ?? 0,
            'status' => $validate['status'] ?? 0,
        ];

        if ($request->hasFile('image')) {
            $image_path = $this->uploadFile($request->file('image'));
            $data['image'] = $image_path;

            $this->deleteFile($course_category->image);
        }

        $this->r_course_category->updateById($course_category->id, $data);

        notyf()->success('Updated Successfully');

        return to_route('admin.course-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
