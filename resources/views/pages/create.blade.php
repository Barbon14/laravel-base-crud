@extends('layouts.main-layout')

@section('content')

    <h2>New Comic</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="" method="POST">

        @method("POST")
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="title"><br>
        <label for="subtitle">Subtitle:</label>
        <input type="text" name="subtitle" placeholder="subtitle"><br>
        <label for="release_date">Release date:</label>
        <input type="date" name="release_date"><br>
        <label for="title">Pages Number:</label>
        <input type="number" name="pages" placeholder="pages"><br>
        <input type="submit" value="UPDATE">
    </form>

@endsection