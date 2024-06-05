

<div class="row">
	<div class="row g-2">
		<?php if(isset($all_testimonials)): ?>
   	<?php $counter = 1; ?>
      <?php foreach($all_testimonials as $testi) : ?>
        	<div class="col-md-4 mb-5">
        		<div class="card">
	        		<div class="card-body">
	        			<div class="mb-2 p-0" 
	        			style="height:200px; 
	        			background-image:url(<?=base_url('public_asset/img/'.$testi['customer_pic'])?>); 
	        			background-position:top;
						border-radius:15px;
	        			background-size:cover; background-repeat: no-repeat;">
	        			</div>
	        			<h6 ><?=$testi['customer_name']?></h6>
	        			<p><?=substr($testi['customer_title'], 0,50)?></p>
						<small><?=substr($testi['customer_testimoney'],0,100)?>...</small>
	        		</div>
	        		<div class="card-footer bg-white">
	        			<a href="<?=base_url('dashboard/edit/testimonials/'.$testi['id'])?>" class="btn mt-2 btn-light">Edit</a>
	        			<a href="<?=base_url('dashboard/delete/testimonials/'.$testi['id'])?>" class="btn mt-2 btn-light">Delete</a>
	        		</div>
        		</div>
        	</div>
        <?php $counter++?>
      <?php endforeach  ?>
    <?php endif ?>
	</div>
</div>