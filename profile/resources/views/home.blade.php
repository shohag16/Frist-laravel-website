@extends('layout.app')
@section('title','HomePage')





@section('content')



<div class="container-fluid  parallax mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 text-center top ">
            <h2 class="text-primary">Software Engineer</h2>
            <h3 class="text-white">Mobile & Web</h3>
            <button class="btn btn-primary">Show More</button>

        </div>
    </div>
</div>




<div class="container mt-5 text-center">
    <h2>My Services</h2><hr>
    <div class="row ">
        <div class="col-md-4  ">
        <div class="card" style="width:100%;">
                     <img src="{{asset('img/res.png')}}" class="card-img-top" alt="..img.">
                    <div class="card-body">
                        <h5 class="card-title">Service Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">SEE</a>

                    </div>
                </div>
        </div>
        <div class="col-md-4  ">
        <div class="card" style="width:100%;">
                     <img src="{{asset('img/amar.png')}}" class="card-img-top" alt="..img.">
                    <div class="card-body">
                        <h5 class="card-title">Service Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">SEE</a>
                    </div>
                </div>
        </div>
        <div class="col-md-4  ">
        <div class="card" style="width:100%;">
                     <img src="{{asset('img/font.png')}}" class="card-img-top" alt="..img.">
                    <div class="card-body">
                        <h5 class="card-title">Service Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">SEE</a>
                    </div>
                </div>
        </div>
    </div>
</div>



<div class="container mt-5 text-center">
    <h2>Recent Project</h2><hr>
    <div class="row ">
        <div class="col-md-4  ">
        <div class="card" style="width:100%;">
                     <img src="{{asset('img/8.png')}}" class="card-img-top" alt="..img.">
                    <div class="card-body">
                        <h5 class="card-title">Project Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
        </div>
        <div class="col-md-4  ">
        <div class="card" style="width:100%;">
                     <img src="{{asset('img/9.png')}}" class="card-img-top" alt="..img.">
                    <div class="card-body">
                        <h5 class="card-title">Project Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
        </div>
        <div class="col-md-4  ">
        <div class="card" style="width:100%;">
                     <img src="{{asset('img/7.png')}}" class="card-img-top" alt="..img.">
                    <div class="card-body">
                        <h5 class="card-title">Project Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">View </a>
                    </div>
                </div>
        </div>
    </div>
</div>









<div class="container  mb-5 mt-5">

    <div class="row">

         <div class="col-md-6 p-2">
         <h2 class="text-center">Contact With Me</h2><hr>


         <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile No</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input type="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Your Message</label>
    <input type="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <button type="submit" class="btn btn-block btn-primary">Send Now</button>
</form>
        </div>


        <div class="col-md-6 p-2">
        <h2 class="text-center">Follow On google Map</h2><hr>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.2974482020186!2d91.17642761475402!3d23.449732884738356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37547f220187d21d%3A0xe78e829651717cdb!2sTomsom%20Bridge%2C%20Comilla!5e0!3m2!1sen!2sbd!4v1588089452753!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>
    </div>
</div>













@endsection
