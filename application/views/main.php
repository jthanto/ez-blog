<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html>
<head>
    <title>EZ-blog - CodeIgniter Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Lato|Oswald" rel="stylesheet">
    <link href="/css/igniter.css" type="text/css" rel="stylesheet" />
    <!-- <link rel="icon" href="/favicon.ico?v=2" /> -->
</head>
<body>
<header>
    <h2>JT's EZ-blog</h2>
    <nav>
        <!-- change this to use anchor($uri, $title, $attributes) -->
        <a href="/home/">Home</a>
        <a href="/away/">Away</a>
        <a href="/away/outdex">Outdex</a>
        <a href="/blog">Blog</a>
    </nav>
</header>
<main>

<?php echo $content ?>

</main>
<footer>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<?php
    foreach($scripts as $script){
        echo '<script src="'.$script.'"></script>';
    }
?>
</body>
</html>