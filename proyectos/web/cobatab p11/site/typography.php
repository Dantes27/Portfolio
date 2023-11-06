<!DOCTYPE html>
<html class="wide wow-animation" lang="en-es">

<head>
  <!-- Site Title-->
  <title>Typography</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/icon_p11.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic">
  <link rel="stylesheet" href="fonts/fontawesome-free-6.1.1-web/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
        src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
  </div>
  <!-- PANTALLA DE CARGA-->
  <div id="page-loader">
    <?php
			include_once "preloaderr.php";
		?>
  </div>

  <!-- Page-->
  <div class="page">
    <!-- HEADER-->
    <header class="section page-header">
      <?php
        require_once('header.php');
      ?>
    </header>

    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image.jpg);">
      <div class="shell">
        <h1 class="breadcrumbs-custom__title">Typography</h1>
        <ul class="breadcrumbs-custom__path">
          <li><a href="index.html">Home</a></li>
          <li class="active">Typography</li>
        </ul>
      </div>
    </section>

    <!-- Base typography-->
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range range-50">
          <div class="cell-md-10 cell-lg-8">
            <ul class="list-xl">
              <li>
                <h1>H1 Heading</h1>
                <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will
                  find exactly what he/she is looking for. With advanced features of activating account and new login
                  widgets, you will definitely have a great experience of using our web page.</p>
              </li>
              <li>
                <h2>H2 Heading</h2>
                <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will
                  find exactly what he/she is looking for. With advanced features of activating account and new login
                  widgets, you will definitely have a great experience of using our web page.</p>
              </li>
              <li>
                <h3>H3 Heading</h3>
                <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will
                  find exactly what he/she is looking for. With advanced features of activating account and new login
                  widgets, you will definitely have a great experience of using our web page.</p>
              </li>
              <li>
                <h4>H4 Heading</h4>
                <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will
                  find exactly what he/she is looking for. With advanced features of activating account and new login
                  widgets, you will definitely have a great experience of using our web page.</p>
              </li>
              <li>
                <h5>H5 Heading</h5>
                <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will
                  find exactly what he/she is looking for. With advanced features of activating account and new login
                  widgets, you will definitely have a great experience of using our web page.</p>
              </li>
              <li>
                <h6>H6 Heading</h6>
                <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will
                  find exactly what he/she is looking for. With advanced features of activating account and new login
                  widgets, you will definitely have a great experience of using our web page.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Blockquote-->
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range range-50">
          <div class="cell-md-10 cell-lg-8">
            <h2>Blockquote</h2>
            <article class="quote-primary">
              <div class="quote-primary__body">
                <svg class="quote-primary__mark" version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg"
                  x="0px" y="0px" width="21px" height="15px" viewbox="0 0 21 15" overflow="scroll" xml:space="preserve"
                  preserveAspectRatio="none">
                  <path
                    d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                                   c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                                   C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                                   c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h2.734l-2.382,6.37                                   C20.106,7.145,20.987,8.493,20.987,10.412z">
                  </path>
                </svg>
                <div class="quote-primary__text">
                  <p class="q">Welcome to our wonderful world. We sincerely hope that each and every user entering our
                    website will find exactly what he/she is looking for. With advanced features of activating account
                    and new login widgets, you will definitely have a great experience of using our web page.</p>
                </div>
              </div>
              <div class="quote-primary__footer">
                <p class="heading-4 quote-primary__cite">Dennis Williams</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- HTML Text Elements-->
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range">
          <div class="cell-md-10 cell-lg-8">
            <h2>HTML Text Elements</h2>
            <p class="text-block"><span>Welcome to our wonderful world.</span><span class="text-bold">This is a bold
                text</span>
              <mark>This is a highlighted text</mark><span>We sincerely hope that each and every user entering our
                website will find exactly what he/she is looking for. With advanced features of activating account and
                new login</span><span class="tooltip-custom" data-toggle="tooltip" data-placement="top"
                title="Tooltip">Tooltips</span><span>widgets, you will definitely have a great experience of using our
                web page.</span><span class="text-strike">This is a strikethrough text</span><span
                class="text-underline">This is an underlined text.</span><a>Link</a><a class="link-hover">Hover
                link</a><a class="link-active">Press link</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Unordered List-->
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range range-50">
          <div class="cell-lg-10">
            <h2>Unordered List</h2>
            <p>We specialize in a variety of services. Our aim is to deliver the top level of customer service based on
              your requests.</p>
            <ul class="list-marked">
              <li>Consulting</li>
              <li>Customer Service</li>
              <li>Innovation</li>
              <li>Management</li>
              <li>Ethics</li>
            </ul>
            <p>We hope that with our services you will receive the most personalized help in purchasing any kind of
              products you are looking for.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Ordered List-->
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range range-50">
          <div class="cell-lg-10">
            <h2>Ordered List</h2>
            <p>We specialize in a variety of services. Our aim is to deliver the top level of customer service based on
              your requests.</p>
            <ol class="list-ordered">
              <li>Consulting</li>
              <li>Customer Service</li>
              <li>Innovation</li>
              <li>Management</li>
              <li>Ethics</li>
            </ol>
            <p>We hope that with our services you will receive the most personalized help in purchasing any kind of
              products you are looking for.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Icon List-->
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range">
          <div class="cell-xs-12">
            <h2>Icon List</h2>
            <div class="range range-30 range-center">
              <div class="cell-xs-10 cell-sm-6 cell-md-4">
                <article class="box-minimal">
                  <div class="box-minimal__icon fa fa-thumbs-up"></div>
                  <h3 class="box-minimal__title">Best Service</h3>
                  <div class="box-minimal__divider"></div>
                  <div class="box-minimal__text">Our mission is to attract and retain customers by providing Best in
                    Class solutions and fostering a profitable, disciplined culture of safety, service, and trust.</div>
                </article>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-4">
                <article class="box-minimal">
                  <div class="box-minimal__icon fa fa-group"></div>
                  <h3 class="box-minimal__title">Reputation</h3>
                  <div class="box-minimal__divider"></div>
                  <div class="box-minimal__text">We have established a strong presence in the industry. Our
                    award-winning services earn a reputation for quality and excellence that few can rival.</div>
                </article>
              </div>
              <div class="cell-xs-10 cell-sm-6 cell-md-4">
                <article class="box-minimal">
                  <div class="box-minimal__icon fa fa-lock"></div>
                  <h3 class="box-minimal__title">Safety & Security</h3>
                  <div class="box-minimal__divider"></div>
                  <div class="box-minimal__text">Safety for our employees, customers and the community we work with will
                    always remain our primary focus in all the policies, procedures and programs.</div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Centered-->
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range">
          <div class="cell-md-10 cell-lg-8">
            <h2>Image Centered</h2>
            <figure class="figure-light"><img class="img-centered" src="images/typography-1-770x485.jpg" alt=""
                width="770" height="485" />
              <figcaption>
                <p>Wedding Photo</p>
              </figcaption>
            </figure>
            <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find
              exactly what he/she is looking for. With advanced features of activating account and new login widgets,
              you will definitely have a great experience of using our web page.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Left-->
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range">
          <div class="cell-md-10 cell-lg-8">
            <h2>Image Left</h2>
            <p><img src="images/typography-1-770x485.jpg" alt="" width="770" height="485" />Welcome to our wonderful
              world. We sincerely hope that each and every user entering our website will find exactly what he/she is
              looking for. With advanced features of activating account and new login widgets, you will definitely have
              a great experience of using our web page.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Right-->
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range">
          <div class="cell-md-10 cell-lg-8">
            <h2>Image Right</h2>
            <p><img class="img-right" src="images/typography-1-770x485.jpg" alt="" width="770" height="485" />Welcome to
              our wonderful world. We sincerely hope that each and every user entering our website will find exactly
              what he/she is looking for. With advanced features of activating account and new login widgets, you will
              definitely have a great experience of using our web page.
            </p>
          </div>
        </div>
      </div>
    </section>

        <!-- FOOTER -->
        <footer class="footer-centered section bg-gray-darker">
            <?php
                require_once('footer.php');
            ?>
        </footer>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>