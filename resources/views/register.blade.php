<!-- register -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>News</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>body {font:180% "Trebuchet MS", sans-serif;}</style>
    </head>
    <body>
        <form method="post" action="/member" class="form-horizontal ">
            @csrf
            <p class="h3 mb-4 text-center">Register</p>
            <fieldset>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="name"></label>
                    <div class="col-md-4">
                        <input id="name" name="name" type="text" placeholder="your name" class="form-control input-md">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email"></label>
                    <div class="col-md-4">
                        <input id="email" name="email" type="text" placeholder="e-mail" class="form-control input-md">
                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="password"></label>
                    <div class="col-md-4">
                        <input id="password" name="password" type="password" placeholder="password" class="form-control input-md">
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for=""></label>
                    <div class="col-md-4">
                        <button id="" name="" class="btn btn-success btn-block my-4">Register</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </body>
</html>
