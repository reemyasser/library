@extends('admin.layout.master')
@section('title')
    Edit Category
@endsection
@section('content')

<div class="panel panel-default">

    <div class="panel-heading">
        <h3>Update Category</h3>
     </div>

  <div class="panel-body">

    @if(session()->has('updated'))
             <div class="alert alert-success" >
               {{session()->get('updated')}}
             </div>
             @endif



         <form action="{{route('edit.category',$category->id)}}" method="POST" >
             @csrf

                 <div class="form-group">
                   <label> Name</label>
                   <input type="text" class="form-control" name="name" value="{{$category->name}}">

                 </div>


                 <button type="submit" class="btn btn-primary">Update</button>
         </form>


  </div>
</div>

@endsection
