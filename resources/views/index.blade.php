@extends('master')
  
@section('title')
    home page
@endsection
@section('content')
    <h1> I  am home </h1>
@endsection

@push('script')
    <script>
      console.log("push");
    </script>
@endpush

@prepend('script')
    <script>
      console.log('prepand');
    </script>
@endprepend

