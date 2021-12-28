<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title> @yield('title') </title>
<!-- Bootstrap core CSS -->

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<link href="{{asset('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
<!-- Custom styling plus plugins -->
<link href="{{asset('css/custom.css')}}?v={{time()}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('css/maps/jquery-jvectormap-2.0.3.css')}}" />
<link href="{{asset('css/icheck/flat/green.css')}}" rel="stylesheet" />
<link href="{{asset('css/floatexamples.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/jquery.dataTables.min.css')}}?v={{time()}}" rel="stylesheet" type="text/css" />
{{-- <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" type="text/css" /> --}}
<link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">  
<link rel="stylesheet" href="{{asset('css/dropzone.min.css')}}" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">


<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/dropzone.min.js')}}"></script>
<script src="{{asset('js/nprogress.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
{{-- <script src="{{asset('js/select2.min.js')}}"></script> --}}
<script src="{{asset('js/tinymce.min.js')}}" referrerpolicy="origin"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
{{-- <script src="{{asset('js/letter.avatar.js')}}"></script> --}}
<script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>
  {{-- tag --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>