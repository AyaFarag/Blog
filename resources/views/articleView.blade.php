@foreach ($articles as $art)
    
<div class="card" >
  
  <img class="card-img-top" src="{{ asset('uploads/'. $art->imgpath) }}" alt="Card image cap">
  
  <div class="card-body">
    <h4 class="card-title"><a href="{{route('articlepage.show' ,$art->id_articles)}}">{{$art->title}}</a></h4>
      
    <p class="card-text">{{$art->content}}</p>
    <a href="#" class="">Read more</a><br/><br/>

    <span class="art-span">Auther</span>
    <span class="art-span">{{$art->created_at}}</span>
    <span class="art-span">20 min</span>
    <br/> 
    <p> Posted In : <a href="#">{{$art->categories['name']}} </a></p>
    
    

    <div class="d-inline-block">
    <form action="{{action('articlesController@destroy', $art->id_articles)}}" method="POST">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="bg-white border border-white"><span><i class="fas fa-trash text-danger"></i></span></button>
  </form>
    </div>

<div class="d-inline-block">
  <form action="{{action('articlesController@edit', $art->id_articles)}}" method="GET">
      {{ csrf_field() }}
    <button type="submit" class="bg-white border border-white"><span><i class="fas fa-edit text-primary"></i></span></button>
  </form>
</div>
  </div>
</div>
<br/><br/>



@endforeach

