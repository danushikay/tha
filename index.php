<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('header.php') ?>
</head>

<body>

    <!-- Navigation -->
    <?php include('site_header.php') ?>

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/slider1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Our Temple</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/slider1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Our Temple</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/slider1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Our Temple</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- Page Content -->
    <div class="container home-box">

        
            <div class="col-lg-12">
                <h1 class="text-center">Welcome to Temple</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a nisi arcu. Vivamus vestibulum venenatis eleifend. Vestibulum in felis eget leo suscipit molestie. Sed et pellentesque justo, ac hendrerit lectus. In pharetra lorem nibh, at dignissim magna pretium eget. Etiam mollis congue nulla ut pellentesque. Fusce tortor erat, mattis a imperdiet id, fringilla a tellus. Vivamus tempor suscipit accumsan. Nullam ac lacus non sapien semper ornare vel sit amet nisl.</p>
            </div>
        

       

        <!-- Footer -->
        
    </div>
    <?php include('site_footer.php') ?>

    <!-- /.container -->

   <?php include('footer.php') ?>

</body>

</html>
