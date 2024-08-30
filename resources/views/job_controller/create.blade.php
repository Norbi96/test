<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
       tinymce.init({
         selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
         plugins: 'powerpaste advcode table lists checklist',
         toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table'
       });
    </script>
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Új munkalehetőség hozzáadása') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Munkalehetőség hozzáadása</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('job_controller.index') }}"> Vissza</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('job_controller.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Megnevezés:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Név">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kategória:</strong>

                         <select name="jobplace" class="form-select">
                            <option selected disabled>Válasszon!</option>
                            <option value="web">Webfejlesztés</option>
                            <option value="ren">Rendszerüzemeltetés</option>
                            <option value="fem">Fémipar</option>
                          </select>

                        @error('jobplace')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Mentés</button>
            </div>
        </form>
    </div>
</div></div></div></div>

</x-app-layout>
