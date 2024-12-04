@extends('Admin.Layouts.app')
@section('title', 'Admin Dashboard')
@section("content")

  <div class="container " >
    <div class="page-inner ">
      <div class="row">
        <div class="col-md-12 page-large ">
          <div class="card">
            <div class="card-header d-flex justify-content-md-between align-items-center">
              <h4 class="card-title">Become Partner Details  </h4>
              
            </div>
           
          </div>
        </div>
       
      </div>
      <div class="row">
        <div class="container w-full">
          <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-striped table-hover table-bordered ">
                      <thead class="">
                        <tr class="">
                        
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th>Subject</th>
                          <th>Message</th>
                          <th>From Submit Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($conutactDetailsBecome as $persion )
                       <tr>
                        {{-- <td>{{$persion->id}}</td> --}}
                        <td>{{$persion->name}}</td>
                        <td>{{$persion->email}}</td>
                        <td>{{$persion->number}}</td>
                        <td>{{$persion->subject}}</td>
                        <td>{{$persion->message}}</td>
                        <td>{{$persion->created_at}}</td>
                        <td>
                        <form action=" {{route('admin.detetelBecomePartner',$persion->id)}}" class="d-inline" method="POST">
                          @csrf
                          @method("DELETE")
                           <button type="submit" class="btn btn-danger">Deleted</button>
                        </form>
                        </td>
                      </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
      </div>
      </div>
    </div>
  </div>

@endsection