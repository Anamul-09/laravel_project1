@foreach ($posts as $post)
  <p>{{ $post->name }}</p>
  <ul>
    @foreach ($post->comments as $index => $comment)
      <li>{{ $index + 1 }}</li>
      <li>{{ $comment->comment }}</li>
    @endforeach
  </ul>
@endforeach
