@extends('rapid.admin.layout')
@section('titlename')
Manage All Category
@endsection
@section('dashboard')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage All Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Category</h5>
              @if(Session('del'))
              <div class="alert alert-danger">
                <strong class="text-dark">Hey!</strong>{{session('del')}}
              </div>
            @endif
              <!-- Default Table -->
              <table class="table" id="tab">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categoryname</th>
                    <th scope="col">Created_At</th>
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                  <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->categoryname}}</td>
                    <td>{{$row->created_at}}</td>
                    <td><a href='{{URL("/admin-login/admin-managecategory/".$row->id)}}' class="btn btn-sm btn-danger" onclick="return confirm('Are You sure to delete data')"><i class="bi bi-trash"></i></a> |
                    <a href='{{URL("/admin-login/admin-editcategory/".$row->id)}}' class="btn btn-sm btn-success" onclick="return confirm('Are You sure to edit data')"><i class="bi bi-pen"></i></a> 
                   
                  </tr>
                  @endforeach
                  </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

          
        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <script>
  $(document).ready(function () {
    $('#tab').DataTable();
});
</script>

  @endsection