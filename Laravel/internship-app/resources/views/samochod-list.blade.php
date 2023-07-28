<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samochod list</title>
</head>
<body>
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Samochod list</h2>
                <div style="margin-right:10px; float:right;">
                    <a href="{{url('add-samochod')}}" class="btn btn-primary">Add</a>
                </div>
                </br>
                
                </br>
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">{{Session::get('success') }}</div>
                @endif
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nazwa</th>
                        <th>Akcja</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $sam)
                            <tr>
                                <td>{{$sam->id}}</td>
                                <td>{{$sam->nazwa}}</td>
                                <td>
                                <a href="{{url('edit-samochod/'.$sam->id)}}" class="btn btn-primary">Edit</a>    
                                | <a href="{{url('delete-samochod/'.$sam->id)}}" class="btn btn-danger">Delete</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>