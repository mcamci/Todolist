@extends('layouts.todo')
@section('content')

 <div class="container">
      <div class="page-header">
        <h3>Todo List ( {{ Auth::user()->kullanici }} ) <a href="logout">Exit</a></h3>
      </div>



<h3><a href="{{ URL::to('create')  }}"><span class="label label-default">New Todo</span></a></h3>

<div class="list-group">

  @foreach($items As $item)
  <a href="todo/{{$item->id}}" class="list-group-item @if($item->status == 1) active @endif">
    {{ $item->title  }} @if($item->status == 1) - (<small><b>Completion date  : </b>{{$item->updated_at}}</small>) @endif
  </a>
  @endforeach
</div>

    </div>

    <div class="footer">
      <div class="container">
        <p class="text-muted">Todo List Application</p>
      </div>
    </div>

@stop

@section('style')
<style>
/* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
}


/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */

.container {
  width: auto;
  max-width: 680px;
  padding: 0 15px;
}
.container .text-muted {
  margin: 20px 0;
}


</style>
@stop

@section('javascript')

@stop