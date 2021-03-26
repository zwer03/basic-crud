@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Songs</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="mb-2">
            <a class="btn btn-primary" href="{{ route('songs.create') }}"> Add Song</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Artist</th>
                        <th>Date created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Artist</th>
                        <th>Date created</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($songs as $song)
                        <tr>
                            <td>{{ $song->title }}</td>
                            <td>{{ $song->artist }}</td>
                            <td>{{ $song->created_at }}</td>
                            <td>
                                <a href="{{ route('songs.edit', $song->id) }}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                    @endforeach=
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection