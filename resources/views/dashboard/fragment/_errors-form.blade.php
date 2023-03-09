@if ($errors->any())
        @foreach ($errors->all() as $e)
        <ul>
            <li>{{$e}}</li>
        </ul>
        @endforeach
    @endif