<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>test</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">見積一覧画面
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                </div>
            </div>
        </nav>


    </header>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <h2>見積一覧</h2>
                @if (session('err_msg'))
                    <p class="text-danger">
                        {{ session('err_msg') }}
                    </p>
                @endif

                <tr>
                    <th>番号</th>
                    <th>タイトル</th>
                    <th>日付</th>
                    <th></th>
                    <th></th>
                </tr>
            </div>
        </div>



    </div>
    <footer class="footer bg-dark  fixed-bottom">

        <div class="container text-center">
            <span class="text-light">test</span>
        </div>

    </footer>
</body>

</html>
