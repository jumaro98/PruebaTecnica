



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8 ">
            <div class="card" style="background-color: transparent">
                <div class="card-header">Cócteles guardados</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="cocktailCarousel" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">

              @foreach ($cocktail2 as $index => $cocktail)
                                <div class="carousel-item @if ($index == 0) active @endif">

                                    <div class="card mb-3 w-75 mx-auto d-flex align-items-center" style="max-width: 540px;">
                                        <div class="row g-0">
                                          <div class="col-md-4">
                                            <img src="{{ $cocktail->image_url }}" alt="{{ $cocktail->name }}" class="img-fluid rounded-start" alt="Image of {{ $cocktail['strDrink'] }}">
                                          </div>
                                          <div class="col-md-8">
                                            <div class="card-body">

                                              <h5 class="card-title">{{ $cocktail->name }}</h5>
                                              <p class="card-text">{{ $cocktail->instructions }}</p>
                                              <p class="card-text"><small class="text-body-secondary">{{ $cocktail->category}}</small></p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            @endforeach



            </div>
            <!-- Controles del carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#cocktailCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cocktailCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <form action="{{ route('cocktails.index') }}" style="display: flex; justify-content:center;">
            
            <button type="submit" class="btn btn-primary mt-3">Agregar Cócteles</button>
        </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection


