@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $utilizator->fullname }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>Email</th>
                <td>{{ $utilizator->email }}</td>
            </tr>
            <tr>
                <th>Phone number</th>
                <td>{{ $utilizator->phonenumber }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $utilizator->address }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ $utilizator->type }}</td>
            </tr>
            </tbody>
        </table>
        <a href="{{ url('/utilizatori') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
