@includeIf('frontend.include.styles')
<!-- Navigation -->
@includeIf('frontend.include.header')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{asset('img/001.jpg')}}')">
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

    <div>
        <div class="gallery">

                <img src="{{asset('images/'.$event->image)}}" alt="" width="600" height="400">
        </div>
    </div>

    <div class="event_name">
        <div class="">{{ucwords($event->event_name)}}</div>
    </div>
        <div class="_date">
            {{date('d-M-Y', strtotime($event->created_at))}}
        </div>
    <br>
    <div class="detail_discrption">{{ucfirst($event->discription)}} </div>

    <br>

<!-- Footer -->
@includeIf('frontend.include.footer')
@includeIf('frontend.include.scripts')
