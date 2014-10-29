@extends('layouts.todo')
@section('content')

 <div class="container">
      <div class="page-header">
        <h1>{{ $todo->title }}</h1>
      </div>

<h3><a href="{{ URL::to('/')  }}"><span class="label label-default">Back</span></a></h3>

<p class="lead">{{$todo->body}}</p>

<hr>
<p>
<b>Created date : </b> {{$todo->created_at}} <br>
<b>Updated date : </b> {{ $todo->updated_at  }}

</p>

<hr>
<h5>Process</h5>
<p>
<a class="label label-danger" href="{{ URL::to('delete',$todo->id)  }}" onclick="return confirm('Are you sure you want to delete');">Delete</a>
@if($todo->status == 0)
<a class="label label-success" href="{{URL::to('success',$todo->id)}}">Completed</a>
@elseif($todo->status == 1)
<a class="label label-danger" href="{{URL::to('nosuccess',$todo->id)}}">Incomplete</a>

@endif
</p>

<hr>

<h5>Files</h5>
{{Form::open(array('url' => 'todo/'.$todo->id.'/todoUp', 'files' => true))

}}
<ul>
@foreach($files AS $file)
  <li><a href="{{URL::to("/show/$file->files")}}">  {{ $file->files }}</a></li>
@endforeach
</ul>
<div class="form-group">
        <input type="file" name="file" class="form-control">
                            {{$errors->first('file')}}


  </div>
  <div class="form-group">
      <button type="submit" class="btn btn-default">Upload</button>
  </div>
    </div>
  </form>

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