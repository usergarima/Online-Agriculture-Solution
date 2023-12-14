;

<?php $__env->startSection('order'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

<br><br><br><br><br><br>
<div class="container-fluid">
<div class="section ">
    <div class="row text-center justify-content-evenly mt-3 mb-3">
        <div class="col-md ">
            <h1>PLACED ORDER</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md">
        <table class="table table-secondary table-striped">
            <thead>
                <tr>
                    <th scope="col">Product_Name</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Total Quantity</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Method</th>
                    <th scope="col">State | City</th>
                    <th scope="col">status</th>

                </tr>
            </thead>
            <tbody>
                    <tr>
                        <th> </th>
                        <th>  </th>
                        <th>  </th>
                        <th> </th>
                        <th>  </th>
                        <th>  </th>
                        <th> </th>
                        
                        <th classmt-1"mb-1>
                            <formction="" method="POST">
                                @crf
                                <put type="hidden">
                                <lect name="checkout_status" id="">
                             <option value="Pending">Pending</option>
                                    <option value="Completed">Completed</option>
                                </select>
                                <input type="text" name="status" value=""
                                    disabled>
                                <div>
                                    <button type="button" class="btn btn-primary mt-2 linkcolor ">
                                        <input type="submit" value="Update">
                                    </button>
                                    <button type="button" class="btn btn-danger mt-2 linkdeletecolor">

                                        <a href=""> Delete</a>
                                    </button>
                                </div>
                            </form>
                        </th>



                    </tr>
              




            </tbody>
        </table>
    </div>
</div>
</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admindashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dell\Desktop\6th Sem Project\agroproject\resources\views/admin/order.blade.php ENDPATH**/ ?>