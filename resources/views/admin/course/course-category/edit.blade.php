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
                        <div class="row">
                            <x-image-preview src="{{ $course_category->image }}" />
                            <div class="col md-6">
                                <x-input-file-block
                                    name="image"
                                />
                            </div>
                            <div class="col md-6">
                                <x-input-block
                                    name="icon"
                                    placeholder="Enter icon class name"
                                    :value="$course_category->icon"
                                >
                                    <x-slot name="hint">
                                        <small class="hint">You can get icon classes from: <a href="https://tabler.io/icons">https://tabler.io/icons</a></small>
                                    </x-slot>
                                </x-input-block>
                            </div>
                            <div class="col md-12">
                                <x-input-block
                                    name="name"
                                    placeholder="Enter name"
                                    :value="$course_category->name"
                                />
                            </div>
                            <div class="col md-3">
                                <x-input-toggle-block
                                    name="show_at_trading"
                                    label="Show at trading"
                                    :checked="$course_category->show_at_trading"
                                />
                            </div>
                            <div class="col md-3">
                                <x-input-toggle-block
                                    name="status"
                                    label="Status"
                                    :checked="$course_category->status"
                                />
                            </div>
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

