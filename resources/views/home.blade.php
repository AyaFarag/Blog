
@include('header')
@include('navbar')




{{--  Left Coulm Cards  --}}
<div class="">
    <div class="row">
    
        <div class="col col-3"> 
            <div class="leftColum"> 
                <div>
                      <p>   
                        <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Friends List
                            </button>
                          </p>
                          <div class="collapse.show" id="collapseExample">
                                <div class="card card-body height">
                                    <a href="" class=""> aya ahmed</a>
                                    <a href="" class=""> aya ahmed</a>
                                    <a href="" class=""> aya ahmed</a>
                                    <a href="" class=""> aya ahmed</a>
                                    <a href="" class=""> aya ahmed</a>
                                    <a href="" class=""> aya ahmed</a>
                                </div>
                              </div>           
                          <br/>
    
    
    
                          {{--  categories part  --}}
    <div class="card bg-light mb-3 catdiv" style="">
            <div class="card-header h6 text-primary">Categories</div>
            <div class="card-body">
              <div class="card-title">
                  <form action="{{ route('addhomecat.store')}}" method="POST" >
                        {{ csrf_field() }}
                  <label>Name: </label>
                  <input type="text" class="form-control" name="add-category" />
                  <input type="submit" value="Add new category " class="btn btn-secondary btn-block btnmargin" />
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
        </div>
    </div>
    </div> 
    


    {{--  Add New Article  --}}
        <div class="col col-6"><div>
                <div class="">
                 <a href="{{url('addnewarticle')}}" class="h4 text-danger">+ Add New Article </a>    <br/><br/>   
    {{-- article View   --}}
@include('articleView')
             </div>  
        </div>
    </div>  
    
    
    {{--  Friends Department  --}}
        <div class=" col col-3">
            <div>
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
            </div>   
    </div>
    
</div>
    
    
@include('footer')