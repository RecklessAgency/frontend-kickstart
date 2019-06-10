<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>

</head>
<body>
<h1 class="mt-4">Hero Full Screen</h1>
<?php include '../frontend-snippets/components/hero-full-screen/hero-full-screen.html'; ?>
<h1 class="mt-4">Hero Internal</h1>
<?php include '../frontend-snippets/components/hero-internal/hero-internal.html'; ?>
<h1 class="mt-4">Page Title</h1>
<?php include '../frontend-snippets/components/page-title/page-title.html'; ?>
<h1 class="mt-4">Article</h1>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/article/card-article.html'; ?>
        </div>
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/article/card-article.html'; ?>
        </div>
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/article/card-article.html'; ?>
        </div>
    </div>
</div>
<h1 class="mt-4">Product</h1>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/product/card-product.html'; ?>
        </div>
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/product/card-product.html'; ?>
        </div>
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/product/card-product.html'; ?>
        </div>
    </div>
</div>
<h1 class="mt-4">Category</h1>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/category/card-category.html'; ?>
        </div>
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/category/card-category.html'; ?>
        </div>
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/category/card-category.html'; ?>
        </div>
    </div>
</div>
<h1 class="mt-4">Testimonial</h1>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/testimonial/card-testimonial.html'; ?>
        </div>
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/testimonial/card-testimonial.html'; ?>
        </div>
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/testimonial/card-testimonial.html'; ?>
        </div>
    </div>
</div>

<h1 class="mt-4">Testimonial (Stars)</h1>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/testimonial/card-testimonial-stars.html'; ?>
        </div>
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/testimonial/card-testimonial-stars.html'; ?>
        </div>
        <div class="col-12 col-lg-4">
            <?php include '../frontend-snippets/components/card/testimonial/card-testimonial-stars.html'; ?>
        </div>
    </div>
</div>

<h1 class="mt-4">Card Block</h1>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card-block">
                <div class="card-carousel row"
                     data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
                    <div class="col"><?php include '../frontend-snippets/components/card/product/card-product.html'; ?></div>
                    <div class="col"><?php include '../frontend-snippets/components/card/product/card-product.html'; ?></div>
                    <div class="col"><?php include '../frontend-snippets/components/card/product/card-product.html'; ?></div>
                    <div class="col"><?php include '../frontend-snippets/components/card/product/card-product.html'; ?></div>
                    <div class="col"><?php include '../frontend-snippets/components/card/product/card-product.html'; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<h1 class="mt-4">Card Block</h1>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card-block">
                <div class="card-carousel row" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
                    <div class="col"><?php include '../frontend-snippets/components/card/product/card-product.html'; ?></div>
                    <div class="col"><?php include '../frontend-snippets/components/card/product/card-product.html'; ?></div>
                    <div class="col"><?php include '../frontend-snippets/components/card/product/card-product.html'; ?></div>
                    <div class="col"><?php include '../frontend-snippets/components/card/product/card-product.html'; ?></div>
                    <div class="col"><?php include '../frontend-snippets/components/card/product/card-product.html'; ?></div>
                    <div class="col"><?php include '../frontend-snippets/components/card/product/card-product.html'; ?></div>
                    <div class="col"><?php include '../frontend-snippets/components/card/product/card-product.html'; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>