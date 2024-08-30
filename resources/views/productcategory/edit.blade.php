<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('bejegyzés módosítása') }}
        </h2>
    </x-slot>
<!DOCTYPE html>
<html lang="hu">

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
                    <h2>{{ $productcategory->name }} módosítása</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('productcategory.index') }}" enctype="multipart/form-data">
                        Vissza</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('productcategory.update',$productcategory->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Bejegyzés neve:</strong>
                        <input type="text" name="name" value="{{ $productcategory->name }}" class="form-control"
                            placeholder="Company name">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kép (kicsi kép a lista nézethez):</strong>
                        <input type="file" name="image" class="form-control" placeholder="image">
                        <img src="/images/{{ $productcategory->image }}" width="300px">
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Kép (bannerkép)</strong>
                        <input type="file" name="image2" class="form-control" placeholder="image2">
                        <img src="/images/{{ $productcategory->image2 }}" width="300px">
                        @error('image2')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tartalom:</strong>
                        <textarea name="content" id="myeditorinstance">{{ $productcategory->content }}</textarea>
                        @error('content')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>




                <button type="submit" class="btn btn-primary ml-3">Kész</button>
            </div>
        </form>
    </div>
</body>

</html>
</x-app-layout>