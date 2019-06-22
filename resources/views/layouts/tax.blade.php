<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KCCA TAX COLLECTION</title>
    <link rel="shortcut icon" href="/img/ndebi-tech-favi-blue.png" type="image/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/static/css/app.css">
    <link rel="stylesheet" href="/static/css2/style.css">
    <link rel="stylesheet" href="/static/css2/font-awesome.min.css">
    <link rel="stylesheet" href="/backend/css/AdminLTE.min.css">

    <link rel="stylesheet" href="/backend/plugins/iCheck/square/blue.css">

</head>
<body>
  <div>

        
      

 

 
            @yield('content')


   

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="copyright">&copy; 2019 KCCATAXCOLLECTION</p>
                </div>
                <div class="col-md-4">
                    <nav>
                        <ul class="social-icons">
                            <li><a href="#" class="i fa fa-facebook"></a></li>
                            <li><a href="#" class="i fa fa-twitter"></a></li>
                            <li><a href="#" class="i fa fa-google-plus"></a></li>
                            <li><a href="#" class="i fa fa-github"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
  </div>

    {{-- <script src="/js/bootstrap.min.js"></script> --}}
    <script src="/static/js/app.js"></script>
    <script src="/static/js2/tax.js"></script>
    <script src="/static/js/jquery.min.js"></script>

    <script src="backend/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>
</html>
