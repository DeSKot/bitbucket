@extends('layouts.app')
@section('title', 'Create info')
@section('content')


<div class="container mt-5">
  <div class="row">
    <form action="{{ route('info.store') }}" method="POST">
      @csrf
      @if(session('success'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> {{ session('success') }}</h5>
      </div>
      @endif
      @if($errors->any())
      <ul>
        @foreach(($errors->all()) as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      @endif
      <div class="row">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Message</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
        </div>
        <div class="col-11">
          <button type="submit" class="btn btn-primary">Send information</button>
        </div>
      </div>
  </div>
</div>