<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All FinCaps, Pagination 25</title>
</head>
<body>
    <div class="container">
        @foreach ($fincaps as $fincap)
            <hr>
            <hr>
            {{ $fincap->name }}
            <br>
            <i>{{ $fincap->file_id }}</i>
            <br>
            <i>{{ $fincap->created_at }}</i>
            <hr>
            <hr>
            <br>
            <br>
        @endforeach
    </div>
    {{ $fincaps->links() }}
</body>
</html>