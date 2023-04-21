<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@php
$name = "saw htut " ;
    $arr = ['apple' , 'fruit' , 'banana'] ; 
    $my = (Object) [
        'name' => 'htut' , 
        'age' => '18'
    ] ;
@endphp

{{"<h1>hello min ga lar bar</h1>"}}
{!! "<script>alert('hello')</script>" !!}
</body>
<script>
    console.log("{{$name}}");
    const fruits = @json($arr);
    console.log(fruits)
</script>
</html>