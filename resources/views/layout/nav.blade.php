<nav class="bg-gray-200 text-center">
  <a href="{{route('posts.index')}}" class="text-blue-400 p-4">Home</a>
  <a href="{{route('register')}}" class="text-blue-400 p-4">Register</a>
  @if (auth()->user())
  <form method="POST" action="{{'logout'}}" class="inline">
    @csrf
    @method('delete')
    <button type="submit" class="text-red-400">Logout</button>
  </form>
  <span class="ml-2">User : {{auth()->user()->name}}</span>
  @else
    <a href="{{route('login')}}" class="text-blue-400 p-4">Login</a>
  @endif
</nav>
