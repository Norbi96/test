<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Termék létrehozása') }}
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
                    <h2>Termék hozzáadása</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Vissza</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <input type="text" name="category_id" value="{{ $categoryId }}" hidden placeholder="Terméknév">


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Név:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Terméknév">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Leírás:</strong>
                        <input type="text" name="description" class="form-control" placeholder="Leírás">
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Nettó:</strong>
                        <input type="text" name="netto" class="form-control" placeholder="Nettó">
                        @error('netto')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Áfa:</strong>
                        <input type="text" name="tax" class="form-control" placeholder="Áfa">
                        @error('tax')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Bruttó:</strong>
                        <input type="text" name="brutto" class="form-control" placeholder="Bruttó">
                        @error('brutto')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Fénykép:</strong>
                        <input type="file" class="form-control" name="image" />
                        @error('image')
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
