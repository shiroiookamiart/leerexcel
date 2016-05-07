<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Procesar excel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <style>
            body{
                background: #8FBCDB;
                padding: 0;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div class="nav navbar navbar-inverse">
        </div>
        <div class="content">
            <div class="row" style="margin: 0">
                <div class="col-sm-3">
                    
                </div>
                <div class="col-sm-6">
                    <form action="#" id="form-excel" class="form-horizontal" method="POST" name="form-excel" enctype="multipart/form-data" target="_self">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input title="Subir Archivo" type="file" name="file" id='file' class="btn btn-danger" required>
                            </div>
                            <div class="col-sm-2">&nbsp</div>
                            <div class="col-sm-4">
                                <button class="btn btn-success">Subir</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Estatus</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabla">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3">
                    
                </div>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="./index.js"></script>
</html>