<!doctype html>
<html lang="en">
   <head>


       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title>Gallery for Yoga Teacher Training in Rishikesh India | Mahakaal Yogpeeth Vidya School</title>

        <meta name="description" content="ice to meet you, dear friend. We would love to hear from you. Contact us directly through WhatsApp or fill in the form so we can reach you back.">

        <link rel="preconnect" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
      <link rel="stylesheet" href="css/font.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer">
      <link rel="stylesheet" href="css/main.min.css">


   </head>
   <body>
      <?php include "header.php"?>
      <section id="page-banner" class="contact-us">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <h1 class="banner-common-heading">Gallery</h1>
                      <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </section>
      <section id="about-promo" class="section-gap">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <p class="about-promo-heading" style="margin-bottom:20px">YOGA TEACHER TRAINING PICTURE GALLERY</p>
                  <div class="underline-wrap"><img src="images/new/heading.png" alt="underline icon"  class="underline-icon lazy"></div>
               </div>
            </div>
         </div>
      </section>

      <section id="gallery"  class="container"> 
        <div class="row">
            <div class="col-md-12">
            <?php
// Define the number of items per page
$itemsPerPage = 8;

// Define the total number of items (static in this case)
$totalItems = 8;

// Calculate the total number of pages
$totalPages = ceil($totalItems / $itemsPerPage);

// Get the current page from the query string, default to 1
$currentpage = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the offset for the query
$offset = ($currentpage - 1) * $itemsPerPage;

// Your static content array
$galleryItems = array(
    '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg'
);

// Get the items for the current page
$currentPageItems = array_slice($galleryItems, $offset, $itemsPerPage);

// Output the gallery items
echo '<div id="grid" class="row">';
foreach ($currentPageItems as $item) {
    echo '<div class="mix col-sm-3 margin30 gallery-img">';
    echo '<div class="item-img-wrap">';
    echo '<img src="images/new/' . $item . '" class="img-responsive" alt="workimg">';
    echo '<div class="item-img-overlay">';
    echo '<a href="#" class="show-image"><span></span></a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
echo '</div><!--grid-->';


// Output page information
$startItem = $offset + 1;
$endItem = min($currentpage * $itemsPerPage, $totalItems);
echo '<div class="row gallery-bottom">';
echo '<div class="col-sm-6">';
echo '<ul id="pagination" class="pagination">';
for ($i = 1; $i <= $totalPages; $i++) {
    echo '<li ' . ($currentpage == $i ? 'class="active"' : '') . '><a href="?page=' . $i . '">' . $i . '</a></li>';
}
echo '</ul>';
echo '</div>';
echo '<div class="col-sm-6 text-end">';
echo '<em>Displaying ' . $startItem . ' to ' . $endItem . ' (of ' . $totalItems . ' images)</em>';
echo '</div>';
echo '</div>';
?>

                
            </div>
        </div>
      
    </section>

    
      

      
      
      <?php include "footer.php"?>
      
   <script src="https://kit.fontawesome.com/ca07a9359a.js" crossorigin="anonymous"></script>	
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous" type="cb367e5a83279dff9a131858-text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.7.0/dist/lazyload.min.js"></script>
      
<script src="js/main.min.js"></script>
   
      <script src="https://kit.fontawesome.com/ca07a9359a.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.7.0/dist/lazyload.min.js"></script>
<script>$.validator.addMethod(
  "regex",
  function(value, element, regexp) {
      var re = new RegExp(regexp);
      return this.optional(element) || re.test(value);
  },
  "Please check your input."
);</script>
<script src="js/main.min.js"></script>
   </body>
</html>