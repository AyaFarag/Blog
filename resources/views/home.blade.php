@include('header')
@include('navbar')



{{--  Left Coulm Cards  --}}
<div class="">
    <div class="row">
    
        <div class="col col-3"> 
            <div class="leftColum"> 
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header h5 text-primary">Categories</div>
                        <div class="card-body">
                          <div class="card-title">
                              <form action="{{ route('addhomecat.store')}}" method="POST" >
                                    {{ csrf_field() }}
                              <label>Add New Category </label>
                              <input type="text" class="form-control" name="add-category" placeholder="Category Name"/>
                              <input type="submit" value="Add" class="btn btn-primary" />
                              </form>  
                          </div>
                          <div class="card-text">

                                @foreach ($category as $cat)
                                <div class="alert alert-secondary" role="alert">
                                       <a href="#" value="{{$cat->id}}"> {{$cat->name}} </a>
                                      </div>
                                @endforeach      
                          </div>
                        </div>
                      </div>
    
    
          <div class="mail">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Email Subscribers</div>
                        <div class="card-body">
                            <p class="card-text">Subscribe your email now !!</p>
                          <div class="card-title"><input type="text" class="form-control"/></div>
                          <div class=""><input type="submit" value="SUBSCRIBE" class="btn btn-danger btn-block"/></div>
                        </div>
                      </div>
        </div>            
        
        </div></div> 
    
    {{--  Add New Article  --}}
        <div class="col col-6"><div>
            
                <div class="">
        
                        {!! Form::open(['route'=>'add.store', 'files' => true]) !!}
                        
                        {!! Form::label('headtitle', 'Add New Article',['class'=>'font-weight-bold text-primary h5']) !!}
                        
                        {!! Form::text('title',old('title'),['placeholder'=>'title','class'=>'form-control','id'=>'first','name'=>'art-title'] ) !!}<br/>
                    
                        {!! Form::textarea('content',old('content'),['placeholder'=>'write your new article ...','class'=>'form-control','id'=>'sec', 'rows'=>'5','name'=>'art-content'] ) !!}<br/>

                        <span><i class="fas fa-camera"></i></span>
                        {!! Form::file('file',['name'=>'file']) !!}<br/><br/>

                        {!! Form::label('category_id', 'Category :',['name'=>'category-option','class'=>'mr-sm-2','for'=>'inlineFormCustomSelect']) !!}
                        
                        
                          <select name="category_id" class="form-control"> 
                          
                          <option selected> Choose Category </option>
    
                            @foreach ($category as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          
                        </select>
                        <br/>
                       
                        

                        {!! Form::submit('Add', ['class'=>'btn btn-primary btn-block']) !!}
                    
                        {!! Form::close() !!}<br/><br/>
                        
                    
    {{-- article View   --}}
@include('articleView')
                    
                    
                    </div>  
        
        </div>
    </div>  
    
    


    {{--  Friends Department  --}}
        <div class=" col col-3"><div> Friends Department
            
        
        </div></div>  
    
    </div>
    </div>
    
    
    
    
    
    
    




 



@include('footer')