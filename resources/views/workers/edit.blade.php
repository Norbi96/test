<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Worker Form - Laravel 9 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>{{ $worker->name }} módosítása</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('workers.index') }}" enctype="multipart/form-data">
                        Vissza</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('workers.update',$worker->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Dolgozó neve:</strong>
                        <input type="text" name="name" value="{{ $worker->name }}" class="form-control"
                            placeholder="Dolgozó neve:">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Dolgozó email:</strong>
                        <input type="email" name="email" class="form-control" placeholder="Dolgozó email:"
                            value="{{ $worker->email }}">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Cím:</strong>
                        <input type="text" name="address" value="{{ $worker->address }}" class="form-control"
                            placeholder="Dolgozó címe">
                        @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Dolgozó munkaköre:</strong>
                        <input type="text" name="address" value="{{ $worker->munkakor }}" class="form-control"
                            placeholder="Dolgozó munkaköre">
                        @error('munkakor')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>