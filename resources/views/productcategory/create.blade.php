<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Új bejegyzés létrehozása') }}
        </h2>
    </x-slot>

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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>bejegyzés hozzáadása</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('productcategory.index') }}"> Vissza</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('productcategory.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Bejegyzés neve:</strong>
                        <input type="text" name="name" class="form-control" placeholder="">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kép (kicsi kép a lista nézethez):</strong>
                        <input type="file" name="image" class="form-control" placeholder="image">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kép 2 (bejegyzésen belüli banner kép):</strong>
                        <input type="file" name="image2" class="form-control" placeholder="image2">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tartalom:</strong>
                        <textarea name="content" id="myeditorinstance"></textarea>
                    </div>
                </div>



            </div>

                <button type="submit" class="btn btn-primary ml-3">Mentés</button>
            </div>
        </form>
    </div>
</div></div></div></div>


</html>
</x-app-layout>
