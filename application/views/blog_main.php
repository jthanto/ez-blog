<h1>Blog</h1>

<nav>
    <ul>
        <!-- Insert foreach cat found here -->
        <li>Kategorier</li>
        <li><a href="blog/category/test">test</a></li>
        <li><a href="blog/category/tech">tech</a></li>
        <li><a href="blog/category/off-topic">Off Topic</a></li>
    </ul>
    <ul>
        <li>Verktøy</li>
        <li><a href="blog/write">nytt innlegg</a></li>
    </ul>
</nav>


<?php foreach($posts as $post) {
    // TODO: Fix a preview part of the blog.
    echo "<div class='blog_post'>
        <h3>$post->title</h3>
        <p>$post->content</p>
        <a href='blog/$post->url'>Les mer</a>
    <div class='blog_post'>";
    }
?>
<p>Her kommer bloggen</p>