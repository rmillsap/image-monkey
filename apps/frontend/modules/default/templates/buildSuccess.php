<form class="span-24" method="post">

    <div class="span-4 prepend-2">
        <label for="key">Request Key &rArr;</label>
    </div>

    <div class="span-16">
        <input type="text" class="text-input round" name="key" />
    </div>

    <div class="span-4 prepend-2">
        <label for="url">Image URL &rArr;</label>
    </div>

    <div class="span-16">
        <input type="text" class="text-input round span-10" name="url" />
    </div>

    <div class="span-4 prepend-2">
        <label for="size">Size (ex '100x100') &rArr;</label>
    </div>

    <div class="span-16">
        <input type="text" class="text-input round" name="size" value="100x100"/>
    </div>

    <div class="span-20 prepend-2 prepend-top">
        <input type="submit" value="Show Me" />
    </div>


    <div class="span-24 clearfix prepend-top">

        Image Monkey says...
        <pre>   &lt;img src="<?php if( isset($new_url) ) echo $new_url; ?>" /&gt;</pre>

    </div>


</form>