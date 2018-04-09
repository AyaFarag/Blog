@include('header')
@include('navbar')
{{--  ['route'=>'editarticle.update', $articles->id_articles],  --}}
<div class="container">
    <div class="row">
        {{--  edit article  --}}
        <div class="col col-8">
            <div>
                    {!! Form::model($articles ,['route'=> ['editarticle.update', $articles->id_articles], 'method'=>'PUT']) !!}
                        
                    {!! Form::label('headtitle', 'Edit Article', ['class'=>'font-weight-bold text-primary h5']) !!}<br/>
            
                    {!! Form::label('title', 'Title:') !!}<br/>
                    
                    {!! Form::text('title',old('title'), ['class'=>'form-control','id'=>'first','name'=>'edit-title'] ) !!}<br/>
            
                    {!! Form::label('category', 'Category :') !!}

                    {!! form::select('category',$categories, ['class' =>'form-control', 'name' => 'category']) !!}<br/>

                    <label>Tags :</label>
                    <div class="form-control">
                     @foreach ($tags as $tag)
                     <input type="checkbox" value="{{$tag->id}}" class="" name="checktag[]" id="checkoption"/> 
                     <label for="checkoption"> {{$tag->name}} </label>
                     @endforeach  
                    </div>                           
                    

                     <br/>
                    {!! Form::label('content', 'Content :') !!}<br/>
            
                    {!! Form::textarea('content',old('content'), ['class'=>'form-control','id'=>'sec', 'rows'=>'5','name'=>'edit-content'] ) !!}


                  
                    
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

                                         <h6 class=""> Tags :</h6>
                                         @foreach ($articles->tags as $tag)
                                         <span class="badge badge-dark">{{$tag->name}}</span>
                                         @endforeach
                                         <br/><br/>
                                         {!! Form::submit('Save', ['class'=>'btn btn-success btn-block ']) !!}
                                         {!! Form::close() !!}

                                         <div class="cancelbtn">
                                         {!! Form::model($articles ,['route'=> ['articlepage.show', $articles->id_articles], 'method'=>'GET']) !!}
                                         {!! Form::submit('Cancel', ['class'=>'btn btn-danger btn-block']) !!}
                                         {!! Form::close() !!}
                                         </div>

                                        
               
                                       </div>
                                     </div>
                                    </div>
                               </div>
        </div>
    </div> 
    {{--  end of row  --}}
       
        



@include('footer')