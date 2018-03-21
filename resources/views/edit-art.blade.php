<div class="art-container">
    
        <form action="{{action('articlesController@update')}}" method="POST">
            {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlTextarea1"><b>Add New Article</b></label>
    
            <input type="text" name="art-title" class="form-control  " placeholder="Title"><br/>
    
            <textarea name="art-content" class="form-control " id="exampleFormControlTextarea1" rows="5" placeholder="What Is Your New Topic Today ? "></textarea>
            
            <input type="file" name="art-file" class="">
            
            <span><i class="fas fa-camera"></i></span>
             
            
        </div>
            <button type="submit" class="btn btn-primary ">Save</button>
        </form><br/>