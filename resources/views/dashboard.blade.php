<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Page d'accueil") }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                            <a href="{{route('ville.create')}}" style="margin-left:1010px"
                                class="mt-2 inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Ajouter Ville') }}
                            </a>
                    <form method="get" action="{{route('dashboard')}}">
                        <div>
                            <select required name="ville" class="form-select" aria-label="Default select example" style="width:400px">
                                <option disabled selected>Choisir ville préféré</option>
                                @foreach($villesfav as $villef)
                                <option value="{{$villef->nom}}">{{$villef->nom}}</option>
                                @endforeach
                            </select>
                            <button
                                class="mt-2 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Chercher') }}
                            </button>
                        </div>
                    </form>
                    @if(isset($data) &&$data->temperature > 15)
                    <br>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                            Il fait chaud !!
                        </div>
                    </div>
                    @endif

                    @if(isset($data) && $data->temperature < 5)
                    <br>
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                    <div>
                        Il fait très froid !
                    </div>
                    </div>
                    @endif

                    @if(!isset($error))
                        <div class="container mt-3 w-100 bg-gray-100 p-6">
                            <div class="row gap-2 justify-center">
                                <div class="card border-primary col-6 col-md-2">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$ville}}</h5>
                                        <p class="card-text">Ville</p>
                                    </div>
                                </div>
                                <div class="card border-primary col-6 col-md-3">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$data->observation_time}}</h5>
                                        <p class="card-text">Temps d'observation</p>
                                    </div>
                                </div>
                                <div class="card border-warning col-6 col-md-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Température</h5>
                                        <div class="d-flex">
                                            <img style="height: 50px" src="{{$data->weather_icons[0]}}" alt=""/>
                                            <p class="card-text">{{$data->temperature}} <sup>°C</sup></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-primary col-6 col-md-2">
                                    <div class="card-body">
                                        <h5 class="card-title">Vitesse du vent</h5>
                                        <p class="card-text">{{$data->wind_speed}}</p>
                                    </div>
                                </div>
                                <div class="card border-primary col-6 col-md-2">
                                    <div class="card-body">
                                        <h5 class="card-title">Degré de vent</h5>
                                        <p class="card-text">{{$data->wind_degree}}</p>
                                    </div>
                                </div>

                                <div class="card border-primary col-6 col-md-2">
                                    <div class="card-body">
                                        <h5 class="card-title">Direction du vent</h5>
                                        <p class="card-text">{{$data->wind_dir}}</p>
                                    </div>
                                </div>

                                <div class="card border-primary col-6 col-md-2">
                                    <div class="card-body">
                                        <h5 class="card-title">Pression</h5>
                                        <p class="card-text">{{$data->pressure}}</p>
                                    </div>
                                </div>

                                <div class="card border-primary col-6 col-md-2">
                                    <div class="card-body">
                                        <h4 class="card-title">Humidité</h4>
                                        <p class="card-text">{{$data->humidity}}</p>
                                    </div>
                                </div>

                                <div class="card border-primary col-6 col-md-2">
                                    <div class="card-body">
                                        <h4 class="card-title">Couverture nuageuse</h4>
                                        <p class="card-text">{{$data->cloudcover}}</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    @else
                        <h2>La ville que vous recherchez est introuvable</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
