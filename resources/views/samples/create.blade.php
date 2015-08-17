@extends('app')
@section('content')
    <h1><a href='/'>SeqTrack</a> - Enter samples</h1>
    <hr/>

    {!! Form::open(['url'=>'samples', 'class'=>'form-inline']) !!}
        <div class="form-group">
        {!! Form::label('basc_group_id', 'basc_group_id', ['class'=>'sr-only']) !!}
        {!! Form::text('basc_group_id', null, ['class'=>'form-control', 'placeholder'=>'BASC Project']) !!}
        {!! Form::label('name', 'Name', ['class'=>'sr-only']) !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
        {!! Form::label('i7_index_id', 'i7_index_id', ['class'=>'sr-only']) !!}
        {!! Form::text('i7_index_id', null, ['class'=>'form-control', 'placeholder'=>'i7']) !!}
        {!! Form::label('i5_index_id', 'i5_index_id', ['class'=>'sr-only']) !!}
        {!! Form::text('i5_index_id', null, ['class'=>'form-control', 'placeholder'=>'i5']) !!}
        {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    @endif
@endsection
