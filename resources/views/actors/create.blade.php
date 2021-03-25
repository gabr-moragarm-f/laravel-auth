<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{route('actors.store')}}" method="post">
    @csrf

    @method('POST')

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Name">
    </div>

    <div class="form-group">
      <label for="surname">Surname</label>
      <input type="text" class="form-control" name="surname" placeholder="Surname">
    </div>

    <div class="form-group">
      <label for="birthplace">Birthplace</label>
      <input type="text" class="form-control" name="birthplace" placeholder="Birthplace">
    </div>

    <div class="form-group">
      <label for="birth">Birth</label>
      <input type="date" class="form-control" name="birth" placeholder="Birth">
    </div>

    <div class="form-group">
      <label for="photo">Photo (URL)</label>
      <input type="text" class="form-control" name="photo" placeholder="Photo (URL)">
    </div>

    <input type="submit" value="Create!">
  </form>
</body>
</html>
