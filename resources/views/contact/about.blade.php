@extends('contact.layouts.contact')

@section('content')
<aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
               <li style="background-image: url(images/sheraton.jpg);">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                               <div class="slider-text-inner text-center">
                                   <h2>Hotel Recommender</h2>
                                   <h1>About us</h1>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
              </ul>
          </div>
    </aside>

    <div id="colorlib-about">
        <div class="container">
            <div class="row">
                <div class="about-flex">
                    <div class="col-one-forth aside-stretch animate-box">
                        <div class="row">
                            <div class="col-md-12 about">
                                <h2>About</h2>

                                <ul>
                                    <li><a href="#">About Us</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-three-forth animate-box">
                        <h2>About Us</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>

                                <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                                <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <h2>Sign Up for a Newsletter</h2>
                    <p>Sign up for our mailing list to get latest updates and offers.</p>
                    <form class="form-inline qbstp-header-subscribe">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-0">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
