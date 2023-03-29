<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyBlog</title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    {{--активация элемента Select2--}}
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }} ">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }} ">


    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }} ">


    <link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.css') }} ">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }} ">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.css') }} ">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <p class="animation__shake"> Магазин в интернете</p>
  </div>
  
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
<!-- d-flex justify-content-between - перемещает кнопку Выйти в правую сторону -->
        <div class="col-12 d-flex justify-content-between">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>        
        <ul class="navbar-nav">            
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <input class="btn btn-outline-primary" type="submit" value="Выйти">
                </form>
            </li>
        </ul>
    </nav>   
    </div>
    
            @include('admin.includes.sidebar')
            @yield('content')
     </div>
 
     <div>  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-{{ now()->year }} <a href="{{ route('admin.main.index') }}">Магазин в интернете</a>.</strong>
    Все права защищены.
  </footer>
  </div>
           <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<<<<<<< HEAD
 
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-{{ now()->year }} <a href="{{ route('main.index') }}">Блог</a>.</strong>
        Все права защищены.
    </footer>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
=======
<!-- ./wrapper -->
>>>>>>> 261de0c (24/03/2023)


            <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
            <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
{{--            активация элемента Select2--}}
            <script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
            <script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button)
            </script>
            <script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
            <script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
            <script src="{{ asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
            <script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
            <!-- AdminLTE App -->
            <script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
            {{--            подключаем панель редактирования--}}
            <script>
                $(document).ready(function () {
                    $('#summernote').summernote({
                        toolbar: [
                            // [groupName, [list of button]]
                            ['style', ['bold', 'italic', 'underline', 'clear']],
                            ['font', ['strikethrough', 'superscript', 'subscript']],
                            ['fontsize', ['fontsize']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['height', ['height']]
                        ]
                    });
                });
                $(function () {
                    bsCustomFileInput.init();
                });
                //активация элемента Select2
                $('.select2').select2()
            </script>
{{--            меняем надпись Browse еа кнопке загрузки картинок на ...--}}
            <style>
                .custom-file-input:lang(en)~.custom-file-label::after {
                    content: "...";
                }
            </style>
</body>
</html>
