
<div class="art-container">
    
    {!! Form::open(['route'=>'add.store', 'files' => true]) !!}
    
    {!! Form::label('headtitle', 'Add New Article',['class'=>'font-weight-bold']) !!}
    
    {!! Form::text('title',old('title'),['placeholder'=>'title','class'=>'form-control','id'=>'first','name'=>'art-title'] ) !!}<br/>

    {!! Form::textarea('content',old('content'),['placeholder'=>'write your new art','class'=>'form-control','id'=>'sec', 'rows'=>'5','name'=>'art-content'] ) !!}<br/>

    {!! Form::file('file',['name'=>'file']) !!}<br/><br/>
    <span><i class="fas fa-camera"></i></span>
    {!! Form::submit('add', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}<br/><br/>
    




@include('articleView')
</div>