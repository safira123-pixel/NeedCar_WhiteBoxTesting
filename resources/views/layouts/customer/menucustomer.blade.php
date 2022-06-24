<link rel="stylesheet" href="{{ asset('js/fontawesome-free/css/all.min.css') }}">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
  <a class="navbar-brand" href="/customer"><i class='fas fa-car nav-icon'></i> NEED-A-CAR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="mr-auto navbar-nav"></ul>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('user/customer') }}"><i class='fas fas fa-home'></i> Homepage</a>
        </li>
        <li class="nav-item active has-treeview">
          <a class="nav-link" href="customer/datacar"><i class='fas fa-car-alt'></i> List Car</a>
        </li>
        <li class="nav-item active has-treeview">
          <a class="nav-link" href="customer/merk"><i class='fas fa-car-alt'></i> List Merk</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/customer/transaksi"><i class='fas fas fa-shopping-basket'></i> Transaksi</a>
        </li>
        <!-- <li class="nav-item active">
          <a class="nav-link" href="customer/testimonials-form"><i class='fas fas fas fa-pen'></i> Testimonials</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="customer/contact-form"><i class='fas fas fas fa-user-circle'></i> Contact Us</a>
        </li> -->
        <li class="nav-item active">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalLong"><i class='fas fa-sign-out-alt'></i> Logout</a>
        </li>
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color:#222">Caution</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h7 style="color:#222"> Are You gonna Log Out? </h7>
            </div>
            <div class="modal-footer">
            <a class="btn" href="/homepage" target="log out">Yes</a>
          </div>
            </div>
        </div>
        </div>
      </ul>
    </div>
  </div>
</nav>