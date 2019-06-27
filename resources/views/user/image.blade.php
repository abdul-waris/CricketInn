@extends('layouts.app')

@section('content')
 <form method="post" action="imageupload">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="image"> Image: </label>
    <input type="file" name="image" id="image" >
    <input type="text" name="ha"> 
    <!--<input type="image" name="img" id="image">-->
        <button type="submit" class="btn btn-primary"> Submit </button> 
</form> 
    @endsection