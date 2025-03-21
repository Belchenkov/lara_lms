@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Card title</h3>
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
                            @forelse($instructors_requests as $instructor)
                                <tr>
                                    <td>
                                        {{ $instructor->name }}
                                    </td>
                                    <td>
                                        {{ $instructor->email }}
                                    </td>
                                    <td>
                                        @if($instructor->approve_status === \App\Enums\ApproveStatus::PENDING->value)
                                            <span class="badge bg-yellow text-yellow-fg">
                                                {{ ucfirst(\App\Enums\ApproveStatus::PENDING->value) }}
                                            </span>
                                        @elseif($instructor->approve_status === \App\Enums\ApproveStatus::REJECTED->value)
                                            <span class="badge bg-red text-yellow-fg">
                                                {{ ucfirst(\App\Enums\ApproveStatus::REJECTED->value) }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="text-secondary">
                                        {{ ucfirst($instructor->role) }}
                                    </td>
                                    <td class="text-muted">
                                        <a href="{{ route('admin.instructor-doc-download', $instructor->id) }}">
                                            Download
                                        </a>
                                    </td>
                                    <td class="text-muted">
                                        <form
                                            action="{{ route('admin.instructor-requests.update', $instructor->id) }}"
                                            class="status-{{ $instructor->id }}"
                                            method="POST"
                                         >
                                            @csrf
                                            @method('PUT')
                                            <select
                                                name="status"
                                                id="status"
                                                class="form-control"
                                                onchange="$('.status-{{ $instructor->id }}').submit()"
                                            >
                                                <option
                                                    value="{{\App\Enums\ApproveStatus::PENDING->value}}"
                                                    @selected($instructor->approve_status === \App\Enums\ApproveStatus::PENDING->value)
                                                >
                                                    {{ ucfirst(\App\Enums\ApproveStatus::PENDING->value) }}
                                                </option>
                                                <option
                                                    value="{{\App\Enums\ApproveStatus::APPROVED->value}}"
                                                    @selected($instructor->approve_status === \App\Enums\ApproveStatus::APPROVED->value)
                                                >
                                                    {{ ucfirst(\App\Enums\ApproveStatus::APPROVED->value) }}
                                                </option>
                                                <option
                                                    value="{{\App\Enums\ApproveStatus::REJECTED->value}}"
                                                    @selected($instructor->approve_status === \App\Enums\ApproveStatus::REJECTED->value)
                                                >
                                                    {{ ucfirst(\App\Enums\ApproveStatus::REJECTED->value) }}
                                                </option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No Data Available</td>
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

