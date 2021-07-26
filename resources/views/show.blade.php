@extends('layouts.app')

@section('title','All information')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="bd-example">
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Message</th>
            <th scope="col">Create date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($info as $item)
            <th scope="row">{{ $item['id'] }}</th>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td>{{ $item['message'] }}</td>
            <td>{{ $item['created_at'] }}</td>
          </tr>
        </tbody>
        @endforeach

      </table>
    </div>
  </div>
</div>