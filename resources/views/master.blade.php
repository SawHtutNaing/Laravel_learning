<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

<title>
    @yield('title' , env('APP_NAME'))
</title>
 <nav class=" border rounded m-3 p-2">
    {{-- <a href="{{url('/')}}"> home </a>
    <a href="{{url('/about-us')}}"> About </a>
    <a href="{{url('/contact-us')}}">contact </a>
    <a href="{{url('/contact')}}">contact </a>  --}}


    {{-- error  --}}
    <a class=" btn btn-outline-primary font-weight-bold" href="{{route('page.home')}}"> hoke </a>
    <a class=" btn btn-outline-primary font-weight-bold" href="{{route('page.about')}}">about </a>
    <a class=" btn btn-outline-primary font-weight-bold" href="{{route('page.contact')}}">contact </a>
    {{-- <a class=" btn btn-outline-primary font-weight-bold" href="{{url("min_ga_lar_bar")}}"> min ga lar bar  </a> --}}
    <a class=" btn btn-outline-primary font-weight-bold" href="{{route("minGaLarBar")}}">min  ga lar bar </a>
 </nav>
   @yield('content')
    @stack('script')


<script src="{{asset('js/bootstrap.bundle.js')}}"></script>