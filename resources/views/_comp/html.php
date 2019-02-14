<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie database</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

    <div id="page">

        <?= $header ?>

        <main>
        <?php var_dump($res) ?>
            <section>
                <?= $content ?>
            </section>

        </main>

        <?= $footer ?>


    </div>
    
</body>
</html>