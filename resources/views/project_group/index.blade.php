@extends('app')
@section('content')
    @include('partials.navbar')

    <h1>Project Groups</h1>
    <div class="table-container">

        <table class="table table-striped">
            <tr>
                <th>Project Group</th>
            </tr>
            @foreach ($project_groups as $project)
                <tr>
                    <td>{{($project->name)}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

@section('footer')

@endsection
