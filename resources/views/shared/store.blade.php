<h1>Create Post</h1>
<form method="post" action="{{route('posts.store')}}">
  @csrf
  <label>title</label>
  <input type="text" name="title">
  <br>
  <label>content</label>
  <textarea name="content"></textarea>
  <button>create</button>
</form>