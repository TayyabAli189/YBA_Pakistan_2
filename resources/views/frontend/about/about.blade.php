

@includeIf('frontend.include.styles')
<!-- Navigation -->
@includeIf('frontend.include.header')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{asset('img/02.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>About Us</h1>
                    <span class="subheading">" <u>Youth Bar Alliance</u> "</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
           <p>" Youth Bar Alliance of Pakistan (YBA-Pakistan) is aimed at to unite young lawyers under one umbrella and to provide them an organized platform for their representation instead of so-called ineffective & immature forums etc...<br>
               For further info read the manifesto of YBA-Pakistan. We invite to all young lawyers, come forward & join the YBA from all corners of Pakistan to secure your future and the future of the whole fraternity & to secure the honor & prestige of the fraternity. Regards. Team YBA-Pakistan. "</p>
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
@includeIf('frontend.include.footer')
@includeIf('frontend.include.scripts')
