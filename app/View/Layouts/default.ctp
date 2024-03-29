<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo $this->Html->charset(); ?>

    <title>Base · Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/css/docs.css" rel="stylesheet">
    <link href="/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
</head>

<body data-spy="scroll" data-target=".subnav" data-offset="50">


<!-- Navbar
================================================== -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href=#>Bootstrap</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li class="">
                        <a href='/'>Overview</a>
                    </li>
                    <li class="">
                        <a href="scaffolding">Scaffolding</a>
                    </li>
                    <li class="">
                        <a href="basecss">Base-CSS</a>
                    </li>
                    <li class="">
                        <a href="javascript">JavaScript</a>
                    </li>
                    <li class="">
                        <a href="components">Components</a>
                    </li>
                    <li class="divider-vertical"></li>
                    <li class="">
                        <a href="/">More</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">




			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>



    <!-- Footer
   ================================================== -->
    <footer class="footer">
        <p class="pull-right"><a href=#>Back to top</a></p>

    </footer>

    </div><!-- /container -->



    <!-- Le javascript
   ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/google-code-prettify/prettify.js"></script>
    <script src="/js/bootstrap-transition.js"></script>
    <script src="/js/bootstrap-alert.js"></script>
    <script src="/js/bootstrap-modal.js"></script>
    <script src="/js/bootstrap-dropdown.js"></script>
    <script src="/js/bootstrap-scrollspy.js"></script>
    <script src="/js/bootstrap-tab.js"></script>
    <script src="/js/bootstrap-tooltip.js"></script>
    <script src="/js/bootstrap-popover.js"></script>
    <script src="/js/bootstrap-button.js"></script>
    <script src="/js/bootstrap-collapse.js"></script>
    <script src="/js/bootstrap-carousel.js"></script>
    <script src="/js/bootstrap-typeahead.js"></script>
    <script src="/js/application.js"></script>


</body>
</html>