<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      @include('admin.sidebar')
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">

        <div align="center" style="padding-top:70px;">
            
          <table>
              
            <tr style="background-color: grey;">

                    <th style="padding:10px; font-size: 20px; color:black;">Company Name</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Manager Name</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Company Email</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Contact No.</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Address</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Image</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Company Description</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Update</th>
                    <th style="padding:10px; font-size: 20px; color:black;">Delete</th>
                    
                </tr>

                @foreach ( $data as $list )
                
                  <tr style="background-color: grey;" align="center">
                      <td style="padding:10px; font-size: 20px; color:black;">{{$list->companyname}}</td>
                      <td style="padding:10px; font-size: 20px; color:black;">{{$list->managername}}</td>
                      <td style="padding:10px; font-size: 20px; color:black;">{{$list->email}}</td>
                      <td style="padding:10px; font-size: 20px; color:black;">{{$list->number}}</td>
                      <td style="padding:10px; font-size: 20px; color:black;">{{$list->address}}</td>
                      <td style="padding:10px; font-size: 20px; color:black;"><img height="100" width="100" src="companyimage/{{$list->image}}"></td>
                      <td style="padding:10px; font-size: 20px; color:black;">{{$list->password}}</td>
                      <td><a class="bt btn-primary" href="{{url('updatefoodcomp',$list->id)}}">Update</a></td>
                      <td><a class="bt btn-danger" onclick="return confirm('Do you want to delete company?')"href="{{url('deletefoodcomp',$list->id)}}">Delete</a></td>
                  </tr>
      
              @endforeach
      
          </table>
        </div>

      </div>
      
    @include('admin.script')
  </body>
</html>