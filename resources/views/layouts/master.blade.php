<!DOCTYPE html>
    <head>
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                @section('header')
                    Tabular Data Demo
                @show
            </div>
            <div class="menu">
                <div>
                    <button class="button" id="getData" role="button">Get Some Data</button>
                </div>
            </div>
            <div class="content">
                @section('content')
                    
                @show
            </div>
            <div class="footer">This is the footer</div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    </body>
</html>

