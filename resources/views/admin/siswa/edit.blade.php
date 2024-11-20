<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Laravel 10</title>
    <style type="text/css">
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0px;
        }

        table,
        th,
        td {
            border: 1px solid;
        }
    </style>

</head>
<body>
    <h1>Edit Siswa</h1>
    <a href="{{ route('siswa.index') }}">Kembali</a>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach 
        </ul>
    </div>
    @endif 
</body>
</html>