<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{route('post_update',$post->id)}}">
        @csrf
        @method('PUT')
        <h1><strong>Edit post</strong></h1>
        <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" value="{{$post->title}}" class="form-control"  placeholder="enter title">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea class="form-control" name="body" rows="3" placeholder="enter Body">{{$post->body}}</textarea>
          </div>
          <div>
              <button type="submit" class="btn btn-success">Update</button>
          </div>
    </form>

</x-app-layout>
