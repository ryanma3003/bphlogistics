<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Berkat Panduan Hikam') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('back/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('back/dist/css/AdminLTE.min.css')}}">

  <link rel="stylesheet" href="{{asset('back/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{asset('back/plugins/iCheck/flat/blue.css')}}">
  <!--<link rel="stylesheet" href="{{asset('back/plugins/morris/morris.css')}}">
  <link rel="stylesheet" href="{{asset('back/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <link rel="stylesheet" href="{{asset('back/plugins/datepicker/datepicker3.css')}}">
  <link rel="stylesheet" href="{{asset('back/plugins/daterangepicker/daterangepicker.css')}}">-->
  <!-- bootstrap wysihtml5 - text editor -->
  <!--<link rel="stylesheet" href="{{asset('back/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">-->

  <script type="text/javascript" src="{{asset('back/tinymce/tinymce.min.js')}}"></script>

  <script>tinymce.init({ 
    selector:"textarea",
    force_p_newlines : false,
    forced_root_block : "",
    force_br_newlines : false,
    plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
    toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
     });</script>
  
  <!--<link rel="stylesheet" href="{{asset('back/summernote.min.css')}}">

  <link href="{{url('http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css')}}" rel="stylesheet">
  <script src="{{url('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js')}}"></script> 
  <script src="{{url('http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js')}}"></script>
  
  <link href="{{url('http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css')}}" rel="stylesheet">
  <script src="{{url('http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js')}}"></script>

  <script src="{{asset('back/summernote.min.js')}}"></script>-->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">

@if (Auth::check())
@yield('body')
@endif


<!-- jQuery 2.2.3 -->
<script src="{{asset('back/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('back/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>
<script src="{{asset('back/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('back/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!--<script src="{{asset('back/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('back/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('back/plugins/knob/jquery.knob.js')}}"></script>

<script src="{{asset('back/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('back/plugins/datepicker/bootstrap-datepicker.js')}}"></script>-->
<!-- Slimscroll -->
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js')}}"></script>
<script src="{{asset('back/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('back/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('back/dist/js/app.min.js')}}"></script>

<script src="{{asset('back/bph.js')}}"></script>

<!--<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>-->

</body>
</html>