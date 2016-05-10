@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops! Something went wrong!</strong>
        <br/><br/>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (!empty($success))
    <div class="alert alert-success">
        <span class="glyphicon glyphicon-ok"></span>
        Your response has been successfully captured! Thanks.
    </div>
@endif
