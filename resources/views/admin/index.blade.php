@extends('admin.admin_dashboard')
@section('admin')
<style>
  tr:hover{
    background-color: gray!important;
    td{
    color: white !important;}
    th{
      color: white !important;
    }
  }
</style>
<div class="page-content" style="background-color: aliceblue; border:none">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0" style="color: black;">Welcome to Dashboard</h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
          <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
          <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
        </div>
        <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
          <i class="btn-icon-prepend" data-feather="printer"></i>
          Print
        </button>
        <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
          <i class="btn-icon-prepend" data-feather="download-cloud"></i>
          Download Report
        </button>
      </div>
    </div>

    <div class="row" >
      <div class="col-12 col-xl-12 stretch-card" >
        <div class="row flex-grow-1" >
          <div class="col-md-4 grid-margin stretch-card" >
            <div class="card" style="background-color: white; ">
              <div class="card-body" >
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0" style="color: black;">New Customers</h6>
                  <div class="dropdown mb-2">
                    <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-12 col-xl-5">
                    <h3 class="mb-2" style="color: black;">3,897</h3>
                    <div class="d-flex align-items-baseline">
                      <p class="text-success">
                        <span>+3.3%</span>
                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-6 col-md-12 col-xl-7">
                    <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card" style="background-color: white; ">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0" style="color: black;">New Orders</h6>
                  <div class="dropdown mb-2">
                    <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="row" >
                  <div class="col-6 col-md-12 col-xl-5">
                    <h3 class="mb-2" style="color: black;">35,084</h3>
                    <div class="d-flex align-items-baseline">
                      <p class="text-danger">
                        <span>-2.8%</span>
                        <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-6 col-md-12 col-xl-7">
                    <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card" style="background-color: white;">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0" style="color: black;">Growth</h6>
                  <div class="dropdown mb-2">
                    <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-12 col-xl-5">
                    <h3 class="mb-2" style="color: black;">89.87%</h3>
                    <div class="d-flex align-items-baseline">
                      <p class="text-success">
                        <span>+2.8%</span>
                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-6 col-md-12 col-xl-7">
                    <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- row -->

    <div class="row">
      <div class="col-lg-7 col-xl-12 grid-margin stretch-card">
        <div class="card" style="background-color: white;">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline mb-2">
              <h6 class="card-title mb-0" style="color: black;">Monthly sales</h6>
              <div class="dropdown mb-2" >
                <a type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4" >
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
              </div>
            </div>
            <p class="text-muted" style="color: black;">Sales are activities related to selling or the number of goods or services sold in a given time period.</p>
            <div id="monthlySalesChart"></div>
          </div>
        </div>
      </div>
    </div> <!-- row -->

    <div class="row">
      <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
        <div class="card" style="background-color: white;">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline mb-2">
              <h6 class="card-title mb-0"style="color: black;">Inbox</h6>
              <div class="dropdown mb-2">
                <a type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
              </div>
            </div>
            <div class="d-flex flex-column">
              <a href="javascript:;" class="d-flex align-items-center border-bottom pb-3">
                <div class="me-3">
                  <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                </div>
                <div class="w-100">
                  <div class="d-flex justify-content-between">
                    <h6 class="text-body mb-2" style="color: black !important;">Leonardo Payne</h6>
                    <p class="text-muted tx-12" style="color: black !important;">12.30 PM</p>
                  </div>
                  <p class="text-muted tx-13" style="color: black;">Hey! there I'm available...</p>
                </div>
              </a>
              <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                <div class="me-3">
                  <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                </div>
                <div class="w-100">
                  <div class="d-flex justify-content-between">
                    <h6 class="text-body mb-2" style="color: black !important;">Carl Henson</h6>
                    <p class="text-muted tx-12" style="color: black !important;">02.14 AM</p>
                  </div>
                  <p class="text-muted tx-13" style="color: black;">I've finished it! See you so..</p>
                </div>
              </a>
              <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                <div class="me-3">
                  <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                </div>
                <div class="w-100">
                  <div class="d-flex justify-content-between">
                    <h6 class="text-body mb-2" style="color: black !important;">Jensen Combs</h6>
                    <p class="text-muted tx-12" style="color: black !important;">08.22 PM</p>
                  </div>
                  <p class="text-muted tx-13"  style="color: black;">This template is awesome!</p>
                </div>
              </a>
              <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                <div class="me-3">
                  <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                </div>
                <div class="w-100">
                  <div class="d-flex justify-content-between">
                    <h6 class="text-body mb-2" style="color: black !important;">Amiah Burton</h6>
                    <p class="text-muted tx-12" style="color: black !important;">05.49 AM</p>
                  </div>
                  <p class="text-muted tx-13" style="color: black;">Nice to meet you</p>
                </div>
              </a>
              <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                <div class="me-3">
                  <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                </div>
                <div class="w-100">
                  <div class="d-flex justify-content-between">
                    <h6 class="text-body mb-2" style="color: black !important;">Yaretzi Mayo</h6>
                    <p class="text-muted tx-12" style="color: black !important;">01.19 AM</p>
                  </div>
                  <p class="text-muted tx-13" style="color: black;">Hey! there I'm available...</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-xl-8 stretch-card">
        <div class="card" style="background-color: white;">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline mb-2">
              <h6 class="card-title mb-0" style="color: black;">Projects</h6>
              <div class="dropdown mb-2">
                <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th class="pt-0" style="color: gray;">#</th>
                    <th class="pt-0" style="color: gray;">Project Name</th>
                    <th class="pt-0" style="color: gray;">Start Date</th>
                    <th class="pt-0" style="color: gray;">Due Date</th>
                    <th class="pt-0" style="color: gray;">Status</th>
                    <th class="pt-0" style="color: gray;">Assign</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="color: black;">1</td>
                    <td style="color: black;">NobleUI jQuery</td>
                    <td style="color: black;">01/01/2022</td>
                    <td style="color: black;">26/04/2022</td>
                    <td ><span class="badge bg-danger">Released</span></td>
                    <td style="color: black;">Leonardo Payne</td>
                  </tr>
                  <tr>
                    <td style="color: black;">2</td>
                    <td style="color: black;">NobleUI Angular</td>
                    <td style="color: black;">01/01/2022</td>
                    <td style="color: black;">26/04/2022</td>
                    <td><span class="badge bg-success">Review</span></td>
                    <td style="color: black;">Carl Henson</td>
                  </tr>
                  <tr>
                    <td style="color: black;">3</td>
                    <td style="color: black;">NobleUI ReactJs</td>
                    <td style="color: black;">01/05/2022</td>
                    <td style="color: black;">10/09/2022</td>
                    <td><span class="badge bg-info">Pending</span></td>
                    <td style="color: black;">Jensen Combs</td>
                  </tr>
                  <tr>
                    <td style="color: black;">4</td>
                    <td style="color: black;">NobleUI VueJs</td>
                    <td style="color: black;">01/01/2022</td>
                    <td style="color: black;">31/11/2022</td>
                    <td><span class="badge bg-warning">Work in Progress</span>
                    </td>
                    <td style="color: black;">Amiah Burton</td>
                  </tr>
                  <tr>
                    <td style="color: black;">5</td>
                    <td style="color: black;">NobleUI Laravel</td>
                    <td style="color: black;">01/01/2022</td>
                    <td style="color: black;">31/12/2022</td>
                    <td><span class="badge bg-danger">Coming soon</span></td>
                    <td style="color: black;">Yaretzi Mayo</td>
                  </tr>
                  <tr>
                    <td style="color: black;">6</td>
                    <td style="color: black;">NobleUI NodeJs</td>
                    <td style="color: black;">01/01/2022</td>
                    <td style="color: black;">31/12/2022</td>
                    <td><span class="badge bg-primary">Coming soon</span></td>
                    <td style="color: black;">Carl Henson</td>
                  </tr>
                  <tr>
                    <td style="color: black;" class="border-bottom">3</td>
                    <td style="color: black;" class="border-bottom">NobleUI EmberJs</td>
                    <td style="color: black;" class="border-bottom">01/05/2022</td>
                    <td style="color: black;" class="border-bottom">10/11/2022</td>
                    <td style="color: black;" class="border-bottom"><span class="badge bg-info">Pending</span></td>
                    <td style="color: black;" class="border-bottom">Jensen Combs</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- row -->

</div>
@endsection
