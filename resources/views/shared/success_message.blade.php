@if (session()->has('success'))
    <div class="text-green-400 text-xl font-bold">{{session('success')}}</div>
@endif