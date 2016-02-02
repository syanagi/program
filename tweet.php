<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="css/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Twitter風掲示板</a>
        </div>
        
      </div>
    </nav>

        <div class="col-md-3">
          ツイート内容を入力してください。<br> 
          <form action ="tweet.php" method="GET">
            <textarea name="contents" cols="40" rows="4"></textarea>
            <br>
            <input type="submit" value="ツイート" class="btn btn-primary" >
          </form>
        </div>

        <div class="col-md-9">

          <div class="table-responsive">
            <p>ここにツイートを表示する。以下はサンプル。</p>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>名前</th>
                  <th>投稿内容</th>
                  <th>投稿時間</th>
                  <th>追加項目</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>千葉順</td>
                  <td>
                    <?php
                      $contents = $_GET["contents"];
                      echo $contents;

                      //実際は echo $_GET["contents"]; でもOK
                    ?>
                  </td>
                  <td>2014-11-22 11:00:12</td>
                  <td>2014-11-22 11:00:12</td>
                </tr>
                <tr>
                  <td>千葉順</td>
                  <td>頑張って勉強していきましょう！</td>
                  <td>2014-11-22 11:00:12</td>
                  <td>2014-11-22 11:00:12</td>
                </tr>
                <tr>
                  <td>千葉順</td>
                  <td>サンプル投稿4！</td>
                  <td>2014-11-22 09:22:33</td>
                </tr>
                <tr>
                  <td>千葉順</td>
                  <td>サンプル投稿3！</td>
                  <td>2014-11-22 09:22:30</td>
                </tr>
                <tr>
                  <td>千葉順</td>
                  <td>サンプル投稿2！</td>
                  <td>2014-11-22 09:22:24</td>
                </tr>
                <tr>
                  <td>千葉順</td>
                  <td>サンプル投稿！</td>
                  <td>2014-11-22 09:22:20</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="css/dist/js/bootstrap.min.js"></script>
    <script src="css/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="css/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
