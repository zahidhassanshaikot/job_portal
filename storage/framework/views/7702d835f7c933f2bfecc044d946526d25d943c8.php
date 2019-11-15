<?php $__env->startSection('content'); ?>
	<section id="job-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="job-descriptions">
						<div class="title">
							<h3>Job Description</h3>
						</div>
						<div class="description">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat assumenda veritatis facere, esse harum, sapiente excepturi! Labore, minima, ea. Blanditiis laboriosam esse, provident quasi velit ipsum fugiat assumenda. Eaque nisi quis, cum, voluptates nam quo nostrum unde error sequi ad Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, doloremque minima eos accusamus, molestias accusantium tempora labore eveniet assumenda cum maxime. Officia impedit minima veniam quis provident maxime voluptas aspernatur!</p><br>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta blanditiis omnis sapiente deleniti quasi, saepe a eveniet porro quam aliquid repudiandae eum sequi minus rerum quo temporibus officiis consequuntur ratione quia sint, qui. Voluptatum libero, vel praesentium maxime facere magni iure quo obcaecati quod iusto deserunt, explicabo velit, unde dolorem.</p>
						</div>
						<div class="requirement">
							<div class="title">
								<h3>What You Need for this Position</h3>
							</div>
							<ul>
								<li>- Objective-C</li>
								<li>- javaScript</li>
								<li>- Knowledge of Laravel Framework</li>
								<li>- HTML,CSS</li>
								<li>- SASS or LESS</li>
							</ul>
						</div>
						<div class="how-apply">
							<div class="title">
								<h3>How to Apply</h3>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam aliquid optio harum, voluptatem ducimus laborum beatae, eius fugiat debitis dicta! Repellat, magni magnam beatae hic dicta illo numquam tempora perspiciatis.</p>
							<div class="apply-btn">
								<a href="single-job-post.php">Apply Job</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>