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
                    <div class="text-end">
                        <a href="" class="btn btn-primary">
                            Become an instructor
                        </a>
                    </div>
                    <div class="row">
                       <div class="card">
                           <div class="card-body">
                               test
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
