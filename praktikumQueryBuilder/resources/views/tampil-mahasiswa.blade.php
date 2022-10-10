   {{-- <?php
    dump($mahasiswas)
    ?> --}}
    {{-- langkah
        1. bikin html
        2. bikin kondisi perulangan untuk menampilkan data 
        3. bikin alias pada kondisi perulangan
        4. gunakan alias untuk menampilan data percollum 
        --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container text-center p-4">
        <h1> data mahasiswa</h1>  
        <div class="row">
            <div class="m-auto">
                <ol class="list-group">
                    @forelse ($student as $mahasiswa) 
                    <li class="list-group-item">
                    {{$mahasiswa->nama}} ({{$mahasiswa->nim}}),
                    Tanggal lahir :{{$mahasiswa->tanggal_lahir}},
                    IPK:{{$mahasiswa->ipk}}    
                    </li>    
                    @empty
                        <div class="alert alert-dark d-inline-block">
                            tidak ada data ....
                        </div>
    
                    @endforelse
                </ol>
            </div>
        </div>

    </div>  
</body>
</html>
