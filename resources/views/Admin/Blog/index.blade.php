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
                        <td>{{ \Illuminate\Support\Str::words($item->title, 5, ' [more]') }}</td>
                        <td>{{ \Illuminate\Support\Str::words(strip_tags($item->details), 10, ' [read more]') }}</td>
                        <td>
                          <img src="{{ asset('storage/' . $item->image) }}" alt="Image" width="100" height="100">
                      </td>
                      <td>{{ \Illuminate\Support\Str::words($item->meta_title, 5, ' [more]') }}</td>
                      <td>{{ \Illuminate\Support\Str::words($item->meta_description, 5, ' [more]') }}</td>
                      <td>{{ $item->created_at->format('d-m-y') }}</td>


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