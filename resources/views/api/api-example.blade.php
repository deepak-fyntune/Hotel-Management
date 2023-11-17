<h1>API Example</h1>

@foreach ($data as $post)
<p>ID: {{ $post->id }}</p>
<p>User ID: {{ $post->userId }}</p>
    <p>Title: {{ $post->title }}</p>
    <p>Body: {{ $post->body }}</p>
    <hr>
@endforeach
