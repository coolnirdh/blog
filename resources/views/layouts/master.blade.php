@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @yield('mainContent')
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted text-center">Copyright @2017.</p>
    </div>
</footer>
@endsection