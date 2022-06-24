@extends('layout.main')

@section('content')
<main class="container col-xxl-8 px-2 py-2 d-flex justify-content-center align-items-center">

        <div class="row flex-lg-row-reverse justify-content-between align-items-center g-5 py-2">

            <div class="col-10 col-sm-8 col-lg-6">
                <img src="https://observer.com/wp-content/uploads/sites/2/2021/05/summer-movies-2021-new-e1620919489437.jpg?quality=80" class="d-block mx-lg-auto img-fluid" alt="Movies image" width="700" height="500" loading="lazy">
            </div>

            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Scopri il nostro archivio di Film </h1>

                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita reprehenderit, ratione temporibus vero unde vitae quae quasi. Autem deserunt voluptas atque incidunt vel sint. Eligendi adipisci sapiente odio saepe, quasi mollitia ea officiis vel quo necessitatibus corrupti velit molestiae. Repellat dolores impedit aut saepe expedita laboriosam eveniet aliquid dolor officia.</p>

                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{ Route('movies')}}" class="btn btn_custom btn-primary btn-lg px-4 me-md-2">Scopri</a>
                </div>

            </div>
        </div>

</main>
@endsection
