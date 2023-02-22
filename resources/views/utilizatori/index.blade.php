@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Utilizatori</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Nume complet</th>
                    <th>Număr de telefon</th>
                    <th>Adresă</th>
                    <th>Tip</th>
                    <th>Acțiuni</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($utilizatori as $utilizator)
                    <tr>
                        <td>{{ $utilizator->id }}</td>
                        <td>{{ $utilizator->email }}</td>
                        <td>{{ $utilizator->fullname }}</td>
                        <td>{{ $utilizator->phonenumber }}</td>
                        <td>{{ $utilizator->address }}</td>
                        <td>{{ $utilizator->type }}</td>
                        <td>
                            <a href="{{ route('utilizatori.show', $utilizator->id) }}" class="btn btn-info btn-sm">Detalii</a>
                            <a href="{{ route('utilizatori.edit', $utilizator->id) }}" class="btn btn-primary btn-sm">Editează</a>
                            <form action="{{ route('utilizatori.destroy', $utilizator->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Sunteți sigur că doriți să ștergeți acest utilizator?')">Șterge</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
