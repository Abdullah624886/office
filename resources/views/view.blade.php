@extends('head')

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        
      <h4>Category View</h4>
        <div>
                <p>ID: {{$category->id}}</p>
                <p>NAME: {{$category->categorys}}</p>
                <p>CREATED: {{$category->created_at}}</p>
                <p>UPDATED: {{$category->updated_at}}</p>

      </div>
    </div>
  </div>
 