@extends('layouts.admin')


@section('content')


<a href="{{ route('pages.create') }}" class="btn btn-success float-right">Create</a>

<h1>Pages overview</h1>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th>Active</th>
            <th>Created</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pages as $page)
        <tr>
            <td>{{ $page->title }}</td>
            <td>{{ $page->slug }}</td>
            <td>{{ ($page->active) ? 'Yes' : 'No' }}</td>
            <td>{{ $page->created_at->format('d-m-Y H:i') }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('pages.edit', ['id' => $page->id]) }}">Edit</a>
                {!! Form::open(['route' => ['pages.destroy', $page->id], 'method' => 'DELETE']) !!}
                    <button type="submit" class="btn btn-danger">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>




@stop
