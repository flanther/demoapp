@extends('layouts.master')

@section('content')
    @parent

    <div class="html-table">
        <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($actors as $actor)
                <tr>
                    <td>{{ $actor->actor_id }}</td>
                    <td>{{ ucfirst(Str::lower($actor->first_name)) }}</td>
                    <td>{{ ucfirst(Str::lower($actor->last_name)) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>

    <br>
    <br>

    <div id="secondTable" class="html-table">
        <div>
        <table id="second-table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        </div>
    </div>
@endsection