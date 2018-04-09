@include('header')
@include('navbar')



<div class="container">

    <div class="cat float-right">
    <div class="jumbotron">
            <div class="container">
              <h5 class="text-primary">Add New Tag</h5>
              <form action="" method="POST">
                    {{ csrf_field() }} 
                   
              <input name="add-tag" type="text" class="form-control catinput" placeholder="Tag Name"/>
    
              <input type="submit" value="Add" class="btn btn-primary btn-block"/>
            </form>
            </div>
          </div>
     </div>
    
    
    <table class="table">
        <h1 class="text-primary">Tags</h1>
    
    <thead class="thead-light">
        <tr>
            <th>#ID </th>
            <th>Name </th>
            <th>action  </th>
        </tr>
    </thead>
    @foreach ($tags as $tag)
        <tr>
                <th>{{$tag->id}}</th>
                <td>{{$tag->name}}</td>
                <td>
            
                <span class="d-inline-block">
                    <form action="{{action('categoriesController@destroy', $tag->id)}}" method="POST">
                                {{ csrf_field() }}
                       <input type="hidden" name="_method" value="DELETE" />
                       <span><button type="submit" class="bg-white border border-white"><i class="fas fa-trash text-danger ">  </i></button></span>
                    </form>
               </span> 
                <span>
                        <button type="submit" class="bg-white border border-white"><span><i class="fas fa-edit text-primary"></i></span></button>    
                </span> 
            </td>
        </tr>
    
    @endforeach
    
    </table>
    
    </div>




 



@include('footer')