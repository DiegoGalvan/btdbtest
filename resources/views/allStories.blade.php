<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Stories, Pagination 25</title>
</head>
<body>
    <div class="container">
        @foreach ($allStoriesPag25 as $story)
            <hr>
            <hr>
            {{ $story->title }}
            <br>
            By <i>{{ $story->author }}</i>
            <br>
            Fecha de crecion: {{ $story->created_at }} //// Ultima actualizacion: {{ $story->updated_at }}
            <br>
            <br>
            <i>{{ $story->abstract }}</i>
            <br>
            Keywords: {{ $story->keywords }}
            <br>
            <br>
            {{ $story->content }}
            <br>
            Status name: <b>{{ $story->status->name }}</b> //// Status display name: <b>{{ $story->status->display_name }}</b>
            <hr>
            <hr>
            <br>
            <br>
        @endforeach
    </div>
    {{ $allStoriesPag25->links() }}
</body>
</html>