@extends('layouts.master')

@section('content')
    <style>

        #flash-message {
            position: absolute;
            right: 10px;
            top: 60px;
        }
    </style>

    @if($flash = session('message'))
    <div id="flash-message" class="alert alert-success" role="alert">
        {{ $flash }}
    </div>
    @endif

    <div class="parallax-contact" style="height: 50vh; background: transparent;">
        <div class="row featurette">
            <div class="container">
                <div class="col-md-12">
               </div>
            </div>
        </div>
    </div>


        <h1 class="featurette-heading text-center">Contact Us</h1><br>



        <div class="container">
            <div class="row">
                <div  class="col-lg-12 ">
                  <form method="POST" action="/contact">


                    {{csrf_field()}}

                    <input type="hidden" name="newsletter_id" value="3">

                         <div class="row">
                                <div class="col-lg-6">

                                    <label for="first"></label>

                                    <input type="text" class="form-control" id="first" name="first" placeholder="First*" required>

                                </div>


                                <div class="col-6 ">

                                    <label for="last"></label>

                                    <input type="text" class="form-control" id="last" name="last" placeholder="Last*" required>

                                </div>

                         </div>

                      <div class=" row">
                          <div class="col-12 pt-1">

                            <label for="email"></label>

                            <input type="email" class="form-control" id="email" name="email" placeholder="Email*"required>
                        </div>
                      </div>

                        <div class="row">
                            <div class="col-12 pt-1">

                                <label for="subject"></label>

                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*" required>

                            </div>

                        </div>


                      <div class="row">
                        <div class="col-12 pt-1">

                            <label for="message"></label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message*" required></textarea>
                        </div>

                      </div>


                    <div class="pt-4 text-center ">
                        <button type="submit" class="btn btn-lg btn-outline-secondary" >Submit</button>
                    </div>
                    @include('layouts.errors')



              </form>

                </div>
            </div>
        </div>

    <hr>

    <hr>


@endsection

