@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Category</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.course-categories.index') }}" class="btn btn-primary">
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form
                        action="{{ route('admin.course-categories.update', $course_category->id) }}"
                        method="POST"
                    >
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                id="name"
                                placeholder="Enter language name"
                                value="{{ $course_category->name }}"
                            >
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

