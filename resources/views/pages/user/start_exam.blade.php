<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Làm bài kiểm tra</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/frontend/Pageadmin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('public/frontend/Pageadmin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet"
        href="{{ asset('public/frontend/Pageadmin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('public/frontend/Pageadmin/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/frontend/Pageadmin/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{{ asset('public/frontend/Pageadmin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet"
        href="{{ asset('public/frontend/Pageadmin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('public/frontend/Pageadmin/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('public/frontend/Pageadmin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/frontend/Pageadmin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/frontend/Pageadmin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">


    <link rel="shortcut icon" href="{{ asset('public/upload/logo.png') }}" type="image/x-icon">


    <!-- CodeMirror -->
    <link rel="stylesheet" href="{{ asset('public/frontend/Pageadmin/plugins/codemirror/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/Pageadmin/plugins/codemirror/theme/monokai.css') }}">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="{{ asset('public/frontend/Pageadmin/plugins/simplemde/simplemde.min.css') }}">

</head>

<body>




    <div class="container" style="margin-top:100px ">

        {{-- <div class="col-md-12">
                <form class="card-body" action="">
                    <div class="form-group">
                        <p>Please select your gender:</p>
                        <label>Bài kiểm tra</label>
                        <div>
                            <input class="form-check-input" name="exam[]" style="width: auto;" type="radio" value="">
                            <label class="form-check-label">a</label>
                        </div>
                    </div>
                </form>
            </div> --}}


        <div class="card card-warning">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h2>Bài kiểm tra {{ $exam->Ten_bai_kiem_tra }}</h2>
                    </div>
                    <div class="col-6" style="vertical-align: middle">
                        <h2 class="card-title" style="float: right; font-size:25px">Thời gian còn <span id="timer">{{ $exam->Thoi_gian_lam }} : 00</span>
                            giây!</h2>
                        <input type="hidden" value="{{ $exam->Thoi_gian_lam }}" id="time_start">
                        {{-- <input type="hidden" value="1" id="time_start"> --}}

                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{URL::to('/send-exam/'.$exam->Ma_bai_kiem_tra)}}" method="post">
                    @csrf
                    <div class="row">
                        <?php $i =0;?>
                        @foreach ($question_list as $key =>$ql )
                        <div class="col-sm-6">
                            <!-- radio -->                            
                            <label>Câu <?php $i++; echo $i;?> <?php echo $ql->Ten_cau_hoi;?></label>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="{{$ql->Ma_cau_hoi}}" value="A">
                                    <label class="form-check-label"> <?php echo $ql->Lua_chon_a?></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="{{$ql->Ma_cau_hoi}}" value="B">
                                    <label class="form-check-label"> <?php echo $ql->Lua_chon_b?></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="{{$ql->Ma_cau_hoi}}" value="C">
                                    <label class="form-check-label"> <?php echo $ql->Lua_chon_c?></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="{{$ql->Ma_cau_hoi}}" value="D">
                                    <label class="form-check-label"> <?php echo $ql->Lua_chon_d?></label>
                                </div>     
                                {{-- <input type="text" name="{{$ql->Ma_cau_hoi}}" value="{{$ql->Ma_cau_hoi}}">                   --}}
                            </div>
                        </div>
                        @endforeach
                     
                    </div>
                    <button type="submit" id="send" class="btn btn-primary">Gửi</button>
                </form>
            </div>
            <!-- /.card-body -->

        </div>
    </div>

    <!-- / Blog  -->

    <!-- jQuery library -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src="{{ asset('public/frontend/HomeProperty/js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('public/frontend/HomeProperty/js/bootstrap.js') }}"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="{{ asset('public/frontend/HomeProperty/js/slick.js') }}"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="{{ asset('public/frontend/HomeProperty/js/nouislider.js') }}"></script>
    <!-- mixit slider -->
    <script type="text/javascript" src="{{ asset('public/frontend/HomeProperty/js/jquery.mixitup.js') }}"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="{{ asset('public/frontend/HomeProperty/js/jquery.fancybox.pack.js') }}">
    </script>
    <!-- Custom js -->
    <script src="{{ asset('public/frontend/HomeProperty/js/custom.js') }}"></script>


    <script>
        var time = document.getElementById('time_start').value;

        window.onload = function() {
            var minute = time - 1;
            var sec = 59;
            setInterval(function() {
                document.getElementById("timer").innerHTML = minute + " : " + sec;
                if (minute == -1 && sec == 59) {
                    alert("Thời gian đã hết. Bài của bạn đã được gửi đi");
                    document.getElementById("send").click();
                }
                sec--;
                if (sec == -1) {
                    minute--;
                    sec = 59;
                }
            }, 1000);

        }

    </script>
</body>

</html>
