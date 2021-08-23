@extends('head')

<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 mx-auto">
        
      <a href="{{URL::to('category/create')}}" class="btn btn-danger">Add Category</a>
        <hr>

            <table class="table table-resposive" style="font-size:17px;">
                <tr>
                    <th>SL</th>
                    <th>name</th>
                    <th>Action</th>
                </tr>
                @foreach($category as $cate)
                <tr>
                    <td>{{$cate->id}}</td>
                    <td>{{$cate->categorys}}</td>
                    <td >
                        <a href="{{URL::to('category/'.$cate->id. '/edit')}}" class="btn btn-info" style="font-size:10px;">Edit</a>
                        <form action="{{url('category/'.$cate->id)}}" >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" style="font-size:10px;">Delete</button>
                        </form>
                        <a href="{{URL::to('category/'.$cate->id)}}" class="btn btn-success " style="font-size:10px;">View</a>
                    </td>
                </tr>
                @endforeach
            </table>
     
      </div>
    </div>
  </div>
