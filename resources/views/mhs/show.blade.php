<!DOCTYPE html>
    <head>
        <title>Websaya.com</title>
    </head>
    <body>
        @if (count($mhs)==1)
            <p>Jumlah mahasiswa 1</p>
        @elseif (count($mhs)==2)
            <p>Jumlah mahasiswa adalah 2</p>
        @else
            <p>Jumlah mahasiswa adalah lebih dari 1</p>
        @endif
    </body>
</html>