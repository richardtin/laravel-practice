<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Practice - Form</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <style>
        .table > tbody > tr > td {
            vertical-align: middle;
        }
        .table-borderless tbody tr td, .table-borderless tbody tr th, .table-borderless thead tr th {
            border: none;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="row">
        <div class="col-sm-3">
            <table class="table table-borderless">
                <tr class="success"><td>BenQ Projector Calculator</td></tr>
                <tr><td>
                    <table class="table table-condensed">
                        <tr>
                            <td>Unit:</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>Installation Type:</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Desktop <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Desktop</a></li>
                                        <li><a href="#">Ceiling</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td></tr>
                <tr class="success"><td>Room Dimension</td></tr>
                <tr><td>
                    <table class="table table-condensed">
                        <tr>
                            <td>
                                <label class="sr-only" for="exampleInputHeight">Height</label>
                                <div class="input-group">
                                    <div class="input-group-addon">H:</div>
                                    <input type="text" class="form-control" id="exampleInputHeight" placeholder="100.0">
                                </div>
                            </td>
                            <td>
                                <label class="sr-only" for="exampleInputWidth">Width</label>
                                <div class="input-group">
                                    <div class="input-group-addon">W:</div>
                                    <input type="text" class="form-control" id="exampleInputWidth" placeholder="100.0">
                                </div>
                            </td>
                            <td>
                                <label class="sr-only" for="exampleInputLength">Length</label>
                                <div class="input-group">
                                    <div class="input-group-addon">L:</div>
                                    <input type="text" class="form-control" id="exampleInputLength" placeholder="100.0">
                                </div>
                            </td>
                        </tr>
                    </table>
                </td></tr>
                <tr class="success"><td>Projector</td></tr>
                <tr><td>
                    <table class="table table-condensed table-borderless">
                        <tr>
                            <td>Model Type:</td>
                            <td>
                                <div class="btn-group col-sm-12">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Type 1 <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Type 1</a></li>
                                        <li><a href="#">Type 2</a></li>
                                        <li><a href="#">Type 3</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Type 4</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Model Name:</td>
                            <td>
                                <div class="btn-group col-sm-12">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        DW883UST <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">DW883UST</a></li>
                                        <li><a href="#">Name 2</a></li>
                                        <li><a href="#">Name 3</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Name 4</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Lense:</td>
                            <td>
                                <div class="btn-group col-sm-12">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        0.23 <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">0.23</a></li>
                                        <li><a href="#">0.24</a></li>
                                        <li><a href="#">0.25</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">0.26</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Aspect Ratio:</td>
                            <td>
                                <div class="btn-group col-sm-12">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        16:10 <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">16:10</a></li>
                                        <li><a href="#">16:9</a></li>
                                        <li><a href="#">4:3</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td></tr>
                <tr class="success"><td>Screen Size</td></tr>
                <tr><td>
                    <table class="table table-condensed">
                        <tr>
                            <td>Diagnoal:</td>
                            <td>
                                <label class="sr-only" for="screenDiagnoal">Diagnoal</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="screenDiagnoal" placeholder="86.0">
                                    <div class="input-group-addon">inch</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Width:</td>
                            <td>
                                <label class="sr-only" for="screenWidth">Width</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="screenWidth" placeholder="72.9">
                                    <div class="input-group-addon">inch</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Height:</td>
                            <td>
                                <label class="sr-only" for="screenHeight">Height</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="screenHeight" placeholder="45.6">
                                    <div class="input-group-addon">inch</div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td></tr>
                <tr class="success"><td>Projector to Screen</td></tr>
                <tr><td>
                    <table class="table table-condensed">
                        <tr>
                            <td>Distance:</td>
                            <td>
                                <label class="sr-only" for="screenDistance">Distance</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="screenDistance" placeholder="72.8">
                                    <div class="input-group-addon">inch</div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td></tr>
            </table>
        </div>
        <div class="col-sm-9">
            <h1>Content</h1>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>
