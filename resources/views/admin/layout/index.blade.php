<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>Admin-Quản lý</title>

    <!-- Bootstrap Core CSS -->
    <link href="admin_layout/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin_layout/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_layout/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_layout/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="admin_layout/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin_layout/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('admin.layout.header')

        <!-- Page Content -->
        @yield('content')
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin_layout/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin_layout/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin_layout/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin_layout/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="admin_layout/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="admin_layout/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    <script type="text/javascript" language="javascript" src="admin_layout/ckeditor/ckeditor.js" ></script>
    <script type="text/javascript">
        //function them va sua
        function alertBox(form, text)
        {
            form.addEventListener('submit', function(event) {
            event.preventDefault();
            if(confirm(text))
            {
                form.submit();
            }
        });
        }

        //function xoa
    </script>
    <script type="text/javascript">
        
        $(document).ready(function(){
            $('.xoa').on('click', function(){
                if(confirm("Bạn có chắc chắn muốn xóa?"))
            {
                return true;
            }
            else
            {
                return false;
            }
            });
            
        });
            
    </script>
    @yield('script')
</body>

</html>
