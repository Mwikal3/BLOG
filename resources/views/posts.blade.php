<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="/app.css">
    

<title>My Blog</title>
<body>
    @foreach ($posts as $post) 
    <article>

       {!! $post !!}
    </article>
    
    @endforeach


</body>
</html>

 {{-- -----------------------------------------------        --}}
        {{-- <h1><?= $post->title; ?></h1>
        <div><?= $post->excerpt; ?></div> --}}