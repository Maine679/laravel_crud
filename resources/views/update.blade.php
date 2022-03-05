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
            <th>Old pass</th>
            <th>New pass</th>
            <th>Confirm pass</th>
            <th>Control</th>
        </tr>
        </thead>
        {{$counter = 0}}
        @foreach($users as $user)
            <tr>
                <form method="POST" action="/update/{{$user->id}}">
                    {{ csrf_field() }}
                    <th scope="row">{{++$counter}}</th>
                    <td>{{$user->id}}</td>
                    <td><input type="text" name="username" placeholder="{{$user->username}}"></td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td><input type="password" name="old_password" placeholder="if you want to change pass or login - enter your old pass."></td>
                    <td><input type="password" name="new_password" placeholder="Enter new password"></td>
                    <td><input type="password" name="confirm_password" placeholder="Enter confirm password"></td>
                    <td><button class="btn btn-info">Изменить</button></td>
                </form>
            </tr>
        @endforeach

    </table>

    <?php echo $users->render(); ?>

@endsection('content')
