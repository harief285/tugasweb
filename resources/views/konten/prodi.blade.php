@extends('layouts.main')
@section('title',$title)
@section('content')
<!DOCTYPE html>
    <head>
        <title>Perulangan Websaya.com</title>
    </head>
    <body>
        @php
            $x=0;
        @endphp
        @while ($x < count($prodi))
            {{ 'Jurusan : ' . $prodi[$x] }}<br>
        @php
        $x++;
        @endphp
        @endwhile
        <hr>
    </body>
</html>
@endsection