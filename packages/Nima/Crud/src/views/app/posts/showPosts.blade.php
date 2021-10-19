@extends("Crud::masters.master-app")

@section("header")
  @includeIf ("Crud::layouts.header")
@endsection

@section("title")
  <div id = "title">
    <h3>Show Post Page</h3>
  </div>
@endsection

@section("slider")
  @includeIf ("Crud::layouts.slider")
@endsection

@section("navbar")
  @includeIf ("Crud::layouts.navbar")
@endsection

@section("sidebar")
  @includeIf ("Crud::layouts.sidebar")
@endsection

@section("content")
  @includeIf ("Crud::layouts.showPosts")
@endsection

@section("footer")
  @includeIf ("Crud::layouts.footer")
@endsection
