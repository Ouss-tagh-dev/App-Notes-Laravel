@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Notes') }}</div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" value="{{ $note->title }}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                        <div class="col-md-6">
                            <textarea id="description" class="form-control" name="description" readonly>{{ $note->description }}</textarea>
                        </div>

                    </div>
                    <a class="btn  btn-primary mb-2" href="{{ route('notes.edit', $note->id) }}">Edit</a>

                    <form method="post" action="{{ route('notes.destroy',$note->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
