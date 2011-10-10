<h1>How It Works</h1>

<p>Image Monkey is a web-based interface for processing images through image
   tools like <em><a href="http://www.imagemagick.org/script/index.php">Image Magick</a></em>.</p>

<h1>To Use Image Monkey</h1>
<p><?php echo link_to1("Sign Up", "/signup") ?> for a FREE account to get your <strong>Request Key</strong>.  Then you will be able to
    make Image Monkey Requests like this</p>

<pre>
    http://imgmky.com/gen?key=<font class="color-one">MYREQUESTKEY</font>&url=<font class="color-two"><?php echo urlencode("http://www.example.com/image.jpg") ?></font>&size=<font class="color-three">100x100</font>
</pre>

in your website's image tag like this

<pre>
    &lt;html&gt;
        &lt;body&gt;
            <strong>&lt;img
                src="http://imgmky.com/gen?key=MYREQUESTKEY&url=http%3A%2F%2Fwww.example.com%2Fimage.jpg&size=100x100" /&gt;</strong>
        &lt;/body&gt;
    &lt;/html&gt;
</pre>

<h2>Image URL Request Protocol</h2>

<ol class="tutorial">
    <li>
        <font class="color-one">RED (key)</font>: the generated RequestKey created when you sign up
    </li>
    <li>
        <font class="color-two">GREEN (url)</font>: the encoded URL of the image
        <ul style="list-style-type:none;margin-top:2em;">
            <li><h3>How To Encode 101</h3></li>
            <li>
                <pre>
    // Javascript
    encodeURI( 'http://www.example.com/image.jpg' );

    // PHP
    urlencode( 'http://www.example.com/image.jpg' );

    // Ruby on Rails
    CGI::escape( 'http://www.example.com/image.jpg' )

    // Perl
    uri_escape( 'http://www.example.com/image.jpg' );</pre>
            </li>
        </ul>

        For more help on encoding URL's try the <?php echo link_to1( "URL Builder", "/url-builder") ?>

    </li>
    <li>
        <font class="color-three">BLUE (size)</font>: the dimensions of the new JPG image you would like served from Image Monkey
    </li>
</ol>

