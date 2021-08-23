@extends('head')

<div class="col-lg-4 mx-auto">
    
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Category form</h4>
                  <p class="card-description">
                    Updat Category Form
                  </p>
                  @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                  <form action="{{url('category/'.$category->id)}}" method="post">
                      @csrf
                      @method('PUT')
                    <div class="form-group">
                      <label for="exampleInputUsername1">Categorie</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" value="{{$category->categorys}}" placeholder="Categorie" name="categorys">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Updat</button>
                  </form>
                </div>
              </div>
            </div>