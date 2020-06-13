<?php
    ob_start();
    //include header.php file
    include ('header.php');

?>

<?php

    //include cart items if it is not empty
    count($product->getData('cart')) ? include ('./Template/_cart-template.php') : include ('./Template/notFound/_cart_notFound.php');
    //!include cart items if it is not empty

    //include wishlist section
count($product->getData('wishlist')) ? include ('./Template/_wishlist_template.php') : include ('./Template/notFound/_wishlist_notFound.php');
    //!include wishlist cart section

    //include new phones section
    include ('./Template/_new-phones.php');
    //!include new phones section

?>

<?php

    //include header.php file
    include ('footer.php');

?>