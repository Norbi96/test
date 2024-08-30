<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blog szerkesztés</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
       tinymce.init({
         selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
         plugins: 'powerpaste advcode table lists checklist',
         toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table'
       });
    </script>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>{{ $blog->name }} módosítása</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('blogies.index') }}" enctype="multipart/form-data">
                        Vissza</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('blogies.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Blognév:</strong>
                        <input type="text" name="name" value="{{ $blog->name }}" class="form-control"
                            placeholder="Blognév">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tartalom:</strong>
                        <textarea name="content" id="myeditorinstance">{{ $blog->content }}</textarea>
                        @error('content')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kép:</strong>
                        <input type="file" name="image" class="form-control" placeholder="image">
                        <img src="/images/{{ $blog->image }}" width="300px">
                    </div>
                </div>


                <button type="submit" class="btn btn-primary ml-3">Módosít</button>
            </div>
        </form>
    </div>
</body>

</html>
