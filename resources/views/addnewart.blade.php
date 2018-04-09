@include('header')
@include('navbar')

<div class="artform" >
{!! Form::open(['route'=>'add.store', 'files' => true]) !!}
                        
{!! Form::label('headtitle', 'Add New Article',['class'=>'headfont text-primary ']) !!}

{!! Form::text('title',old('title'),['placeholder'=>'title','class'=>'form-control','id'=>'first','name'=>'art-title'] ) !!}<br/>

{!! Form::textarea('content',old('content'),['placeholder'=>'write your new article ...','class'=>'form-control','id'=>'sec', 'rows'=>'5','name'=>'art-content'] ) !!}<br/>




{{--  {!! Form::label('category_id', 'Category :',['name'=>'category-option','class'=>'mr-sm-2','for'=>'inlineFormCustomSelect']) !!}  --}}


  <select name="category_id" class="form-control"> 
  
  <option selected> Choose Category </option>

    @foreach ($category as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
  
</select>
<br/>

<label>Tags :</label>
<div class="form-control">
@foreach ($tags as $tag)
<input type="checkbox" value="{{$tag->id}}" class="" name="checktag[]" id="checkoption"/> 
<label for="checkoption"> {{$tag->name}} </label>
@endforeach  
</div>                           


<br/>
{!! Form::file('file',['name'=>'file']) !!}<br/><br/>

{!! Form::submit('Add new article', ['class'=>'btn btn-success btn-block']) !!}

{!! Form::close() !!}<br/><br/>

</div>

@include('footer')