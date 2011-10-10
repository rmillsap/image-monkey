<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>

      <div class="container">

          <header class="span-24">
              <div class="logo span-10">
                  <h1>Image Monkey!</h1>
                  <em>Web-interface for image processing/caching</em>
              </div>

              <nav class="span-24">
                  <ul>
                      <li>
                          <?php echo link_to("How It Works", "/") ?>
                      </li>
                      <li>
                          <?php echo link_to1("URL Builder", "/url-builder") ?>
                      </li>
                      <li>
                          <?php echo link_to1("Sign Up FREE", "/signup") ?>
                      </li>
                      <li>
                          <a href="https://github.com/rmillsap/image-monkey">GitHub</a>
                      </li>
                  </ul>
              </nav>

          </header>

          <div class="span-24">
                <?php echo $sf_content ?>
          </div>

      </div>

      <footer>

          <p>Image Monkey is the creation of Robby Millsap, Chief Webmonkey for Mission Solutions Group.
              For questions/comments/praises/cash/awards in relation to Image Monkey contact Robby through
              his blog at <a href="http://robbymillsap.com">http://robbymillsap.com</a>.  Robby is also on
              Twitter like everybody (<a href="http://twitter.com/blessthisbass">@blessthisbass</a>).</p>

          <p>
              <img src="http://www.gravatar.com/avatar/<?php echo md5("info@robbymillsap.com") ?>" />
          </p>

      </footer>

  </body>
</html>
