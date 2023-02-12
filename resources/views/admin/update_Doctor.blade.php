
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

   <style type='text/css'>
        label{
            display:inline-block;
            width:200px;
        }
   </style>

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

                

            <div class='container' align='center' style='padding:100px'>

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    {{session()->get('message')}}
                </div>
                @endif

                <form action='{{url("editdoctor",$data->id)}}' method='POST' enctype='multipart/form-data'>
                    @csrf
                    <div style='padding:15px'>
                        <label>Doctor Name</label>
                        <input type='text' style='color:black;' name='name' value='{{$data->name}}'>
                    </div>

                    <div style='padding:15px'>
                        <label>Phone</label>
                        <input type='number' style='color:black;' name='phone' value='{{$data->phone}}'>
                    </div>

                    <div style='padding:15px'>
                        <label>Specialty</label>
                        <input type='text' style='color:black;' name='specialty' value='{{$data->specialty}}'>
                    </div>

                    <div style='padding:15px'>
                        <label>Room</label>
                        <input type='text' style='color:black;' name='room' value='{{$data->room}}'>
                    </div>

                    <div style='padding:15px'>
                        <label>Previous Image</label>
                        <img height='70' width='70' src='doctorimage/{{$data->image}}'>
                    </div>

                    <div style='padding:15px'>
                        <label>Change Image</label>
                        <input type='file' name='file'>
                    </div>

                    <div style='padding:15px'>
                        <input type='submit' class='btn btn-primary'>
                    </div>
                </form>
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
