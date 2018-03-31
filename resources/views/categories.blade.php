@include('header')
@include('navbar')

<div class="container">

<div class="cat float-right">
<div class="jumbotron">
        <div class="container">
          <h5 class="text-primary">Add New Category</h5>
          <form action="{{ route('addcategory.store')}}" method="POST">
                {{ csrf_field() }} 
               
          <input name="category-add" type="text" class="form-control catinput" placeholder="Category Name"/>

          <input type="submit" value="Add" class="btn btn-primary btn-block"/>
        </form>
        </div>
      </div>
 </div>


<table class="table">
    <h1 class="text-primary">Categories</h1>

<thead class="thead-light">
    <tr>
        <th># </th>
        <th>Name </th>
        
        <th>action  </th>
    </tr>
</thead>
@foreach ($categories as $categories)
    <tr>
            <th>{{$categories->id}}</th>
            <td>{{$categories->name}}</td>
            <td>
        
            <span class="d-inline-block">
                <form action="{{action('categoriesController@destroy', $categories->id)}}" method="POST">
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