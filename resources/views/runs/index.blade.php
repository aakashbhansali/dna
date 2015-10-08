@extends('app')
@section('content')
@include('partials.navbar')
<h1>Runs</h1>
    <div class="table-container">
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Experiment name</th>
            <th>Description</th>
            <th>Flow Cell</th>
            <th>Date</th>
            <th>Status</th>
            <th>Instrument</th>



        </tr>
    </thead>
    @foreach ($runs as $run)
    <tr>
        <td><a href="/runs/{{ $run->id }}/edit">{{ $run->experiment_name}}</a></td>
        <td>{{ $run->description}}</td>
        <td>{{ $run->flow_cell}}</td>
        <td>{{ Carbon\Carbon::parse($run->run_date)->format('d M Y')}}</td>
        <td>{{ $run->run_status->status}}</td>
        <td>{{ $run->instrument->name}}</td>
    </tr>
    @endforeach

    </table>
    </div>
@endsection
