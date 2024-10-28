@extends("layouts.app")

@section("page-title", "actors")

@section("main-content")
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="fw-bold text-center py-4">
                    actors
                </h1>
            </div>
            @forelse ( $actors as $actor)
                <div class="col-3 me-3 mb-3">
                    <article class="card">
                        <img src="{{ $actor->picture_url }}" alt="" class="card-img-top">
                        <section class="card-body">
                            <h2 class="card-title mb-2">
                                {{ $actor->id }} - {{ $actor->first_name }} {{ $actor->middle_name }} {{ $actor->last_name }}
                            </h2>
                            <h5 class="card-subtitle  mb-2">
                                {{  $actor->date_of_birth;  }} in {{  $actor->nationality }}
                            </h5>
                            <p class="card-text">
                                {{  $actor->bio }}
                            </p>
                        </section>
                    </article>
                </div>
            @empty
                <div class="col-12">
                    <h2 class="text-center">
                        No actors are available at the moment...
                    </h2>
                </div>
            @endforelse
        </div>
    </main>
@endsection
