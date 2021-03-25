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
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$actor->photo}}" alt="{{$actor->name}}">

    <div class="card-body">
      <p class="card-text">
        <ol>
          <li>
            <strong>
              ID:
            </strong>
            {{$actor->id}}
          </li>

          <li>
            <strong>
              Name:
            </strong>
            {{$actor->name}} {{$actor->surname}}
          </li>

          <li>
            <strong>
              Birthplace:
            </strong>
            {{$actor->birthplace}}
          </li>

          <li>
            <strong>
              Birth:
            </strong>
            {{$actor->birth}}
          </li>
        </ol>
      </p>
    </div>
  </div>

  <a href="{{route('actors.index')}}">
    <button type="button" name="button">Home</button>
  </a>
</body>
</html>
