@extends('layouts.admin')


@section('content')

    {!! Form::open(['route' => 'pages.store', 'method' => 'POST', 'files'=> true]) !!}

        <div class="form-group row">
            <label class="col-sm-3">
                Slug
            </label>
            <div class="col-sm-9 input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">{{ route('page', ['slug' => '/']) }}/</div>
                </div>
                {!! Form::text('slug', '', ['class' => 'form-control', 'autocomplete' => 'off']); !!}

            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3">
                Image
            </label>
            <div class="col-sm-9">
                {!! Form::file('image[]', '', ['class' => 'form-control', 'autocomplete' => 'off']); !!}
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3">
                Title
            </label>
            <div class="col-sm-9">
                {!! Form::text('title', '', ['class' => 'form-control', 'autocomplete' => 'off']); !!}
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3">
                Body
            </label>
            <div class="col-sm-9">
                {!! Form::textarea('body', '', ['class' => 'form-control', 'autocomplete' => 'off']); !!}
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3">
                Active
            </label>
            <div class="col-sm-9">
                {!! Form::checkbox('active', 1, true, []); !!}
            </div>
        </div>

        <div class="form-group row">
            <button type="submit" class="btn btn-warning">Save</button>
        </div>

    {!! Form::close() !!}
@stop
