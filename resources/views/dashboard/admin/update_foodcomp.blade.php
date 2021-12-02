<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      @include('admin.sidebar')
      @include('admin.navbar')
      
      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding: 100px"></div>

        <form action="{{url('editfoodcomp',$data->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div>
            <label>Company Name</label>
            <input type="text" name="companyname" style="color:black" value="{{$data->companyname}}">
          </div>

          <div>
            <label>Manager Name</label>
            <input type="text" name="managername" style="color:black" value="{{$data->managername}}">
          </div>

          <div>
            <label>Company Email</label>
            <input type="text" name="email" style="color:black" value="{{$data->email}}">
          </div>

          <div>
            <label>Contact Number</label>
            <input type="text" name="number" style="color:black" value="{{$data->number}}">
          </div>

          <div>
            <label>Company Address</label>
            <input type="text" name="address" style="color:black" value="{{$data->address}}">
          </div>

          <div style="padding: 15px;">
            <label>Description</label>
            <input type="text" style="color:black" name="password" value="{{$data->password}}">
          </div>

          <div>
            <label>Company Image</label>
            <img height="150" src="companyimage/{{$data->image}}">
          </div>

          <div>
            <label>Change Image</label>
            <input type="file" name="companyimage">
          </div>

          <div>
            <label>Change Image</label>
            <input type="submit" class="btn btn-primary" name="file">
          </div>

    

        </form>

      </div>

        
    @include('admin.script')
  </body>
</html>