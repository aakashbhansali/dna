@extends('app')
@section('content')
    @include('partials.navbar')

    <br/>
    <h3>Instruments</h3>
    <div class="table-container">
        <table class="table table-striped">
            <tr>
                <th>Instruments</th>
            </tr>
            @foreach ($instruments as $instrument)
                <tr>
                    <td>{{($instrument->name)}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

@section('footer')

@endsection
