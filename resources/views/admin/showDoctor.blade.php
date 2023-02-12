
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">

            </div>
            
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            
          <div style="padding-top:80px">
            <table>
              <tr style='background-color:white'>
                <th style='padding:10px; font-size:18px; color:black;'>Doctor Name</th>
                <th style='padding:10px; font-size:18px; color:black;'>Specialty</th>
                <th style='padding:10px; font-size:18px; color:black;'>Phone</th>
                <th style='padding:10px; font-size:18px; color:black;'>Image</th>
                <th style='padding:10px; font-size:18px; color:black;'>Room No</th>
              
                
                
                <th style='padding:10px; font-size:18px; color:black;'>Canceled</th>
                <th style='padding:10px; font-size:18px; color:black;'>Update</th>
              </tr>

              @foreach($data as $doctors)
              <tr style='background-color:skyblue'>
                <td style='padding:10px; font-size:15px; color:white;'>{{$doctors->name}}</td>
                <td style='padding:10px; font-size:15px; color:white;'>{{$doctors->specialty}}</td>
                <td style='padding:10px; font-size:15px; color:white;'>{{$doctors->phone}}</td>
                <td style='padding:10px; font-size:15px; color:white;'><img height="50" width="50" src="doctorimage/{{$doctors->image}}" alt=""></td>
                
                <td style='padding:10px; font-size:15px; color:white;'>{{$doctors->room}}</td>

                <td>
                    <a class="btn btn-danger" onclick="return confirm('are you sure to delete this?')" href="{{url('delete_Doctor', $doctors->id)}}">Delete</a>
                </td>

                <td>
                    <a class="btn btn-primary" onclick="return confirm('are you sure to delete this?')" href="{{url('update_Doctor', $doctors->id)}}">Update</a>
                </td>
                
              </tr>
              @endforeach
            </table>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
