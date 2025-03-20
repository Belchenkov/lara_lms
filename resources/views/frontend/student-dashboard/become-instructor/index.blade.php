@extends('frontend.layouts.master')

@section('content')
    {{-- Breadcrumbs --}}
    <section class="wsus__breadcrumb" style="background: url({{ asset('frontend/assets/images/breadcrumb_bg.jpg') }});">
        <div class="wsus__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp">
                        <div class="wsus__breadcrumb_text">
                            <h1>Become an instructor</h1>
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>Become an instructor</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--  Dashboard  --}}
    <section class="wsus__dashboard mt_90 xs_mt_70 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                @include('frontend.student-dashboard.sidebar')

                <div class="col-xl-9 col-md-8">
                    <div class="text-end mb-5">
                        <a href="{{ route('student.dashboard') }}" class="btn btn-primary">
                            Back
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Become an Instructor
                        </div>
                        <div class="card-body">
                            <form
                                action="{{ route('student.become-instructor.update', auth()->id()) }}"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                                @csrf
                                <div class="form-group">
                                    <label for="document">Document</label>
                                    <input
                                        type="file"
                                        name="document"
                                    >
                                    <x-input-error :messages="$errors->get('document')" class="mt-2" />
                                </div>
                                <div class="form-group mt-3">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
