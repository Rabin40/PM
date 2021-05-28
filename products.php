  
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
  <body>
  <ul class="breadcrumb">
    <li><a href="index.php">Home </a><i class="fas fa-angle-right"></i></li>
    <li><a href="#">Products</a><i class="fas fa-angle-right"></i></li>
    <li><a href="#">Products Item</a></li>
  </ul>
    
    <div class = "wrapper-card">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "images/bakery.jpg"  alt = "">
              <img src = "images/bakery4.jpg" alt = "" >
              <img src = "images/bakery2.jpg" alt = "">
              <img src = "images/bakery.jpg" alt = "">
            </div>
          </div>
          <div class = "img-select" >
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "images/bakery.jpg" alt = "">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "images/bakery4.jpg" alt = "">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "images/bakery2.jpg" alt = "">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "images/bakery.jpg" alt = "">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">Pastry</h2>
          <div class = "product-link">The Cleck Bakery</div>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.5</span>
          </div>

          <div class = "product-price">
            <h2 class = "price">Price: <span>$80.00 </span></h2>
          </div>

          <div class = "product-detail">
            <h2>Short Description: </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente
               architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. </p>
          </div>

          <div class = "purchase-info">
            <input type = "number" min = "1" max = "20" value = "1">
            <button type = "button" class = "btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button>
            <button type = "button" class = "btn">Buy Now</button>
          </div>

          <div class = "social-links">
            <p>Share Via: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class = "wrapper-card">
          <div id="tabs">
              <ul>
                <li><a href="#tabs-1">Description</a></li>
                <li><a href="#tabs-2">Question</a></li>
                <li><a href="#tabs-3">Rewiews</a></li>
              </ul>
            <div id="tabs-1">
              <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. 
                Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. 
                Nam elementum quam ullamcorper ante. Aenean tempor ullamcorper leo. 
                Vivamus sed magna quis ligula eleifend adipiscing. Duis orci.
                Aliquam sodales tortor vitae ipsum.</p>
            </div>
              
            <div id="tabs-2">
                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, 
                  ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, 
                  massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
            </div>
              
            <div id="tabs-3">
                  <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, 
                  pede vel vehicula accumsan, mi neque rutrum erat, 
                  eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad 
                  litora torquent per conubia nostra, per inceptos himenaeos.</p>
            </div>                
          </div>
    </div>


    <script src="js/script.js"></script>
    <script>$( function() {
    $( "#tabs" ).tabs();
  } );</script>
  </body>
</html>