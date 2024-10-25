@extends("layouts.app")

@section("page-title", "Movies")

@section("main-content")
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="fw-bold text-center py-4">
                    Movies
                </h1>
            </div>
            @forelse ( $movies as $movie)
                <div class="col-3 me-3 mb-3">
                    <article class="card">
                        <section class="card-body">
                            <h2 class="card-title mb-2">
                                {{ $movie->id }} - {{ $movie->title }}
                            </h2>
                            <h5 class="card-subtitle  mb-2">
                                {{  $movie->getFormattedDate()->toFormattedDayDateString();  }}
                            </h5>
                            <h6 class="card-subtitle  mb-2">
                                {{ $movie->nationality }}
                            </h6>
                            <p class="card-text">
                                Original title: {{  $movie->original_title }}
                                Average vote: {{  $movie->vote }}
                            </p>
                        </section>
                    </article>
                </div>
            @empty
                <div class="col-12">
                    <h2 class="text-center">
                        No movies are available at the moment...
                    </h2>
                </div>
            @endforelse
        </div>
    </main>
@endsection
