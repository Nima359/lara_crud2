<?php
header ("Access-Control-Allow-Origin: *");
header ("Access-Control-Allow-Origin: null");
header ("Access-Control-Allow-Origin: http://localhost/");


if (session_status () !== PHP_SESSION_ACTIVE) {
  session_start ();
  \Illuminate\Support\Facades\Session::start ();
}
?>
<html>
<head>
  <meta charset = "UTF-8">
  <meta name = "viewport" content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv = "X-UA-Compatible" content = "ie=edge" />
  <meta name = "Access-Control-Allow-Origin" content = "/" />
  <meta name = "Authorization" content = "*" />
  
  
  <link href = "{{ asset ("assets/front/css/normalize.css") }}" rel = "stylesheet" type = "text/css" />
  <link href = "{{ asset ("assets/front/css/prefixed-style.css") }}" rel = "stylesheet" type = "text/css" />
  {{--  <link href = "{{ mix ("assets/front/css/jQuery.css") }}" rel = "stylesheet" type = "text/css" />--}}
  <link href = "{{ asset ("assets/front/css/bootstrap.css") }}" rel = "stylesheet" type = "text/css" />
  <link href = "{{ asset ("assets/front/css/style.css") }}" rel = "stylesheet" type = "text/css" />
  <link href = "{{ asset ("assets/front/css/styles.css") }}" rel = "stylesheet" type = "text/css" />
  <link href = "{{ asset ("assets/front/css/basic.css") }}" rel = "stylesheet" type = "text/css" />
  <link href = "{{ asset ("assets/front/css/demo.css") }}" rel = "stylesheet" type = "text/css" />
  <link href = "{{ asset ("assets/front/css/font-awesome/css/font-awesome.css") }}" rel = "stylesheet" type = "text/css" />
  
  <title>@section("title")Home Page</title>
</head>
<body>
<div id = "container">
  <h4>@section("title")Home Page</h4>


