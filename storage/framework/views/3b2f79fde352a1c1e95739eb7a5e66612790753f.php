<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>
    <!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e4780a578d.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php echo e(View::make('header')); ?>

    <?php echo $__env->yieldContent('content'); ?>
    <?php echo e(View::make('footer')); ?>


</body>
<style>
    @import  url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,400;1,500&display=swap');
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important
    }
    .custom-product{
        height: 600px
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-image{
        height: 250px;
        width: 220px;


    }
    .col-sm-10  h3{
       text-align: center;
    margin: 0 auto 80px;
    position: relative;
    line-height: 60px;
    color: #555;
    font-family: 'Nunito', sans-serif; 
    }
    .col-sm-10  h3:after{
         content: '';
        background: #ff523b;
        width: 80px;
        height: 5px;
        border-radius: 5px;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }
    .trening-item{
        float: left;
        width: 20%;
        margin: 20px;
        padding: 17px;
        font-family: 'Nunito', sans-serif;
        display: flex;
        flex-wrap: wrap;
        background-color: lightgray;
        border-radius: 20px;
        transition: transform 0.5s;
        
    }
    .trening-item h2{
        text-align: center;
        color: white;

    }
    .trening-item a{
        text-decoration: none;

    }
    .trending-wrapper{
        margin: 30px;
        font-family: 'Nunito', sans-serif;
        
       
    }
    .products-container{
        max-width: 1300px;
    margin: auto;
    padding-left: 20px;
    padding-right: 15px;
    }
    .trending-wrapper h3{
    text-align: center;
    margin: 0 auto 80px;
    position: relative;
    line-height: 60px;
    color: #555;
    font-family: 'Nunito', sans-serif;
    }
    .trending-wrapper h3:after {

        content: '';
        background: #ff523b;
        width: 80px;
        height: 5px;
        border-radius: 5px;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }
    .detail-img{
        height: 250px;
        width: 220px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    .carousel-caption{
        bottom: 0px !important;
    }
    .col-sm-6{
        font-family: 'Nunito',sans-serif;
    }
    .col-sm-6 a{
        background-color: brown;
        text-decoration: none;
        color: white;
        padding: 9px;
        border-radius: 7px;
    }
    .table,.form,.btn-king{
    width: 50%;
    max-width: 50%;
    
    margin-left: 30%;
    margin-right: 30%;
   
    display: auto;
   }
   .btn-king{
    background-color: darkred;
    color: white;
   }
   .nav-right{
    background-color: brown;
    color: white !important;
    border-radius: 12px;
   }
   .nav-right:hover{
    color: black !important;
   }
</style>
</html><?php /**PATH C:\xampp\htdocs\Ecommerce1222\resources\views/master.blade.php ENDPATH**/ ?>