<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dolgozó hozzáadása') }}
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
                    <h2>Cég hozzáadása</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('workers.index') }}"> Vissza</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('workers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Dolgozó neve:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Dolgozó neve">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Dolgozó email:</strong>
                        <input type="email" name="email" class="form-control" placeholder="Dolgozó email">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Dolgozó cím:</strong>
                        <input type="text" name="address" class="form-control" placeholder="Dolgozó cím">
                        @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Dolgozó munkaköre:</strong>
                        <select name="munkakor" class="form-control">
                        <?php
                        $projects = DB::table('munkakorok')->get();
                        foreach($projects as $project){
                            ?>
                            <option value="{{ $project->name }}">{{ $project->name}}</option>
                            <?php
                        }
                        ?>
                        </select>
                        @error('munkakor')
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