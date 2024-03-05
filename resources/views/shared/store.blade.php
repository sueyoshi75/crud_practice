<h1 class="text-4xl font-bold p-4">Create Post</h1>
<form method="post" action="{{route('posts.store')}}">
  @csrf
  <label>title</label>
  <input type="text" name="title" class="w-full block border border-garay-400">
  @error('title')
      <span class="text-red-400">{{$message}}</span>
  @enderror
  <br>
  <label>content</label>
  <textarea name="content" class="w-full block border border-garay-400"></textarea>
  @error('content')
      <span class="text-red-400">{{$message}}</span>
  @enderror
  <button class="block bg-blue-400 px-4 py-2 mt-2 text-white rounded-xl">create</button>
</form>