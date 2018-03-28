@include('header')
@include('navbar')


{{--  Left Coulm Cards  --}}
<div class="">
    <div class="row">
    
        <div class="col col-3"> 
            <div class="leftColum"> 
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                          <h5 class="card-title">Light card title</h5>
                          <p class="card-text">Some quick example text to build on the 
                              card title and make up the bulk of the cards content.</p>
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
                        
                        {!! Form::label('headtitle', 'Add New Article',['class'=>'font-weight-bold']) !!}
                        
                        {!! Form::text('title',old('title'),['placeholder'=>'title','class'=>'form-control','id'=>'first','name'=>'art-title'] ) !!}<br/>
                    
                        {!! Form::textarea('content',old('content'),['placeholder'=>'write your new art','class'=>'form-control','id'=>'sec', 'rows'=>'5','name'=>'art-content'] ) !!}
    
                        {!! Form::label('category_id', 'Category :',['name'=>'category-option','class'=>'mr-sm-2','for'=>'inlineFormCustomSelect']) !!}
                        {{--  <label name="category-option" class="mr-sm-2" for="inlineFormCustomSelect">Categories</label>  --}}
                        {{--  <select  class="custom-select mb-2 mr-sm-2 mb-sm-0 form-control" id="inlineFormCustomSelect" >
                          
                        {!! Form::select('category-option', 'PHP','Choose Category' ,['class'=>'custom-select mb-2 mr-sm-2 mb-sm-0 form-control','id'=>'inlineFormCustomSelect']) !!}
                          
                          {!! Form::select($name, $list, $selected, [$options]) !!}  --}}
                          <select name="category_id" class="form-control"> 
                          
                          <option selected> Choose Category </option>
    
                            {{--  @foreach ($categories as $Category)  --}}
                              <option value="1">Marketing</option>
                            {{--  @endforeach  --}}
                          
                           
    
                          
                        </select>
                        <br/><br/>
                       
                        <span><i class="fas fa-camera"></i></span>
                        {!! Form::file('file',['name'=>'file']) !!}<br/><br/>
                        
                        {!! Form::submit('Add', ['class'=>'btn btn-primary']) !!}
                    
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