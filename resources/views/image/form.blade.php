       
    <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
        @csrf
       
       <div class="form-group">
            <label for="exampleInputEmail1">title</label>
            <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter title">
        </div>
        <div class="form-group">
            
            <input type="file" class="form-control" name="image" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="form-group">
            
            <input type="submit" class="form-control" value="submit" aria-describedby="emailHelp" placeholder="Enter title">
          </div>
     </form>
     @foreach ($image_all as $image)
     <tr>
        
         <td>
             <img src="{{ Storage::url($image->image) }}" alt="" width="150px">
         </td>



     </tr>
     
         
     @endforeach