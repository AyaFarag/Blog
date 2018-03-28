@include('header')
@include('navbar')

<div class="container">

<div class="cat float-right">
<div class="jumbotron">
        <div class="container">
          <h5 class="">Add New Category</h5>
          <form action="{{ route('addcategory.store')}}" method="POST">
                {{ csrf_field() }} 
          <label> Name:</label>      
          <input name="category-add" type="text" class="form-control catinput"/>
          <label> Describtion:</label>
          <textarea name="category-desc" rows="2" class="form-control catinput"></textarea>
          <input type="submit" value="Add" class="btn btn-success btn-block"/>
        </form>
        </div>
      </div>
 </div>


<table class="table">
    <h1>Categories</h1>

<thead class="thead-light">
    <tr>
        <th># </th>
        <th>Name </th>
        <th>Describtion  </th>
        <th>action  </th>
    </tr>
</thead>
@foreach ($categories as $categories)
    <tr>
            <th>{{$categories->id}}</th>
            <td>{{$categories->name}}</td>
            <td>{{$categories->describtion}}</td>
            <td> <span><a class="text-danger" href="#">Delete</a></span> 
            <span><a href="#">Edit</a></span> </td>
    </tr>

@endforeach

</table>

</div>


 



@include('footer')