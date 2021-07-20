@extends('layouts.master')
@section('content')    
                   <!-- Page Heading -->
                   <h1 class="h3 mb-2 text-gray-800">Sent to labarotary</h1>
   

                   <!-- DataTales Example -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Sent to lab</h6>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">

                                   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                       <thead>
                                           <tr>  
                                               <th>Order No.</th>
                                               <th>Patient Name</th>
                                               <th>Mobile No.</th>
                                               <th>Test Type</th>
                                               <th>Time Slot</th>
                                               <th>Reg. Date</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                         <tfoot>
                                               <tr> 
                                               <th>Order No.</th>
                                               <th>Patient Name</th>
                                               <th>Mobile No.</th>
                                               <th>Test Type</th>
                                               <th>Time Slot</th>
                                               <th>Reg. Date</th>
                                               <th>Action</th>
                                           </tr>
                                       </tfoot>
   
                                       <tbody>
                                         
                                          @foreach($labs as $lab)
                                           <tr>                                    
                                               <td>{{ $lab->OrderNo }}</td>
                                               <td>{{ $lab->user->name }}</td>   
                                               <td>{{ $lab->PatientMobile }}</td>
                                               <td>{{ $lab->TestType }}</td>
                                               <td>{{ $lab->TestTimeSlot }}</td>
                                               <td>{{ $lab->RegistrationDate }}</td>                                   
                                               <td>
                                               <a href="/testdetails/{{ $lab->id }}" class="btn btn-info btn-sm">View Details</a> 
                                               </td>
                                           </tr>
                                           @endforeach                                       
   
                                       </tbody>
   
                                   </table>

                           </div>
                       </div>
                   </div>
@endsection