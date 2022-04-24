<x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    
      @include('admin.admincss')
  </head>
  <body>

      <div class="container-scroller">
      @include('admin.navbar')
      @include('admin.adminscripts')
      <!-- <h1> USERR</h1> -->
      <div style="position:relative; top:60px; right:-60px;">
          <table style="background-color:green;border:3px solid black;">
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
            </tr>
            @foreach($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                @if($data->usertype=="0")
                <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                @else
                <td><a href="">Not Allowed</a></td>

                @endif
            </tr>
            @endforeach
          </table>
      </div>
</div>
    <!-- container-scroller -->

    
</body>
</html>
</x-app-layout>