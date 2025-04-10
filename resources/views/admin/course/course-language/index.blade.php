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
                            <th>Slug</th>
                            <th>Action</th>
                            </thead>
                            <tbody class="w-100">
                                @forelse($languages as $language)
                                    <tr>
                                        <td>{{ $language->name }}</td>
                                        <td>{{ $language->slug }}</td>
                                        <td>
                                            <a href="{{ route('admin.course-languages.edit', $language->id) }}" class="btn-sm btn-primary">Edit</a>
                                            <a
                                                href="{{ route('admin.course-languages.destroy', $language->id) }}"
                                                class="btn-sm btn-danger delete-item"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modal-danger"
                                            >
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No Data Found!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

