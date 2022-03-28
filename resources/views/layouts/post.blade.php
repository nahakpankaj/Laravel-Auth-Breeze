<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{route('post_index')}}">
        @csrf
        <h1><strong>Create post</strong></h1>
        <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" class="form-control"  placeholder="enter title">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea class="form-control" name="body" rows="3" placeholder="enter Body"></textarea>
          </div>
          <div>
              <button type="submit" class="btn btn-success">Post</button>
          </div>
    </form>
    @if (session()->has('status'))
        {{session('status')}}
    @endif

</x-app-layout>
