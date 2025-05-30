@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Category</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.course-categories.index') }}" class="btn btn-primary">
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form
                        action="{{ route('admin.course-categories.store') }}"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="row">
                            <div class="col md-6">
                                <x-input-file-block
                                    name="image"
                                />
                            </div>
                            <div class="col md-6">
                                <x-input-block
                                    name="icon"
                                    placeholder="Enter icon class name"
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
                                />
                            </div>
                            <div class="col md-3">
                                <x-input-toggle-block
                                    name="show_at_trading"
                                    label="Show at trading"
                                />
                            </div>
                            <div class="col md-3">
                                <x-input-toggle-block
                                    name="status"
                                    label="Status"
                                />
                            </div>
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

