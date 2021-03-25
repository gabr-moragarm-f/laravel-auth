<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Birthplace</th>
        <th scope="col">Birth</th>
        <th scope="col">Photo</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($actors as $actor)
        <tr>
          <th scope="row">{{$actor->id}}</th>

          <td>
            <a href="{{route('actors.show', $actor)}}">{{$actor->name}} {{$actor->surname}}</a>
          </td>

          <td>{{$actor->birthplace}}</td>

          <td>{{$actor->birth}}</td>

          <td><img src="{{asset($actor->photo)}}" alt="{{$actor->name}}" height="150"></td>

          <td>
            <a href="{{route('actors.edit', $actor)}}">
              <button type="button" name="button">Edit!</button>
            </a>

            <form action="{{route('actors.destroy', $actor)}}" method="post">
              @csrf

              @method('DELETE')

              <button type="submit" name="button">DELETE</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{route('actors.create')}}">
    <button type="button" name="button">Create!</button>
  </a>
</body>
</html>
