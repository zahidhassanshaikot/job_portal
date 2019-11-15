<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="application-name" content="">
	<meta name="description" content="">
  <title>Index</title>
  
  @include('back-end.header')

  @yield('content')

  @include('popup-message/popup-message')
  @include('popup-message/modal')
  @include('back-end.footer')
