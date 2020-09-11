<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Businesses, Pagination 25</title>
</head>
<body>
    <div class="container">
        @foreach ($businesses as $business)
            <hr>
            <hr>
            {{ $business->name }}
            <br>
            <i>{{ $business->commercial_name }}</i>
            <hr>
            <hr>
            <br>
            <br>
        @endforeach
    </div>
    {{ $businesses->links() }}
</body>
</html>