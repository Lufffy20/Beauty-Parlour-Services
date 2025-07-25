<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <table class="table">
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                            <th>phonenumber</th>
                            <th>gender</th>
                            <th>select</th>
                            <th>subservice</th>
                            <th>time</th>
                            <th>date</th>
                            <th>message</th>
                <th>Package</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)


            <tr>
                <td scope="row">{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phonenumber}}</td>
                            <td>{{$data->gender}}</td>
                            <td>{{$data->select}}</td>
                            <td>{{$data->subservice}}</td>
                            <td>{{$data->time}}</td>
                            <td>{{$data->date}}</td>
                            <td>{{$data->message}}</td>
                <td>{{$data->getpackage->packagename}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
