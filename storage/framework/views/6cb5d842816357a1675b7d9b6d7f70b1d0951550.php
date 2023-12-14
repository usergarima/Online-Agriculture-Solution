<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Dark UI - Bank dashboard concept</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link href="<?php echo e(asset('css/admin.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('js/script.js')); ?>" rel="stylesheet">

</head>
<body>

<div class="app">
	<header class="app-header">
		<div class="app-header-logo">
			<div class="logo">
				<span class="logo-icon">
					<img src="https://assets.codepen.io/285131/almeria-logo.svg" />
				</span>
				<h1 class="logo-title">
					<span>Almeria</span>
				</h1>
			</div>
		</div>
	</header>


	<div class="app-body">
		<div class="app-body-navigation">
			<nav class="navigation">
				<a href="#">
					<i class="ph-browsers"></i>
					<span>Dashboard</span>
				</a>
				<a href="<?php echo e(route('addproduct')); ?>">
					<i class="ph-check-square"></i>
					<span>Add Product</span>
				</a>
				<a href="<?php echo e(route('order')); ?>">
					<i class="ph-swap"></i>
					<span>Orders</span>
				</a>
				<a href="<?php echo e(route('totalusers')); ?>">
					<i class="ph-file-text"></i>
					<span>Users</span>
				</a>
				<a href="#">
					<i class="ph-globe"></i>
					<span>SWIFT</span>
				</a>
				<a href="#">
					<i class="ph-clipboard-text"></i>
					<span>Exchange</span>
				</a>
			</nav>
		</div>


		<?php echo $__env->yieldContent('adminuser'); ?>;

		<?php echo $__env->yieldContent('addproduct'); ?>;

		<?php echo $__env->yieldContent('order'); ?>;


	



	</div>






	
</div>
<!-- partial -->
  <script src='https://unpkg.com/phosphor-icons'></script><script  src="./script.js"></script>

</body>
</html>
<?php /**PATH C:\Users\Dell\Desktop\6th Sem Project\agroproject\resources\views/admin/admindashboard.blade.php ENDPATH**/ ?>