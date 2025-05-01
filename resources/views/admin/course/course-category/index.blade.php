@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Course Categories</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.course-categories.create') }}" class="btn btn-primary">
                            Add New
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-primary">
                        <table class="table table-vcenter card-title">
                            <thead>
                            <th>Icon</th>
                            <th>Name</th>
                            <th>Trading</th>
                            <th>Status</th>
                            <th>Action</th>
                            </thead>
                            <tbody class="w-100">
                            @forelse($categories as $category)
                                <tr>
                                    <td>
                                        <i class="{{ $category->icon }}"></i>
                                    </td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        @if((bool)$category->show_at_trading)
                                            <span class="badge bg-lime text-lime-fg">Yes</span>
                                        @else
                                            <span class="badge bg-red text-red-fg">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if((bool)$category->status)
                                            <span class="badge bg-lime text-lime-fg">Yes</span>
                                        @else
                                            <span class="badge bg-red text-red-fg">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a
                                           href="{{ route('admin.course-categories.edit', $category->id) }}"
                                           class="btn-sm btn-warning text-warning"
                                        >
                                            Info
                                        </a>
                                        <a
                                           href="{{ route('admin.course-categories.edit', $category->id) }}"
                                           class="btn-sm btn-primary"
                                        >
                                            Edit
                                        </a>
                                        <a
                                            href="{{ route('admin.course-categories.destroy', $category->id) }}"
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
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

