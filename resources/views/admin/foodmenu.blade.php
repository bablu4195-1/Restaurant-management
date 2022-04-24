<x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    
      @include('admin.admincss')
      @include('admin.adminscripts')
  </head>
  <body>
  <div class="container-scroller">
      
    @include('admin.navbar')
    <div style="position:relative;top: 60px; right: -150px;">
        <form action="{{url('/uploadmenu')}}" method="post" enctype="multipart/form-data">
            @csrf
     <div>
         <label>Title</label>
         <input style="color:blue;" type="text" name="title" placeholder="Write a title" required>
      </div>   
     <div>
         <label>Price</label>
         <input style="color:blue;" type="text" name="price" placeholder="Price" required>
      </div>   
     <div>
         <label>Image</label>
         <input style="color:blue;" type="file" name="image"  required>
      </div>   
     <div>
         <label>Description</label>
         <input style="color:blue;" type="text" name="description" placeholder="Write a Description" required>
      </div>   
      <div>
          <input style="color:green; background-color:green;border:1px solid black;" type="submit" value="save" >
      </div>
    </form>
     </div>
</div>
</body>
</html>
</x-app-layout>