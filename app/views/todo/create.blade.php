@extends('layouts.todo')

@section('content')
 <div class="container">
      <div class="page-header">
        <h1>New Todo</h1>
      </div>
      <h3><a href="{{ URL::to('/')  }}"><span class="label label-default">Back</span></a></h3>

<form class="form-horizontal" method="post" action="{{ URL::to('create')  }}" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="Title">
                  {{$errors->first('title')}}

    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Body</label>
    <div class="col-sm-10">
        <textarea name="body" placeholder="Body" class="form-control"></textarea>
                    {{$errors->first('body')}}

    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Create</button>
    </div>
  </div>
</form>

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