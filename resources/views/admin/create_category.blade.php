@extends('admin.layout.master')
@section('title')
    create category
@endsection
@section('content')

<div class="panel panel-default">

    <div class="panel-heading">
        <h3>Create New Category</h3>
     </div>

  <div class="panel-body">

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
    @endif


         <form action="{{route('store.category')}}" method="POST" >
             @csrf

                 <div class="form-group">
                   <label> Name</label>
                   <input type="text" class="form-control" name="name">
                   @error('name')
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                 </div>


                 <button type="submit" class="btn btn-primary">Submit</button>
               </form>


  </div>
</div>

<div class="panel panel-primary">
    <div class="panel panel-heading" >
        <h4>Categories List</h4>
    </div>

    <div class="panel-body">

        @if(isset($categories) && $categories->count() > 0)
 <table id="category" class="table table-bordered">
    <thead>
        <tr>
            <th><h3>Ctegory Name </h3></th>
            <th class="text-center"> Operations </th>
        </tr>
    </thead>
 <tbody>
     @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td class="text-center">
                <a href="{{route('delete.category',$category->id)}}"
                    class="btn btn-danger btn-sm">Delete</a>

                <a href="{{route('show.books', $category->id)}}"
                    class="btn btn-success btn-sm">Show Books</a>

                    <a href="{{route('update.category', $category->id)}}"
                        class="btn btn-primary btn-sm">Edit</a>
                </td>
                </tr>
    @endforeach
    </tbody>
 </table>

        @else
        <h3>There is No Categories</h3>
        @endif
    </div>

    @endsection





