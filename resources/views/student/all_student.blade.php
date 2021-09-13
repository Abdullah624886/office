@extends('head')

<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 mx-auto">
        
      <a href="" class="btn btn-danger">Add Student</a>
        <hr>

            <table class="table table-resposive" style="font-size:17px;">
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
               @foreach($student as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->phone}}</td>
                    <td><img src="{{asset($row->image)}}" style="height: 40px; width: 70px;"></td>
                    <td >
                        <a href="" class="btn btn-info" style="font-size:10px;">Edit</a>
                        <a href="" class="btn btn-danger" style="font-size:10px;">Delete</a>
                        <a href="" class="btn btn-success" style="font-size:10px;">View</a>
                    </td>
                </tr>
               @endforeach
            </table>
     
      </div>
    </div>
  </div>
