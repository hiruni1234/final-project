@extends('layouts.main')

@section('pagename', 'Contact Us')

@section('content')

    <!-- ##### Breadcumb Area Start ##### -->

    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Google Maps ##### -->
    
        <div class="mapouter"><div class="gmap_canvas"><iframe width="1000" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=nsbm%20green%20university&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{text-align:right;height:700px;width:1000px;}.gmap_canvas {overflow:hidden;background:none!important;height:700px;width:1000px;}</style></div>
   
<div class="map-area wow fadeInUp" data-wow-delay="300ms">
        <div id="googleMap"></div>
    </div>
    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-12 col-lg-5">
                                <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                    <div class="section-heading text-left">
                                        <span>The Best</span>
                                        <h3>Contact Us</h3>
                                        <p class="mt-30">NIE is one of best university in Sri Lanka that guid you for the success . You can contact us in following numbers and if you want to meet us come directly to our head office.NIE Admissions Office provides general advice to prospective undergraduate applicants and their advisers about applying to and studying at NIE</p>
                                    </div>

                                    <!-- Contact Social Info -->
                                    <div class="contact-social-info d-flex mb-30">
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <p>National Institute of Education Admissions Office,<br> Meatland Road,
                                            32 High Level RoadColombo 5,
                                            Sri Lanka</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-telephone-1"></i>
                                        </div>
                                        <p>Main: 094 011 2657220 <br> Office: 094 011 2657221</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-contract"></i>
                                        </div>
                                        <p>office@yourbusiness.com</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Form Area -->
                            <div class="col-12 col-lg-7">
                                @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                    <form action="{{url('sendemail/send')}}" method="post">
                                         {{ csrf_field() }}
                                        <div class="form-group">
                        <label for="sender">Name:</label>
                        <input type="text" class="form-control" id="email" name="name">
                    </div>
                                        <div class="form-group">
                        <label for="sender">E-mail:</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        <button class="btn academy-btn mt-30" type="submit">Contact Us</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->


@endsection
