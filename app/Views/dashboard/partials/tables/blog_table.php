<div class="row">
<?php if(isset($all_blogs)): ?>
    <?php foreach($all_blogs as $bp) : ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
             
                  <img src='<?=base_url('uploads/'.$bp['featureImg'])?>' class="img-fluid"> 
                    
                   <h6><?=substr($bp['title'], 0,35)?>...</h6><hr>
                   <p><small class="text-secondary"><?= substr($bp['createdAt'], 0,35) ?></small></p>

                   <p class="">
                   <a href="<?=base_url('blog-details/'.$bp['id'])?>" class="btn w-auto btn-sm btn-light"><i class="bi bi-eye"></i></a>
                    <a href="<?=base_url('/dashboard/edit/blog/'.$bp['id'])?>" class="btn w-auto btn-sm btn-light"><i class="bi bi-pencil"></i> </a>
                    <a href="<?=base_url('/dashboard/delete/blog/'.$bp['id'])?>" class="btn w-auto  btn-sm btn-light"><i class="bi bi-trash"></i> </a>
                   </p>
                </div>
            </div>
        </div>
    <?php endforeach ?>
<?php endif ?>
<?= $pager->links() ?>

</div>