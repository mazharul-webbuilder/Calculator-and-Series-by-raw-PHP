<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<section class="setHeight">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center text-danger">Series</h1>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <label for="">First Number</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="starting_number">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <label for="">Ending Number</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="ending_number">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <label for="">Your Series</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea class="form-control"><?php
                                            foreach ($myArray as $value)
                                            {
                                                echo $value. ' ';
                                            }
                                        ?>
                                    </textarea>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-3"></div>
                                <div class="col-md-7">
                                    <input type="submit" name="seriesBtn" class="btn btn-danger">
                                </div>
                                <div class="col-md-2">
                                    <a href="action.php?page=home" class="btn btn-danger">Calculator</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script src="assets/js/jquery-3.6.0.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>