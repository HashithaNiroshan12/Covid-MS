@extends('layouts.master')
@section('content')
                    <!-- Page Heading -->
                    <div class="row">
                    <h1 class="h3 mb-2 text-gray-800">Phlebotomists</h1>
                    <nav class="ml-auto" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Phlebotomists</li>
                        </ol>
                      </nav>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Phlebotomists</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form name="assignto" method="post">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>  
                                            <th>Full Name</th>
                                            <th>EmpID</th>
                                            <th>Mobile</th>
                                            <th>Registration Date</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                      
                                    <tbody>
                                      
                                       @foreach($phle as $data)
                                        <tr>                                    
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->EmpID}}</td>   
                                            <td>{{ $data->Mobile }}</td>
                                            <td>{{ $data->RegistrationDate }}</td>
                                            <td><a href="/testdetails/{{ $data->id }}" class="btn btn-info btn-sm">Edit</a> </td>
                                            <td><a href="/testdetails/{{ $data->id }}" class="btn btn-danger btn-sm">Delete</a>  </td>
                                        </tr>
                                        @endforeach                                       

                                    </tbody>

                                </table>
                                     </form>
                            </div>
                        </div>
                    </div>

@endsection