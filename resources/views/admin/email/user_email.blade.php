@extends('admin.app')

@section('body')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Basic Datatable</h5>
            <div class="table-responsive">
              <table
                id="zero_config"
                class="table table-striped table-bordered"
              >
                <thead >
                  <tr class="bg-success">
                    <th class="fw-bold">SL No</th>
                    <th class="fw-bold">Username</th>
                    <th class="fw-bold">Email</th>
                    <th class="fw-bold">Phone</th>
                  </tr>
                </thead>
                <tbody>
                    @php($i=1)
                    @foreach ($userEmails as $userEmail)

                    <tr>
                        <td >{{ $i++ }}</td>
                        <td>{{ $userEmail->name }}</td>
                        <td>{{  $userEmail->email }}</td>
                        <td>01986126112 </td>
                      </tr>

                    @endforeach


                </tbody>
                <tfoot>
                  <tr class="bg-success">
                      <th class="fw-bold">SL No</th>
                      <th class="fw-bold">Username</th>
                      <th class="fw-bold">Email</th>
                      <th class="fw-bold">Phone</th>
                    </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
  </div>
@endsection
