
<?php $__env->startSection("content"); ?>
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="<?php echo e($product['gallery']); ?>" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/"><i class="fa-solid fa-arrow-left-long">Go Back</i></a>
       <h2><?php echo e($product['name']); ?></h2>
       <h3>Price : <?php echo e($product['price']); ?></h3>
       <h4>Details: <?php echo e($product['description']); ?></h4>
       <h4>category: <?php echo e($product['category']); ?></h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           <?php echo csrf_field(); ?>
           <input type="hidden" name="product_id" value="<?php echo e($product['id']); ?>">
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       <button class="btn btn-success">Buy Now</button>
       <br><br>
    </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ecommerce1222\resources\views/detail.blade.php ENDPATH**/ ?>