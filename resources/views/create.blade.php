@extends('template')
@section('content')


    <form action="/action/create" method="POST">
        {{ csrf_field() }}

        <div class="mb-3">
            <input type="text" name="name" placeholder="Enter user name">
            <input type="password" name="password" placeholder="Enter user password">
            <input type="password" name="confirmPassword" placeholder="Confirm user password">
        </div>

        <button>Create user</button>
    </form>

@endsection('content')
