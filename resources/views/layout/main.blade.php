<!-- layout main -->
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

@yield('head')

</head>
<body>
    <div class="container">
        <table border="0" width="100%">
            <tr>
                <td valign="center"><h2>NEWS</h2></td>
                <td align="right" valign="bottom">
                    <a href="/" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-home"></span> Home</a>

                    @if (Session::has('member_id'))
                        @if (Session::get('rank')==1)
                        <a href="/category" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-cog"></span> Setting</a>
                        @endif
                    <a href="/signOut" class="btn btn-md btn-warning "><span class="glyphicon glyphicon-log-out"></span> Sign out</a>&nbsp;
                    @else
                    <a href="/signIn" class="btn btn-md btn-warning "><span class="glyphicon glyphicon-log-in"></span> Sign in</a>&nbsp;
                    @endif
                </td>
            </tr>
            <tr>
                <td valign="bottom">
                    @if (Session::has('member_id'))
                    <p>&nbsp;Hi~ {{Session::get('member_name')}}</p>
                    @else
                    <p>&nbsp;Hi~ Guest</p>
                    @endif
                </td>
            </tr>
        </table>

<!-- Search input
<div class="form-group">-->
<br>
<form method="post" action="/">
@csrf
<div class="col-md-4">
    <input id="keyword" name="keyword" type="search" placeholder="title keyword" class="form-control input-md">
</div>
<button type="submit" class="btn btn-md btn-default"><span class="glyphicon glyphicon-search"></span></button>
</form>

@yield('content')

    </div>
    <br><br><br>
</body>
</html>
