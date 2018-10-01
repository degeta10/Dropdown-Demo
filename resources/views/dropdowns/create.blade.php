@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
  <input type="hidden" name="count" value="1"/>
  <div class="form-group" id="fields">
    <label class="control-label" for="field1">Add Depot</label>
    <div class="form-controls" id="profs">
      <form class="form-horizontal" role="form" method="post" action="{{ route('dropdowns.store') }}">
                {{ csrf_field() }}
              <div class="col-md-1">
                <button class="btn add-more" type="button" id="add-more">+</button>                
              </div>
              <div class="col-md-11">
                  <div id="field">
                    <select name="depots[]" style="padding:6px 12px;display:block;width:50%;" required >
                      <option value="" disabled selected>Select Depot</option>
                        @foreach($depots as $depot )
                          <option value="{{$depot->depot_name}}">{{$depot->depot_name}}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class="col-md-11">
                    <input type="submit" class="btn btn-lg btn-block"/>
              </div>
      </form>
      <br>
    </div>
  </div>
</div>
</div>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">

  $(document).ready(function(){
    $(".add-more").click(function(e){
      e.preventDefault();
      $("#field").append(
        '<select name="depots[]" style="padding:6px 12px;display:block;width:50%;" required><option value="" disabled selected>Select Depot</option>@foreach($depots as $depot )<option value="{{$depot->depot_name}}">{{$depot->depot_name}}</option>@endforeach</select>');
    });
  });

</script>
@endsection
