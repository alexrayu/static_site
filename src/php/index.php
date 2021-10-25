<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'includes/system-head.php'; ?>
    <meta name="description" content="Put your description here.">

    <title>Company Name | Company slogan</title>
  </head>

  <body>

    <div class="layout-page">
    <?php include 'includes/page-header.php'; ?>

      <?php // This whole section pushes the footer down. ?>
      <div class="flex-grow">

        <?php // A container has left and right margins set. ?>
        <div class="container">
          <h1>Company Name</h1>
          <p>Some content. A <a href="#">link</a>.</p>
        </div>

      <?php // Accordion element. ?>
        <div class="accordion">
        <div class="element">
          <div class="header">
            <div class="trigger flex-grow">
              <div class="arrow"></div><div class="label flex-grow">Item 1</div>
            </div>
            <div class="text">Additional text here.</div>
          </div>
          <div class="content container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae fugiat
              debitis voluptatibus in, rem nihil itaque deserunt facere porro laborum.</p>
          </div>
        </div>
        <div class="element">
          <div class="header">
            <div class="trigger flex-grow">
              <div class="arrow"></div><div class="label flex-grow">Item 2</div>
            </div>
          </div>
          <div class="content container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae fugiat
              debitis voluptatibus in, rem nihil itaque deserunt facere porro laborum.</p>
          </div>
        </div>
      </div>

      </div>

      <?php include 'includes/page-footer.php'; ?>
    </div>

    <?php include 'includes/main-menu.php'; ?>

  <?php include 'includes/system-foot.php'; ?>
  </body>
</html>
