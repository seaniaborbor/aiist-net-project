<div class="col-sm-12 col-sm-6 col-xl-6">
<div class="bg-light rounded h-100 p-4">
   <form action="<?=base_url('dashboard/career/')?>" method="post" enctype="multipart/form-data">
   <h6 class="mb-4">Add New career</h6>
    <div class="form-floating mb-3">
        <input type="text"  name="careerName" value="<?= set_value('careerName')?>" class="form-control" id="floatingInput"
            placeholder="Eg: Barcus Trival">
        <label for="floatingInput">career Name</label>
        <?php if(isset($validation) && $validation->hasError('careerName')) : ?>
             <div class="text-danger"><?=$validation->getError('careerName')?></div>
        <?php endif; ?>
    </div>
    
    <div class="form-floating mb-3">
        <select class="form-select" name="careerStatus" id="floatingSelect"
            aria-label="Floating label select example">
            <option selected>Visibility</option>
            <option value="1">Visible</option>
            <option value="2">Hidden</option>
        </select>
        <label for="floatingSelect">career visibilty on navbar status</label>
        <?php if(isset($validation) && $validation->hasError('careerStatus')) : ?>
             <div class="text-danger"><?=$validation->getError('careerStatus')?></div>
        <?php endif; ?>
    </div>

    <div class="mt-3">
        <label for="formFileLg"  class="form-label">Feature Image</label>
        <input class="form-control form-control-lg" id="formFileLg" name="careerPic" type="file">
        <?php if(isset($validation) && $validation->hasError('careerPic')) : ?>
             <div class="text-danger"><?=$validation->getError('careerPic')?></div>
        <?php endif; ?>
    </div>

    <div class="form-floating mt-3">
        <textarea class="form-control "  name="careerDescription" placeholder="Write the career page content here"
            id="editor-textarea" style="height: 150px;"></textarea>
        <?php if(isset($validation) && $validation->hasError('careerDescription')) : ?>
             <div class="text-danger"><?=$validation->getError('careerDescription')?></div>
        <?php endif; ?>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Submit</button>
   </form>
</div>
</div>

<script>
        // Initialize CKEditor
        CKEDITOR.replace('careerDescription');
    </script>