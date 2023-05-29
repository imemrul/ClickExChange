@extends('layouts.mainlayout')

@section('content')
    @foreach ($advertises as $advertise)
        <section class="jumbotron text-center">
            <div class="container">
            <h1 class="jumbotron-heading">{{$advertise->title}}</h1>
            <img src="storage/{{$advertise->image}}" alt="" height="500" class="img-fluid">
            <p class="lead text-muted">{{$advertise->body}}</p>
            <p>
            <form id="clickForm"><button class="btn btn-primary" type="submit">Click</button></form>
            </p>
            </div>
        </section>
        <script>
            document.getElementById('clickForm').addEventListener('submit', function(event) {
                event.preventDefault();

                fetch('/api/click/distributor', {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    window.location.replace(data.url);
                    // alert('Click saved successfully!');
                })
                .catch(error => {
                    console.error(error);
                    alert('An error occurred while saving the click.');
                });
            });
        </script>
    @endforeach
@endsection