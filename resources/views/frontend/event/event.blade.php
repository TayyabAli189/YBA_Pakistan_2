

@includeIf('frontend.include.styles')
<!-- Navigation -->
@includeIf('frontend.include.header')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{asset('img/03.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Events</h1>

                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
{{--<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            @foreach($events as $event)
                <div class="gallery">
                    <div class="date_event">
                        {{date('d-M-Y', strtotime($event->created_at))}}
                    </div>
                    <a target="_blank" href="detail/{{$event['id']}}">

                        <img src="{{asset('images/'.$event->image)}}" alt="" width="600" height="400">
                    </a>
                    <div class="desc">{{ucwords($event->event_name)}}</div>

                </div>
            @endforeach
      </div>
    </div>
</div>--}}

{{--
<div class="card" style="width: 18rem;">
    @foreach($events as $event)
    <img class="card-img-top" src="{{asset('images/'.$event->image)}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    @endforeach
</div>
--}}


<div class="col-md-12">
    <div class="col-md-3">

    </div>
</div>


<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            @foreach($events as $event)
                <div class="gallery">
                    <div class="date_event">
                        {{date('d-M-Y', strtotime($event->created_at))}}
                    </div>
                    <a target="_blank" href="detail/{{$event['id']}}">
                    <img src="{{asset('images/'.$event->image)}}" alt="" width="600" height="400">
                        <div class="desc">{{ucwords($event->event_name)}}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>


<br>
<hr>

<!-- Footer -->
@includeIf('frontend.include.footer')
@includeIf('frontend.include.scripts')
