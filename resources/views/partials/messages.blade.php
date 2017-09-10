@if(Session::has('message'))
    <p class="alert alert-success text-center">{{ Session::get('message') }}</p>
@endif


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


