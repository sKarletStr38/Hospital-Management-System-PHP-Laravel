
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
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
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
                <th style='padding:10px; font-size:18px; color:black;'>Customer name</th>
                <th style='padding:10px; font-size:18px; color:black;'>Email</th>
                <th style='padding:10px; font-size:18px; color:black;'>Phone</th>
                <th style='padding:10px; font-size:18px; color:black;'>Doctor Name</th>
                <th style='padding:10px; font-size:18px; color:black;'>Date</th>
                <th style='padding:10px; font-size:18px; color:black;'>Message</th>
                <th style='padding:10px; font-size:18px; color:black;'>Status</th>
                <th style='padding:10px; font-size:18px; color:black;'>Approved</th>
                <th style='padding:10px; font-size:18px; color:black;'>Canceled</th>
              </tr>

              @foreach($data as $appoint)
              <tr style='background-color:skyblue'>
                <td style='padding:10px; font-size:15px; color:white;'>{{$appoint->name}}</td>
                <td style='padding:10px; font-size:15px; color:white;'>{{$appoint->email}}</td>
                <td style='padding:10px; font-size:15px; color:white;'>{{$appoint->phone}}</td>
                <td style='padding:10px; font-size:15px; color:white;'>{{$appoint->doctor}}</td>
                <td style='padding:10px; font-size:15px; color:white;'>{{$appoint->date}}</td>
                <td style='padding:10px; font-size:15px; color:white;'>{{$appoint->message}}</td>
                <td style='padding:10px; font-size:15px; color:white;'>{{$appoint->status}}</td>
                <td>
                  <a class='btn btn-success'href='{{url("approved",$appoint->id)}}'>Approved</a>
                </td>
                <td>
                  <a class='btn btn-danger'href='{{url("canceled",$appoint->id)}}'>Canceled</a>
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
