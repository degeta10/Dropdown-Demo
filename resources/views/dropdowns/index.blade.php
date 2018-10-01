@extends('layouts.app')

@section('content')
<div class="container">
  <a class="btn btn-primary btn-sm" href="/dropdowns/create">
  <i class="fa fa-plus-square" aria-hidden="true"></i>Create</a>
  <table class="table">
    <thead>
      <tr>
        <th id ="heading">ID</th>
        <th id ="heading">DEPOTS</th>
      </tr>
    </thead>
    <tbody>
    @foreach( $dropdowns as $dropdown )
      <tr>
        <td>{{    $dropdown->id      }}</td>
        <td>{{    $dropdown->depots   }}</td>
        <td>{{    $dropdown->assigned   }}</td>
        @foreach ( $dropdown->assigned as $element)

        @endforeach
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection
