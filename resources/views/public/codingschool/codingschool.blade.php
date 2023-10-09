@extends('layouts.app')
@section('title')
    Coding School
@endsection
@section('main')
    <section>
        <div class="container" id='colorBlock'></div>
        <div class="container-fluid pt-5 bg-dark  ps-0 pe-5 me-0 " id="header">
            <div class="card ">
                <div class="card-img bg-dark">
                    <img src="{{ asset('assets/img/landing-page.webp') }}"class="float-end"
                        style="min-width: 51em; height:65vh" alt="...">
                </div>
                <div class="card-img-overlay  text-primary">
                    <div class="container float-start w-50">
                        <p class="breadcrumb text-primary">Orange Digital Centers</p>
                        <h1 class="text-primary">Orange Digital Centers</h1>
                        <h2>Inspired By The Group’s “Lead the Future” Strategic Plan </h2>
                        <p class="card-text text-white">Orange Jordan’s corporate social responsibility
                            transforms
                            lives and local communities through digital transformation</p>
                        <a href="{{ route('codingschool.create') }}" class="btn btn-primary">Register Now</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container px-5 center">
            <h2>News and Activities</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi sunt perferendis excepturi
                veniam
                modi aut, dignissimos sapiente non, velit quos dolore distinctio veritatis ullam iure et hic!
                Ad, ut
                accusamus.</p>
        </div>
        @if (isset($activities) && count($activities) > 0)
            <div class="container slide-activity px-4">
                @foreach ($activities as $activity)
                    <div class="card " style=" width: 15em;">
                        @php
                        $imageArray = json_decode($activity->image);
                    @endphp
                        @if (is_array( $imageArray) && count( $imageArray) > 1)
                            <div id="activity{{ $activity->id }}" class="carousel slide card-img" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ( $imageArray as $index => $imagePath)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                            <img src="{{ URL::asset("storage/image/" . $imagePath) }}" class="d-block"
                                                style="height: 50vh;" alt="{{ $activity->activity_name }}">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#activity{{ $activity->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#activity{{ $activity->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </button>
                            </div>
                        @else
                            @php
                                $imageArray = json_decode($activity->image);
                            @endphp
                            <img src="{{URL::asset("storage/image/".$imageArray)}}"  class="card-img" style="height: 50vh; "
                                alt="{{ $activity->activity_name }}">
                        @endif
                        <div class="card-img-overlay pt-5 pb-0 text-white">
                            <h1 class="py-3">{{ $activity->activity_name }} </h1>
                                <div class="py-3">
                                    <i class="fa-solid fa-location-dot"></i>
                                    {{ $activity->location }}
                                </div>
                            <p class="text-truncate"style="max-width: 150px;">{{ $activity->description }}
                            </p>
                            <a href="{{ route('show', $activity) }}" class="btn btn-primary mt-4">See
                                More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
    <section class="impact">
        <div class="container text-white p-5">
            <div class="our-impact-header center mb-5">
                <div class="sub-title">On the Society</div>
                <h1>Our Impact</h1>
            </div>
            <div class="slider-impact pt-5">
                <div class="d-flex ">
                    <div class="container">
                        <div class="container text-primary number p-3">336</div>
                        <div class="container px-3 ">
                            <div class="impact-title pb-1">Title Title</div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                    <div class="container border-start">
                        <div class="container text-primary number p-3">336</div>
                        <div class="container px-3 ">
                            <div class="impact-title pb-1">Title Title</div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                    <div class="container border-start">
                        <div class="container text-primary number p-3">336</div>
                        <div class="container px-3 ">
                            <div class="impact-title pb-1">Title Title</div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                    <div class="container border-start">
                        <div class="container text-primary number p-3">336</div>
                        <div class="container px-3 ">
                            <div class="impact-title pb-1">Title Title</div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                </div>
                <div class=" d-flex">
                    <div class="container">
                        <div class="container text-primary number p-3">336</div>
                        <div class="container px-3 ">
                            <div class="impact-title pb-1">Title Title</div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                    <div class="container border-start">
                        <div class="container text-primary number p-3">336</div>
                        <div class="container px-3 ">
                            <div class="impact-title pb-1">Title Title</div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                    <div class="container border-start">
                        <div class="container text-primary number p-3">336</div>
                        <div class="container px-3 ">
                            <div class="impact-title pb-1">Title Title</div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                    <div class="container border-start">
                        <div class="container text-primary number p-3">336</div>
                        <div class="container px-3 ">
                            <div class="impact-title pb-1">Title Title</div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                </div>
                <div class=" d-flex">
                    <div class="container">
                        <div class="container text-primary number p-3">336</div>
                        <div class="container px-3 ">
                            <div class="impact-title pb-1">Title Title</div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                    <div class="container border-start">
                        <div class="container text-primary number p-3">336</div>
                        <div class="container px-3 ">
                            <div class="impact-title pb-1">Title Title</div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                    <div class="container border-start">
                        <div class="container text-primary number p-3">336</div>
                        <div class="container px-3 ">
                            <div class="impact-title pb-1">Title Title</div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                    <div class="container border-start">
                        <div class="container text-primary number p-3">336</div>
                        <div class="container px-3 ">
                            <div class="impact-title pb-1">Title Title</div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slide-activity').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                dots: true,
                speed: 300,
                infinite: true,
                autoplaySpeed: 5000,
                autoplay: true,
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
            $('.slider-impact').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                speed: 300,
                infinite: true,
                autoplaySpeed: 5000,
                autoplay: true,
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
        });
    </script>
@endsection
