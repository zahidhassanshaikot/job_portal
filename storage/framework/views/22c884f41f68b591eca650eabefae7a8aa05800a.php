	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="copyright">
						<p>Copyright by &copy;</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="<?php echo e(asset('design')); ?>/js/vendor/font-awesome.js"></script>
	<script src="<?php echo e(asset('design')); ?>/js/vendor/popper.min.js"></script>
	<script src="<?php echo e(asset('design')); ?>/js/vendor/jquery-3.2.1.slim.min.js"></script>
	<script src="<?php echo e(asset('design')); ?>/js/vendor/bootstrap.min.js"></script>
	<script src="<?php echo e(asset('design')); ?>/js/vendor/jquery.min.js"></script>
	<script src="<?php echo e(asset('design')); ?>/js/index.js"></script>

	<script src="<?php echo e(asset('ckeditor5')); ?>/ckeditor.js"></script>
	<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );

		CKEDITOR.replace("#editor",
		{
			height: 100
		});
	</script>
</body>
</html>