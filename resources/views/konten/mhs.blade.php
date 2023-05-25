@extends('layouts.main')
@section('title',$title)
@section('content')
<!DOCTYPE html>
    <head>
        <title>Perulangan Websaya.com</title>
    </head>
    <body>
        <!-- <h3>Perulangan for</h3>
        @for($i=0; $i < count($mhs); $i++)
        {{ 'Nama : ' . $mhs[$i] }}<br>
        @endfor
        <hr>
        <h3>Perulangan foreach</h3>
        @foreach ($mhs as $item)
        {{ 'Nama : ' . $item }}<br>
        @endforeach
        <hr> -->
        <!-- <h3>Perulangan While</h3> -->
        @php
            $x=0;
        @endphp
        @while ($x < count($mhs))
            {{ 'Nama : ' . $mhs[$x] }}<br>
        @php
        $x++;
        @endphp
        @endwhile
        <hr>
    </body>
</html>
@endsection