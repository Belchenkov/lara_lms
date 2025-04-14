@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Level</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.course-levels.index') }}" class="btn btn-primary">
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.course-levels.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                id="name"
                                placeholder="Enter level name"
                            >
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

