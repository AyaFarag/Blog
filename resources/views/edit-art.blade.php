@include('header')
@include('navbar')
{{--  ['route'=>'editarticle.update', $articles->id_articles],  --}}
<div class="container">
    <div class="row">
        {{--  edit article  --}}
        <div class="col col-8">
            <div>
                    {!! Form::model($articles ,['route'=> ['editarticle.update', $articles->id_articles], 'method'=>'PUT']) !!}
                        
                    {!! Form::label('headtitle', 'Edit Article',['class'=>'font-weight-bold text-primary h5']) !!}<br/>
            
                    {!! Form::label('title', 'Title:') !!}
                    
                    {!! Form::text('title',old('title'),['class'=>'form-control','id'=>'first','name'=>'edit-title'] ) !!}<br/>
            
                    {!! Form::label('content', 'Content :') !!}
            
                    {!! Form::textarea('content',old('content'),['class'=>'form-control','id'=>'sec', 'rows'=>'5','name'=>'edit-content'] ) !!}
            
                  
                    
                   <br/><br/>
            </div>

        </div>





        <div class="col col-4">
                <div>
                        <div class="d-inline-block cardstyle">
                       
                               <div class="card bg-light mb-3" style="">
                                       
                                       <div class="card-body">
    
                                         <h6 class="">Auther :</h6>
                                         <span class="">Auther</span><br/><br/>
               
                                         <h6 class=""> Date :</h6>
                                         <span class=""> {{ date('M j, Y', strtotime($articles->created_at)) }} </span><br/><br/>
                                         
                                         <h6 class="">Category :</h6>
                                         <p class=""> Posted In : <a href="#"> {{$articles->categories['name']}} </a></p><br/>


                                         {!! Form::submit('Save', ['class'=>'btn btn-success btn-block ']) !!}
                                         {!! Form::close() !!}

                                         <div class="cancelbtn">
                                         {!! Form::model($articles ,['route'=> ['articlepage.show', $articles->id_articles], 'method'=>'GET']) !!}
                                         {!! Form::submit('Cancel', ['class'=>'btn btn-danger btn-block']) !!}
                                         {!! Form::close() !!}
                                         </div>
                                         {{--  <form action="{{action('articlepageController@edit', $articles->id_articles)}}" method="GET" class="">
                                               {{ csrf_field() }}
                                             <button type="submit" class=" btn btn-success btn-block">Edit</button>
                                         </form>  --}}
                                        
               
                                       </div>
                                     </div>
                                    </div>
                               </div>
        </div>
    </div> 
    {{--  end of row  --}}
       
        




        {{--  <form action="{{action('editarticle.update')}}" method="PUT">
            {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlTextarea1"><b>Add New Article</b></label>
    
            <input type="text" name="art-title" class="form-control  " placeholder="Title"><br/>
    
            <textarea name="art-content" class="form-control " id="exampleFormControlTextarea1" rows="5" placeholder="What Is Your New Topic Today ? "></textarea>
            
            <input type="file" name="art-file" class="">
            
            <span><i class="fas fa-camera"></i></span>
             
            
        </div>
            <button type="submit" class="btn btn-primary ">Save</button>
        </form><br/>  --}}


@include('footer')