@extends('frontEnd.master') 

@section('title') 
Home | Designplus365
@endsection

@section('mainContent')

<main>
    <section id="mainBanner" class="main-banner">
        <div class="container">
            <h1 class="text-white font-size-50 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">Ready For Next</h1>
            <h1 class="primary-text mb-4 big-thing wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Big Thing?</h1>
            <h4 class="text-white text-justify font-size-28 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                We are data-driven Graphic designing agency <br>
                who knows how to elevate your online business <br>
                ranking and create beautiful images that works <br>
                best.
            </h4>
            <a href="#portfolio" data-smooth="#portfolio" class="btn btn-app app-color btn-view-our-work wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                View our work
            </a>
        </div>
    </section>

    <section id="companyOverview" class="company-overview">
        <div class="container">
            <div class="text-center">
                <p class="d-inline-block btn-app app-color years-of-brilliance mb-5 custom-shadow wow animate__animated animate__fadeInUp">
                    19 years of Brilliance
                </p>
                <h1 class="primary-text mb-5">
                    700+ Customers & 500+ <br>
                    Online Reviews Being The Best <br>
                    Graphic Design Company
                </h1>
                <h6 class="secondary-text font-weight-bold">
                    Designplus365 is one of the leading Graphic design company that provides borderless <br>
                    solutions across the globe. <br>
                    I will do with all efforts to present you the best, unique, and innovative amazon product <br>
                    images design, screen print color separation services and brandign tactics not just only in <br>
                    USA but many countries like UK, Australia, France, Italy, London, Belgium, Dubai & Africa. <br>
                    Our aim is to highlight your brand on each social media platform in every possible <br>
                    way and to keep engaging the audience with your brand.
                </h6>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <h3 class="primary-text text-shadow mb-5 wow animate__animated animate__fadeInUp">PORTFOLIO</h3>
            <div class="row justify-content-center mb-3">
                 @foreach($category_data as $category_value)
                <div class="col-12 col-sm-6 col-md-4">
                    <a href="#" onclick="getCategoryId(<?php echo $category_value->id; ?>)" data-toggle="modal" data-target="#portfolioModal">
                        <div class="card p-1 mb-3 mb-sm-3 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                            <img src="{{ asset($category_value->categoryImage) }}?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                 class="card-img-top">
                            <div class="card-body text-center secondary-text">
                                {{ $category_value->categoryDescription }}
                            </div>
                        </div>
                    </a>
                </div>
                  @endforeach 

            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4">
                    <a href="#portfolio" class="btn btn-block btn-portfolio btn-app white my-5 custom-shadow-2 wow animate__animated animate__fadeInUp">
                        Portfolio
                    </a>
                </div>
            </div>
            <h1 class="text-center primary-text font-achanbt-regular font-size-55 mb-3">
                Excellent Services & <br>
                Innovative Branding Strategies
            </h1>
            <h6 class="text-center text-white font-arrusbt font-weight-normal" style="font-size: 1.15rem;">
                Our incredible graphic design services help in creating the awareness of your brand also, elevate your
                sales <br>
                along with an excellent ROI. designplus365, being a worldwide graphic design provide you the strategies
                that <br>
                can definitely maintain to uplift the graph of your sales which mechanically impacts on your income too
                and give <br>
                you a good return on investment..
            </h6>
        </div>

        <!--Portfolio modal-->
        <div class="modal fade portfolio-modal pr-0" id="portfolioModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog m-0">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close p-1 bg-white rounded-circle" data-dismiss="modal"
                                aria-label="Close">
                            <i class="icofont-close-line"></i>
                        </button>
                        <div class="d-flex justify-content-center align-items-center h-100 w-100">
                            <div class="carousel-inner-wrapper">
                                <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div id="sliders_data"></div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true">
                                            <img src="{{ asset('frontEnd/img/slider-previous-icon.png')}}" width="80" height="60" alt="">
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true">
                                            <img src="{{ asset('frontEnd/img/slider-next-icon.png')}}" width="80" height="60" alt="">
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="quote" class="quote-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card p-3 bg-transparent mb-3 mb-sm-3 mb-md-0 wow animate__animated animate__flipInY" data-wow-delay="0.1s">
                        <img src="{{ asset('frontEnd/img/pen.png')}}" class="card-img-top d-block mx-auto mb-3">
                        <div class="card-body p-0 text-center secondary-text font-weight-bold">
                            <h4 class="card-title font-achanbt-regular">GRAPHIC DESIGN</h4>
                            Logo, Business card, Leaflet, <br>
                            Brochure, Money reciept, <br>
                            Banner, Google add banner.... <br>
                            <a href="{{ url('/quote')}}" class="font-italic">For Quote</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card p-3 bg-transparent mb-3 mb-sm-3 mb-md-0 wow animate__animated animate__flipInY" data-wow-delay="0.2s">
                        <img src="{{ asset('frontEnd/img/interface.png')}}" class="card-img-top d-block mx-auto mb-3">
                        <div class="card-body p-0 text-center secondary-text font-weight-bold">
                            <h4 class="card-title font-achanbt-regular">PHOTOSHOP EDITING</h4>
                            Creating Amazon product listing <br>
                            images, Lifestyle. Infographic, <br>
                            retouching, Background remove <br>
                            background white.... <br>
                            <a href="{{ url('/quote')}}" class="font-italic">For Quote</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card p-3 bg-transparent wow animate__animated animate__flipInY" data-wow-delay="0.3s">
                        <img src="{{ asset('frontEnd/img/paper.png')}}" class="card-img-top d-block mx-auto mb-3">
                        <div class="card-body p-0 text-center secondary-text font-weight-bold">
                            <h4 class="card-title font-achanbt-regular">ALL PRINT AND VECTOR DESIGN</h4>
                            Screen Print, Allover Print, <br>
                            Offset print, Pattern Making, <br>
                            vector design, and color <br>
                            separation for screen print....
                            <a href="{{ url('/quote')}}" class="font-italic">For Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4">
                    <a href="{{ url('/quote')}}" class="btn btn-block btn-quote btn-app app-color mt-5 custom-shadow wow animate__animated animate__fadeInUp">
                        QUOTE
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<script type="text/javascript">



function getCategoryId(categoryId){
		//$('#sliders_data').remove();
		$.ajax({
			url: "searchcategoryid?categoryId=" + categoryId ,
			method: 'GET',
			dataType: 'json',
			success: function(data) {
				console.log(data);
				 $('#sliders_data').html(data.output);
			}
		})
}
</script>
    

@endsection
