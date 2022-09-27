<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1> data mahasiswa</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 auto" >
                <ol>
                    @forelse($mahasiswa as $value)
                    
                    <li>{{$value}}</li>
                    @empty 
                    {{-- <div class="alert alert-dark d-inline-block">tidak ada data</div> --}}
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
</body>
</html>