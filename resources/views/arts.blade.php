@include('header')
@include('navbar')
<div class="container">
<div class="jumbotron">
        <h1 class="display-4 font-weight-bold">Welcome to My Blag!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
      </div>



      
      @include('articleView')
    </div>
@include('footer')