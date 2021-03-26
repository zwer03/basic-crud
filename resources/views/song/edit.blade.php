@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Create Song</div>
            <div class="panel-body">
                <form method="POST" action="{{ route('songs.update', $song->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value={{ $song->title }}>
                
                        @error('title')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="artist">Artist</label>
                        <input type="text" class="form-control" id="artist" name="artist" value={{ $song->artist }}>
                
                        @error('artist')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="lyrics">Lyrics</label>
                        <textarea class="form-control" id="lyrics" name="lyrics">
                            {{ $song->lyrics }}
                        </textarea>
                        @error('lyrics')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <form action="{{ route('songs.destroy', $song->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this song?')"  class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection