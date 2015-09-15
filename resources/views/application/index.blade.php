@extends('app')
@section('content')
    <a href='/'>@include('partials.logo')</a>


    <br/>
    <h3>Applications</h3>

    <table class="table table-striped">

        <tr>
            <th>Value</th>
            <th>Default</th>

        </tr>

        @foreach ($applications as $app)
            <tr>
                <td>{{($app->application)}}</td>
                <td>{{($app->default)}}</td>

            </tr>
        @endforeach


    </table>

@endsection

@section('footer')

@endsection