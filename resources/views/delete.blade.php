@extends('template')
@section('content')

    <table class="table">
        <thead class="thead-inverse table">
        <tr>
            <th>Number</th>
            <th>Id</th>
            <th>User name</th>
            <th>Create date</th>
            <th>Update date</th>

            <th>Control</th>
        </tr>
        </thead>
        {{$counter = 0}}
        @foreach($users as $user)
            <tr>
                <form method="POST" action="/delete/{{$user->id}}">
                    {{ csrf_field() }}
                    <th scope="row">{{++$counter}}</th>
                    <td>{{$user->id}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td><button class="btn btn-warning">Удалить</button></td>
                </form>
            </tr>
        @endforeach

    </table>

    <?php echo $users->render(); ?>

@endsection('content')
