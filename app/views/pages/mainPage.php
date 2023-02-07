<?php require APPROOT . '/views/inc/header.php'; ?>    
<!-- <h1>Create a user</h1>
<br />
<h2>provided <?php echo ':' . $data['user'] ?></h2> -->
<section id="main-page-title" class="page-title">
    <h1>The <span>Ultimate</span> Shopping Experience</h1>
</section>
<section id="featured-product">
<div id="featured-product-image"> 
</div>
<div class="product">
    <div class="product-headline">
    <div class="product-title">Luxury Memory Foam Mattress</div>
    <div class="product-subtitle">Sleep Like a King with Our Comfortable and Supportive Mattress</div>
    </div>
    <div class="product-image">
        <img src=<?php echo URLROOT . "/public/img/skate.png" ?> alt="" srcset="">
        <div class="product-price">
            <div class="product-old-price">1500.99$</div>
            <div class="product-offer-price">998.50$</div>
        </div>
    </div>
    <div class="product-action-buttons">
        <button class="buy-now-btn">Buy Now 
        <div class="box-div"></div>
        </button>
        <button class="see-details-btn">See Details</button>
    </div>
</div>
</section>
<section id="best-products">
<h1>Best Products</h1>
</section>

<div id="div2" style="background:red;height:5000px;position:sticky;z-index:-5;width:100vw;"></div>


<?php require APPROOT . '/views/inc/footer.php'; ?>    
      