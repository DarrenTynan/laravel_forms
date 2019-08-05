<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gift Form</title>
    <link rel="stylesheet" href="css/app.css"></head>
<body>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h2>Gift Form</h2>

{{ Form::open(['action' => ['GiftController@store'], 'method' => 'POST' ]) }}

<div class="form-group">
    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', null) }}
</div>

<!-- Submit Button -->
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
    </div>
</div>
{{ Form::close() }}


<script src="js/app.js" charset="utf-8"></script>
</body>
</html>