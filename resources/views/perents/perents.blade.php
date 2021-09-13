@extends('head')
<div class="template-demo">
     <a class="btn btn-primary" href="#">Information</a>
</div>
<h2> {{ Session::get('success') }} </h2>
<div class="col-lg-4 mx-auto">
    
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Student form</h4>
                  @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                  <form action="{{route('store.perents')}}" method="post" enctype="multipart/form-data">
                      @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Father Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="father_name" name="father_name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Mother Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="moher_name" name="moher_name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">E-mail</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Phone</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="phone" name="phone">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>