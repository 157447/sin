@extends('welcome')
@section('content')
<ul>   
@foreach ($categories as $category)
<li><a href="{{route("category.get",["id"=>$category->id])}}">{{$category->name}}</a></li>
@endforeach
</ul>


      <form class="category-form" method="POST" action="{{route("category.post")}}">
          <div class="form-group">
              <label>Title</label>
              <input onkeyup="validInput()" id="name" type="text" name="name" class="form-control" placeholder="...">
      </div>      
    <input type="hidden" name="token" value="{{csrf_token()}}">
    <button type="submit" class="btn btn-default" disabled >Add category</button> 
    <button type="reset" class="btn btn-default" >Cancel</button> 
</form>


@stop