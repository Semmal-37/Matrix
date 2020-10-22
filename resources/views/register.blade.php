<!DOCTYPE html>

<html>

<head>

    <title>MLM Matrix</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>



<div class="container">

    <h3>MLM Matrix</h3>

    @if (count($errors) > 0)

      <div class="alert alert-danger">



          <ul>

              @foreach ($errors->all() as $error)

              <li>{{ $error }}</li>

              @endforeach

          </ul>

      </div>



    @endif



    @if ($message = Session::get('success'))

          <div class="alert alert-success">

              <p>{{ $message }}</p>

          </div>

    @endif



    <form action="{{ url('registerrr') }}" method="POST" id="signupForm">

      {{ csrf_field() }}



        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

            <label class="control-label">Name:</label>

            <input type="text" name="name" class="form-control" value="{{ old('name') }}">

            @if ($errors->has('name'))

                <span class="text-danger">{{ $errors->first('name') }}</span>

            @endif

        </div>

        <div class="form-group {{ $errors->has('sponsor_id') ? 'has-error' : '' }}">

            <label class="control-label">Sponsor Name:</label>

            <input type="text" name="sponsor_id" class="form-control" value="{{ old('sponsor_id') }}">

            @if ($errors->has('sponsor_id'))

                <span class="text-danger">{{ $errors->first('sponsor_id') }}</span>

            @endif

        </div>


        <div class="form-group">

            <button class="btn btn-success" type="submit">Submit</button>

        </div>

    </form>

</div>



</body>

</html>