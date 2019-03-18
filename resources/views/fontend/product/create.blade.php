@extends('layouts.default')

@section('title', 'T?o s?n ph?m')

@section('content')
    @if(isset($success))
        <div class="alert alert-success" role="alert">{{ $success }}</div>
    @endif
    @if(isset($fail))
        <div class="alert alert-danger" role="alert">{{ $fail }}</div>
    @endif

    {!! Form::open(array('url' => '/product', 'class' => 'form-horizontal')) !!}
    <div class="form-group">
        {!! Form::label('name', 'Tên s?n ph?m', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::text('name', '', array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Giá s?n ph?m', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-3">
            {!! Form::text('price', '', array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('content', 'N?i dung s?n ph?m', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::textarea('content', '', array('class' => 'form-control', 'rows' => 3)) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('image_path', '?nh s?n ph?m', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-9">
            {!! Form::text('content', '', array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('active', 'Active', array('class' => 'col-sm-3 control-label')) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('active', '', true) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            {!! Form::submit('T?o s?n ph?m', array('class' => 'btn btn-success')) !!}
        </div>
    </div>
    {!! Form::close() !!}
@endsection