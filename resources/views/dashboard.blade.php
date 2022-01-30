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
                            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                    <form method="get" action="{{route('dashboard')}}">
                        <div>
                            <x-label for="ville" :value="__('Ville')"/>
                            <x-input placeholder="Ville" id="email" class="block mt-1 w-full" type="text" name="ville"
                                     :value="request()->get('ville')" required autofocus/>
                            <button
                                class="mt-2 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Chercher') }}
                            </button>
                        </div>
                    </form>
                    @if(!isset($error))
                        <div class="container mt-3 w-100 bg-gray-100 p-6">
                            <div class="row gap-2 justify-center">
                                <div class="card border-primary col-6 col-md-3">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$ville}}</h4>
                                        <p class="card-text">Ville</p>
                                    </div>
                                </div>
                                <div class="card border-primary col-6 col-md-3">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$data->observation_time}}</h4>
                                        <p class="card-text">Temps d'observation</p>
                                    </div>
                                </div>
                                <div class="card border-warning col-6 col-md-3">
                                    <div class="card-body">
                                        <h4 class="card-title">Température</h4>
                                        <div class="d-flex">
                                            <img style="height: 26px" src="{{$data->weather_icons[0]}}" alt=""/>
                                            <p class="card-text">{{$data->temperature}} <sup>°C</sup></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-primary col-6 col-md-3">
                                    <div class="card-body">
                                        <h4 class="card-title">Vitesse du vent</h4>
                                        <p class="card-text">{{$data->wind_speed}}</p>
                                    </div>
                                </div>
                                <div class="card border-primary col-6 col-md-3">
                                    <div class="card-body">
                                        <h4 class="card-title">Degré de vent</h4>
                                        <p class="card-text">{{$data->wind_degree}}</p>
                                    </div>
                                </div>

                                <div class="card border-primary col-6 col-md-3">
                                    <div class="card-body">
                                        <h4 class="card-title">Direction du vent</h4>
                                        <p class="card-text">{{$data->wind_dir}}</p>
                                    </div>
                                </div>

                                <div class="card border-primary col-6 col-md-3">
                                    <div class="card-body">
                                        <h4 class="card-title">Pression</h4>
                                        <p class="card-text">{{$data->pressure}}</p>
                                    </div>
                                </div>

                                <div class="card border-primary col-6 col-md-3">
                                    <div class="card-body">
                                        <h4 class="card-title">Humidité</h4>
                                        <p class="card-text">{{$data->humidity}}</p>
                                    </div>
                                </div>

                                <div class="card border-primary col-6 col-md-3">
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
