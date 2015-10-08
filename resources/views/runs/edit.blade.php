@extends('app')
@section('content')
@include('partials.navbar')
<h1>Edit run</h1>
    <div class="table-container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Experiment name</th>
            <th>Read 1</th>
            <th>Read 2</th>
            <th>Description</th>
            <th>Flow Cell</th>
            <th>Date</th>
            <th>Status</th>
            <th>Adaptor</th>
            <th>Chemistry</th>
            <th>Project</th>
            <th>User</th>

            <th>Assay</th>
            <th>Instrument</th>
            <th>Work Flow</th>

        </tr>
        </thead>

            <tr>
                <td>{{ $run->experiment_name}}</td>
                <td>{{ $run->read1}}</td>
                <td>{{ $run->read2}}</td>
                <td>{{ $run->description}}</td>
                <td>{{ $run->flow_cell}}</td>
                <td>{{ $run->run_date}}</td>
                <td>{{ $run->run_status->status}}</td>
                <td>{{ $run->adaptor->value}}</td>
                <td>{{ $run->chemistry->chemistry}}</td>
                <td>{{ $run->project_group->name}}</td>
                <td>{{ $run->users->name}}</td>

                <td>{{ $run->assay->name}}</td>
                <td>{{ $run->instrument->name}}</td>
                <td>{{ $run->work_flow->value}}</td>

            </tr>

    </table>
    </div>
@if ($currentUserSuper)
    {!! Form::open(['url'=>'runs/setStatus', 'class'=>'form-inline']) !!}
<div class="form-container">
    {!! Form::hidden('run_id',$run->id) !!}
    {!! Form::label('run_status', 'Run status') !!}
    {!! Form::select('run_status', $status_options, $run->run_status->id, ['class'=>'form-control']) !!}

    {!! Form::submit("Set status", ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>
    <br><br>

    <p>Where run status is either 'Run built' or 'Run succeed' and it is set to 'Run failed' all included samples will have runs remaining incremented by 1 </p>
    @include('errors.list')
    @endif
<h4>Included batches</h4>


<div class="table-container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Batch name</th>
            <th>User ID</th>
            <th>Charge code</th>
            <th>Date</th>
            <th>Project</th>
        </tr>
        </thead>
        @foreach ($batches as $b)
            <tr>
                <td><a href="/batches/{{ $b->id }}">{{ $b->batch_name }}</a></td>
                <td>{{ $b->name}}</td>
                <td>{{ $b->charge_code}}</td>
                <td>{{Carbon\Carbon::parse($b->created_at)->format('d M Y') }}</td>
                <td>{{ $b->project}}</td>
            </tr>
        @endforeach
    </table>
</div>

@endsection
