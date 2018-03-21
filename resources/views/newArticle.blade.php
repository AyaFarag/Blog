
<div class="art-container">
    
    {!! Form::open(['route'=>'add.store']) !!}

    {!! Form::text('title',old('title'),['placeholder'=>'title','class'=>'form-control','id'=>'first','name'=>'art-title'] ) !!}<br/>

    {!! Form::textarea('content',old('content'),['placeholder'=>'write your new art','class'=>'form-control','id'=>'sec', 'rows'=>'5','name'=>'art-content'] ) !!}<br/>

    {!! Form::file('file',['name'=>'art-file']) !!}<br/><br/>

    {!! Form::submit('add', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}


    <form action="{{route('add.store')}}" method="POST">
        {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleFormControlTextarea1"><b>Add New Article</b></label>

        <input type="text" name="art-title" class="form-control  " placeholder="Title"><br/>

        <textarea name="art-content" class="form-control " id="exampleFormControlTextarea1" rows="5" placeholder="What Is Your New Topic Today ? "></textarea>
        
        <input type="file" name="art-file" class="">
        
        <span><i class="fas fa-camera"></i></span>
         
        
    </div>
        <button type="submit" class="btn btn-primary ">Add</button>
    </form><br/>


@include('articleView')
</div>