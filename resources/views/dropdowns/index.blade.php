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
        <td>
          {{-- <select name="depots[]" style="padding:6px 12px;display:block;width:50%;" required >
            <option value="" disabled selected>Select Depot</option>
              @php
                $depots = explode(",",$dropdown->depots);
              @endphp
              @foreach ($depots as $depot)
                  <option value="{{$depot}}">{{$depot}}</option>
              @endforeach
          </select> --}}
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection
