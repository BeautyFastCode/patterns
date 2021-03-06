<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>MVC Design Pattern!</title>

    <style>
        body {
            margin-top: 1rem;
        }
        h2 span {
            font-size: smaller;
            color: lightgray;
        }
        .card {
            margin-bottom: 1rem;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>An example of the Model View Controller - Design Pattern.</h1>

    <?php if ('/' !== $_SERVER['REQUEST_URI']) {
    ?>
        <a href="/" class="btn btn-primary">All Posts </a>
    <?php
}   ?>

    <hr>
</div>
