<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Choisir la liste des villes préférés") }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                        <div class="container mt-3 w-100 bg-gray-100 p-6">
                            <div class="gap-2 justify-center">
                                <form action="{{route('ville.store')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="input-group mb-3 mx-auto" style="width:500px">
                                        <input name="nom" type="text" class="form-control" placeholder="Nome de la ville" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Ajouter</button>
                                    </div>
                                </form>
                                <br>
                                <table class="table table-dark table-striped mx-auto table-sm" style="width:300px">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($villes as $ville)
                                        <tr>
                                            <td>{{$ville->id}}</td>
                                            <td>{{$ville->nom}}</td>
                                            <td>
                                                <form action="/villes/{{$ville->id}}" method="POST">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                    <button type="submit" style="width:70px" class="mt-2 inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 btn-danger">
                                                    <img src="https://img.icons8.com/ios-glyphs/30/000000/filled-trash.png"/>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
