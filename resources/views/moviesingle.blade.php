    @extends('layouts.app')

    @section('content')
        <!-- END | Header -->



        <div class="page-single movie-single movie_single">
            <div class="container">
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif
                <div class="row ipad-width2">
                    <div class="col-md-4 col-sm-12 col-xs-12">

                        <div class="movie-img sticky-sb">

                            <img style="height: 400px;
                                                                                    width: 330px;" src="{{ $ticket->Image }}"
                                alt="">
                            <div class="movie-btn">
                                <div class="btn-transform transform-vertical red">
                                    <div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Watch
                                            Trailer</a></div>
                                    <div><a href="https://www.youtube.com/embed/o-0hcF97wy0"
                                            class="item item-2 redbtn fancybox-media hvr-grow"><i
                                                class="ion-play"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="movie-single-ct main-content">
                            <h1 class="bd-hd">{{ $ticket->name }} <span>2015</span></h1>
                            <div class="social-btn">
                                <a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
                                <div class="hover-bnt">
                                    <a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
                                    <div class="hvr-item">
                                        <a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
                                        <a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
                                        <a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
                                        <a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="movie-rate">
                                <div class="rate">
                                    <i class="ion-android-star"></i>
                                    <p><span>8.1</span> /10<br>
                                        <span class="rv">56 Reviews</span>
                                    </p>
                                </div>
                                <div class="rate-star">
                                    <p>Rate This Movie: </p>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star"></i>
                                    <i class="ion-ios-star-outline"></i>
                                </div>
                            </div>


                            <div class="contact_join">

                                <form action="{{ url('movieAdd/' . $ticket->id) }}">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single_input">



                                                <div style="display: flex;">


                                                    <input required class="formBooking" name="name" type="text"
                                                        placeholder="Your Name">

                                                    <input required class="formBooking" name="phone" type="text"
                                                        placeholder="Phone no.">
                                                </div>






                                                <input value="{{ date_create()->format('Y-m-d') }}" name="date"
                                                    min={{ date_create()->format('Y-m-d') }} style="width: 345px"
                                                    class="formBooking" type="date" placeholder="Phone no.">
                                                <select name="time" style="width: 345px" class="formBooking">
                                                    <option value="09:00-11:00">09:00-11:00</option>
                                                    <option value="11:00-13:00">11:00-13:00</option>
                                                    <option value="14:00-16:00">14:00-16:00</option>
                                                    <option value="17:00-19:00">17:00-19:00</option>
                                                    <option value="20:00-22:00">20:00-22:00</option>

                                                </select>

                                                <input name="price" type="hidden" value="{{ $ticket->price }}">
                                            </div>
                                            <div style="margin-top: 2.5em">
                                                <script>
                                                    function err() {

                                                        alert('please login');
                                                    }
                                                </script>

                                                @if (!Auth::user())
                                                    <button onclick="err()" class=" item item-2 yellowbtn"> <i
                                                            class="ion-card"></i> Buy
                                                        ticket</button>

                                                @else

                                                    <button class=" item item-2 yellowbtn"> <i class="ion-card"></i> Buy
                                                        ticket</button>
                                                @endif



                                            </div>

                                </form>
                            </div>




                        </div>
                        <div style="display: block" class="movie-tabs">
                            <div class="tabs">
                                <ul class="tab-links tabs-mv">
                                    <li class="active"><a href="#overview">Overview</a></li>
                                    <li><a href="#reviews"> Reviews</a></li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
