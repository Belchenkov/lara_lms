@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Course Levels</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.course-levels.create') }}" class="btn btn-primary">
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
                                @forelse($levels as $level)
                                    <tr>
                                        <td>{{ $level->name }}</td>
                                        <td>{{ $level->slug }}</td>
                                        <td>
                                            <a href="{{ route('admin.course-levels.edit', $level->id) }}" class="btn-sm btn-primary">Edit</a>
                                            <a
                                                href="{{ route('admin.course-levels.destroy', $level->id) }}"
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
                        <div class="mt-4">
                            {{ $levels->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

