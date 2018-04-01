@include('header')
@include('navbar')

 {{--  article  --}}
 <div class="container">
   
     {{--  article info   --}}
    
 <div class="row">
    <div class="col col-8">
       <div> 
         <div class="card mb-3">
        {{--  <h4 class="card-title card-body"> {{ $articles->title }}</h4>  --}}
        {{--  <h5 class="card-title">{{$articles->title}}</h5>  --}}
   
         
            <div class="card-body">
                    <h4 class="card-title"> {{ $articles->title }}</h4>
                      <hr/>
                    <p class="card-text lead"> {{ $articles->content }} </p>
                     <img class="card-img-top artimg" src="{{ asset('uploads/'. $articles->imgpath ) }}" alt="Card image cap "/>
                    <br/><br/>
            </div>
         </div>
    </div>
</div>
          
       

    {{--  article part  --}}

         
                <div class="col col-4  ">
                       
                           <div>
                    <div class="d-inline-block cardstyle">
                   
                           <div class="card bg-light mb-3" style="">
                                   
                                   <div class="card-body">

                                        <h6 class="">Auther :</h6>
                                        <span class="">Auther</span><br/><br/>
              
                                        <h6 class="">Post Date :</h6>
                                        <span class=""> {{ date('M j, Y', strtotime($articles->created_at)) }} </span><br/><br/>
                                        
                                        <h6 class="">Category :</h6>
                                        <span class=""> Posted In : <a href="#"> {{$articles->categories['name']}} </a></span><br/><br/>

                                        <h6 class=""> Updatet at :</h6>
                                        <span class=""> {{ date('M j, Y', strtotime($articles->updated_at)) }} </span><br/><br/>
                                  
                                     <form action="{{action('articlepageController@edit', $articles->id_articles)}}" method="GET" class="">
                                           {{ csrf_field() }}
                                         <button type="submit" class=" btn btn-primary btn-block">Edit</button>
                                     </form>
                                    
           
                                   </div>
                                 </div>
                                </div>
                           </div>
                       
                </div>
                
           
                 
            </div>
        
              {{--  end of edit btn  --}}


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
</div>
@include('footer')