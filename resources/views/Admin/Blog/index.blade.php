@extends('Admin.Layouts.app')
@section('title', 'Admin Dashboard')
@section("content")

  <div class="container" >
    <div class="page-inner ">
      <div class="row">
        <div class="col-md-12 page-large ">
          <div class="card">
            <div class="card-header d-flex justify-content-md-between align-items-center">
              <h4 class="card-title">All Blog </h4>
               <a href="{{route('admin.created')}}">
                <button type="button" class="btn btn-primary  created-Blog-button">Created Blog</button>
               </a>
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
                          
                          <th>Title</th>
                          <th>Description</th>
                          <th>Images</th>
                          <th>Meta Title</th>
                          <th>Meta Description</th>
                          <th>From Submit Date</th>
                          <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($blogs as $item )
                       <tr>
                        
                        <td>{{$item->title}}</td>
                        <td>{{ strip_tags($item->details) }}</td>
                        <td>
                          <img src="{{($item->image) }}" alt="Image" width="100" height="100">
                      </td>
                      <td>{{ ($item->meta_title) }}</td>
                      <td>{{ ($item->meta_description) }}</td>
                      <td>{{$item->created_at}}</td>

                        <td>
                          <a href=" {{route('admin.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                         
                        
                          <form action=" {{route('admin.destroy',$item->id)}}" class="d-inline" method="POST">
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