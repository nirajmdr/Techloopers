@extends('layouts.app')

@section('content')

  <table class="table table-striped p-2">

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">E-Mail Address</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($messages as $message)
      <tr>
        <th scope="row">{{ $message->id }}</th>
        <td>{{ $message->name }}</td>
        <td>{{ $message->email }}</td>
        <td>{{ $message->subject }}</td>
        <td>{{ $message->message }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
