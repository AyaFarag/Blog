@include('header')
@include('navbar')

 {{--  article  --}}
 <div class="container">
   {{--  @foreach ($articles as $articles)  --}}
   <div class="card mb-3">
        {{--  <h5 class="card-title">{{$articles->title}}</h5>  --}}
    {{--  <img class="card-img-top" src="{{ asset('uploads/'.  ) }}" alt="Card image cap">  --}}
    <div class="card-body">
            <div class="card-body">

              
                    <h4 class="card-title"><?php  print_r($x) ?></h4>
                      
                    <p class="card-text"></p>
                    <a href="#" class="">Read more</a><br/><br/>
                
                    <span class="art-span">Auther</span>
                    <span class="art-span"></span>
                    <span class="art-span">20 min</span>
                    <br/> 
                    <p> Posted In : <a href="#"> </a></p>
    </div>
  </div>
  
   

    


{{--  reviews  --}}
<div class="reviews">
    <h5> Reviews :</h5>
</div>






 {{--  comments  --}}
<div class="comment">
<form action="" method="POST">
    <label class="h5"> Comment :</label>
    <textarea name="comment" class="form-control" rows="2" placeholder="Add Your Comment Here ..."></textarea>
    <input type="submit" value="Comment" class="btn btn-primary form-control"/> 
</form>
<br/>

<div class="card">
    <div class="card-header">
        <img src="..." alt="img user"/>
        <h5>User Name</h5> 
    </div>
    <div class="card-body">
        
        <p class="card-text">With supporting text below as a natural lead-in to additional 
          content With supporting text below as a natural lead-in to additional content. 
          supporting text below as a natural lead-in to additional 
          content With supporting text below as a natural lead-in to additional content</p>
      
    </div>
</div> 

</div>
</div>
@include('footer')