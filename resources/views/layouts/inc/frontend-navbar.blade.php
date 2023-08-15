<div class="global-navbar">
    <div class="container">
        <div class="row">
            <div class="col-md-3 d-none d-sm-none d-md-inline">
                <img src="{{ asset('assets/images/main-logo.png') }}" class="w-100" alt="logo" />
            </div>
            <div class="col-md-9 my-auto">
                <div class="border text-center p-2">
                    <h5>Advertise Here</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="navbar-container">
    <div class="sticky-navbar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-green">
            <div class="container">
                <a href="" class="navbar-brand d-inline d-sm-none d-md-none">
                    <img src="{{ asset('assets/images/main-logo.png') }}" style="width:140px" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        {{-- Loop through categories and generate navigation links --}}
                        @php
                        $categories = App\Models\Category::where('navbar_status', 0)->where('status', 0)->get();
                        @endphp
                        @foreach($categories as $cateitem)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('tutorial/' . $cateitem->slug) }}">{{ $cateitem->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="float-right">
                        @if (auth()->check())
                            <a href="/admin/dashboard" class="text-white text-decoration-none">Dashboard</a>
                        @else
                            <a href="/login" class="text-white text-decoration-none">login</a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

