@section('topnav')
<nav class="navbar navbar-expand-sm py-1 bg-dark fixed-top">
            <br>
                  <div class="container-fluid">
                    <div class="container fixed-top h5">
                        <div class="row my-1 ">
                              <div class="col" align="start">
                                  <a href="#" class="navlink mx-3 text-decoration-none">Logo</a>
                              </div>
                              <div class="col" align="center">
                              <a href="#" class="navlink mx-3 text-decoration-none">
                                <!-- <i class="bi bi-person-vcard "></i>  -->
                                  Home
                                </a>
                              <a href="#about" class="navlink mx-3 text-decoration-none">
                                <!-- <i class="bi bi-person-vcard "></i>  -->
                                  About
                                </a>
                              <a href="#contact" class="navlink mx-3 text-decoration-none">
                                  <!-- <i class="bi bi-telephone "></i>     -->
                                  Contact
                              </a>
                              </div>
                              <div class="col" align="end">
                              <a href="#" class="navlink mx-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#myModal"> 
                                  <i class="bi bi-box-arrow-in-right "></i>
                                  Login
                              </a>
                              </div>
                        </div>
                      </div>
                  </div>
</nav>
@endsection
