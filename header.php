
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('title')?></title>  
    <style>
        a img{
            width: 80px;
        }

       .menu-navmenu-container ul{
        float: right;
       }
    </style>
</head>
    <?php wp_head()?>
<body>

<!--start header sction  -->
<div id="header">
        <div class="container">
            <div class="row">
                <?php $logo= get_header_image();?>
                <div class="col-md-4">
                    <a href="index.php">
                        <img src="<?php echo $logo; ?>" alt="Image is not showing">
                    </a>
                </div>
                <div class="col-md-8">
                        <?php wp_nav_menu(
                                array('menu'=>'primary-menu',
                                'cntainer'=>'',
                                'item_wrap'=>'<ul id="menu"></ul>')
                        )?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->