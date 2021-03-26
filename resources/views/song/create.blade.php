@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mt-1">
        <div class="panel panel-default">
            <div class="panel-heading">Create Song</div>
            <div class="panel-body">
                <form method="POST" action="{{ route('songs.store') }}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                
                        @error('title')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="artist">Artist</label>
                        <input type="text" class="form-control" id="artist" name="artist" value="{{old('artist')}}">
                
                        @error('artist')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="lyrics">Lyrics</label>
                        <textarea class="form-control" id="lyrics" name="lyrics" value="{{old('lyrics')}}">
                        </textarea>
                        @error('lyrics')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-warning">Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection