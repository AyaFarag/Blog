@foreach ($articles as $art)
    
<div class="card" >
  
  
  
  <div class="card-body bg-light">
    <div class="float-right">
        <div class="d-inline-block">
            <form action="{{action('articlesController@destroy', $art->id_articles)}}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE" />
              <button type="submit" class="bg-white border border-white"><span><i class="fas fa-trash text-danger"></i></span></button>
          </form>
            </div>
        
        <div class="d-inline-block">
          <form action="{{action('articlepageController@edit', $art->id_articles)}}" method="GET">
              {{ csrf_field() }}
            <button type="submit" class="bg-white border border-white"><span><i class="fas fa-edit text-primary"></i></span></button>
          </form>
        </div>
    </div>

    <h4 class="card-title"><a href="{{route('articlepage.show' ,$art->id_articles)}}">{{$art->title}}</a></h4>
      
    <p class="card-text lead">{{ substr($art->content, 0, 100) }}{{ strlen($art->content) > 40 ? "..." : ""}}</p>
    <a href="{{route('articlepage.show' ,$art->id_articles)}}" class="">Read more</a><br/>
    {{--  tags   --}}
    @foreach ($art->tags as $tag)
    <span class="badge badge-dark">{{$tag->name}}</span>
    @endforeach
    <br/><br/>
    <img class="card-img-top" src="{{ asset('uploads/'. $art->imgpath) }}" alt="Card image cap"/><br/><br/>

    <span class="art-span">Auther</span>
    <span class="art-span">{{ date('M j, Y', strtotime($art->created_at)) }}</span>
    <span class="art-span">20 min</span>
    <br/> 
    <span> Posted In : <a href="#">{{$art->categories['name']}} </a></span>
    
    


  </div>
</div>
<br/><br/>



@endforeach

