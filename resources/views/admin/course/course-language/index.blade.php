@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Course Languages</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.course-languages.create') }}" class="btn btn-primary">
                            Add New
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-primary">
                        <table class="table table-vcenter card-title">
                            <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Role</th>
                            <th>Document</th>
                            <th>Action</th>
                            </thead>
                            <tbody class="w-100">
                                Empty
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

