<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit zamowienie</title>
</head>
<body>
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit zamowienie</h2>
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">{{Session::get('success') }}</div>
                @endif
                <form method="post" action="{{url('update-zamowienie')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="md-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="nazwa" placeholder="Enter Name" value="{{$data->nazwa}}">
                        @error('nazwa')
                            </br>
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Id_klienta</label>
                        <input type="text" class="form-control" name="id_klienta" placeholder="Enter Name" value="{{$data->id_klienta}}">
                        @error('id_klienta')
                            </br>
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">id_samochodu</label>
                        <input type="text" class="form-control" name="id_samochodu" placeholder="Enter Name" value="{{$data->id_samochodu}}">
                        @error('id_samochodu')
                            </br>
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('zamowienie-list')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>