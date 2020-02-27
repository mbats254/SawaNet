@if(count($errors) > 0)
    <div class="alert alert-danger">
        <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session()->has('ok'))
    <div class="alert alert-success">
        <b><a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('ok') }}
        </b>
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger">
        <b><a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('error') }}
        </b>
    </div>
@endif
