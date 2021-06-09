
@extends('layouts.app');

@section('content');
    

<div class="container my-4">

  <p class="font-weight-bold">Bootstrap image grid is a simple construction which allows you to create a responsive
    layout for your images.</p>

  <p><strong>Detailed documentation and more examples of Bootstrap grid you can find in our <a href="https://mdbootstrap.com/docs/standard/layout/grid/"
        target="_blank">Bootstrap Grid Usage Docs</a>

  <p><Strong>Note: </Strong>In the example below animations and shadows are only an additional option. They are added via JavaScript and they are <strong>not</strong> necessary to make a grid working.</p>

<hr class="mt-5">

<p>Built with <a target="_blank" href="https://mdbootstrap.com/docs/standard/">Material Design for Bootstrap</a> - free and powerful Bootstrap UI KIT</p>

<a class="btn btn-primary me-2" href="https://mdbootstrap.com/docs/standard/getting-started/installation/" target="_blank" role="button">Download MDB UI KIT <i class="fas fa-download"></i></a>
<a class="btn btn-danger me-2" target="_blank" href="https://mdbootstrap.com/docs/standard/" role="button">Learn more</a>
<a class="btn btn-success me-2" target="_blank" href="https://mdbootstrap.com/docs/standard/getting-started/" role="button">Tutorials</a>
<a class="btn btn-dark me-2" target="_blank" href="https://github.com/mdbootstrap/mdb-ui-kit" role="button">GitHub <i class="fab fa-github ms-2"></i></a>

<hr class="mb-5"/>
  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

      <img src="http://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(58).jpg" class="img-fluid mb-4" alt="">

      <img src="http://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(66).jpg" class="img-fluid mb-4" alt=""
        data-wow-delay="0.3s">

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-4">

      <img src="http://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(74).jpg" class="img-fluid mb-4" alt=""
        data-wow-delay="0.1s">

      <img src="http://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(64).jpg" class="img-fluid mb-4" alt=""
        data-wow-delay="0.4s">

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-4">

      <img src="http://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(77).jpg" class="img-fluid mb-4" alt=""
        data-wow-delay="0.2s">

      <img src="http://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(67).jpg" class="img-fluid mb-4" alt=""
        data-wow-delay="0.5s">

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</div>
@endsection