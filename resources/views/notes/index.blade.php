@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <a class="btn btn-success mb-4" href="{{ route('notes.create') }}">Create New Note</a>
                    <table id="note_table" class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Title</th>
                                
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (App\Models\Note::all() as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td class="d-flex  justify-content-around ">
                                    <a class="btn btn-success" href="{{ route('notes.show' , $item->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('notes.edit' , $item->id) }}">Edit</a>
                                    <form method="POST" action="{{ route('notes.destroy', $item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
