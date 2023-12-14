;

<?php $__env->startSection('addproduct'); ?>


<br><br><br><br><br><br><br><br>
<div class="section">
    <div class="container-fluid">
        <div class="row mt-3 justify-content-evenly">
            <div class="col-md-3">
                <!-- ================================================================ -->

                <h2 class="mt-2 text-center">Add Categories</h2>
                <div class="mb-3">



                    <label for="exampleFormControlInput1" class="form-label">Product</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Product Name" />

                    <div class="mt-3">
                        <button type="submit" class="addproductbutton">Submit</button>
                    </div>
                </div>

                <!-- ===================================================================== -->
                <h2 class="mt-2 text-center">Add Product</h2>

                <form action="" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Product</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                            placeholder="Product Name" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Product</label>
                        <input type="number" name="price" class="form-control" id="exampleFormControlInput1"
                            placeholder="Product Price" />
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">You can choose multiple image file</label>
                        <input class="form-control" name="image" type="text" id="formFileMultiple" multiple />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="addproductbutton">Submit</button>

                </form>
            </div>




            

            <div class="col-md-7">
                <h2 class="text-center">Added Product List</h2>

                <div class="row justify-content-evenly mt-3 mb-3">

                   
                        <div class="col-md-3">
                            <div class="card-body mt-3 ">
                                <img src="" class="card-img rounded-4" alt="Error Loading Image" />
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <h5 class="card-title"></h5>
                            <h5 class="card-title"></h5>
                            <p class="card-text text-bg-secondary mt-2">
                               
                            </p>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-warning mt-4 text-success">
                                <i class="icon-cart-add mr-2"></i>
                                <a href="">Edit</a>
                            </button>
                            <button type="button" class="btn btn-warning mt-4 text-danger">
                                <i class="icon-cart-add mr-2"></i>
                                <a href="#"> Delete</a>
                            </button>
                        </div>
                 
                </div>

               
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admindashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dell\Desktop\6th Sem Project\agroproject\resources\views/admin/addproduct.blade.php ENDPATH**/ ?>