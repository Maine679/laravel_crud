@extends('template')
@section('content')

    <script>
        {{--changeData(); //При загрузке страницы обновление--}}

        {{--function changeData() {--}}
        {{--    var data = @json($users);--}}

        {{--    var selectId = get_num_from_id(document.getElementById('SelectUser').value, data);--}}
        {{--    console.log('Select id ' + data[selectId].hash_password);--}}

        {{--    document.getElementById('userPassword').value = data[selectId].hash_password;--}}

        {{--}--}}

        {{--function get_num_from_id(id,data) {--}}
        {{--    if (id == -1) {--}}
        {{--        return -1;--}}
        {{--    }--}}
        {{--    else {--}}
        {{--        for(var i=0;i<data.length;i++) {--}}
        {{--            if(data[i].id == id) {--}}
        {{--                return i;--}}
        {{--            }--}}
        {{--        }--}}
        {{--    }--}}
        {{--    return -1;--}}
        {{--}--}}
    </script>

    <table class="table">
        <thead class="thead-inverse table">
            <tr>
                <th>Number</th>
                <th>Id</th>
                <th>User name</th>
                <th>Create date</th>
                <th>Update date</th>
            </tr>
        </thead>
        {{$counter = 0}}
        @foreach($users as $user)
            <tr>
                <th scope="row">{{++$counter}}</th>
                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
            </tr>
        @endforeach

    </table>

    <?php echo $users->render(); ?>
@endsection('content')
