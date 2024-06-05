<div class="col-sm-12 col-sm-6 col-xl-6">
<h3></h3>
    <form  action="<?=base_url('dashboard/course/edit/'.$course_data['courseId'])?>"  method="post" enctype="multipart/form-data">
    <div class="bg-light rounded h-100 p-4">
    <h6 class="mb-4">Edit course</h6>
    <div class="form-floating mb-3">
        <input type="text" name="courseName" value="<?=$course_data['courseName']?>" class="form-control" id="floatingInput"
            placeholder="Eg: VIP Security">
        <label for="floatingInput">course Name</label>
        <?php if(isset($validation) && $validation->hasError('courseName')) : ?>
             <div class="text-danger"><?=$validation->getError('courseName')?></div>
        <?php endif; ?>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="courseDuration" value="<?=$course_data['courseDuration']?>" class="form-control" id="floatingInput"
            placeholder="Eg: VIP Security">
        <label for="floatingInput">Course duration in months</label>
        <?php if(isset($validation) && $validation->hasError('courseDuration')) : ?>
             <div class="text-danger"><?=$validation->getError('courseDuration')?></div>
        <?php endif; ?>
    </div>
    
    <div class="form-floating mb-3">
        <select class="form-select" name="courseStatus" id="floatingSelect"
            aria-label="Floating label select example">
            <option selected >--choose--</option>
            <option value="1">Visible</option>
            <option value="2">Hidden</option>
        </select>
        <label for="floatingSelect">course Visibility On Site</label>
        <?php if(isset($validation) && $validation->hasError('courseStatus')) : ?>
             <div class="text-danger"><?=$validation->getError('courseStatus')?></div>
        <?php endif; ?>
    </div>

    <div class="form-floating mb-3">
        <select class="form-select" name="coursecareer" id="floatingSelect"
            aria-label="Floating label select example">
            <option selected value="">--choose--</option>
            <?php if(isset($career_data)) : ?>
                <?php foreach($career_data as $mndta) : ?>
                    <option  value="<?=$mndta['careerId']?>"><?=$mndta['careerName']?></option>
                <?php endforeach; ?>
            <?php endif; ?> 
        </select>
        <label for="floatingSelect">Indicate the course general career path </small></label>
        <?php if(isset($validation) && $validation->hasError('coursecareer')) : ?>
             <div class="text-danger"><?=$validation->getError('coursecareer')?></div>
        <?php endif; ?>
    </div>

    <div class="mt-3">
        <label for="formFileLg"  class="form-label">Feature Image</label>
        <input name="coursePic" class="form-control form-control-lg" id="formFileLg" type="file">
        <?php if(isset($validation) && $validation->hasError('coursePic')) : ?>
             <div class="text-danger"><?=$validation->getError('coursePic')?></div>
        <?php endif; ?>
    </div>

    <div class="form-floating mt-3">
        <textarea class="form-control" name="courseDescription" placeholder="Write the career page content here"
            id="floatingTextarea" style="height: 150px;">
            <?=$course_data['courseDescription']?>
        </textarea>
        <?php if(isset($validation) && $validation->hasError('courseDescription')) : ?>
             <div class="text-danger"><?=$validation->getError('courseDescription')?></div>
        <?php endif; ?>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>

    </form>

</div>
</div>

<script>
        // Initialize CKEditor
        CKEDITOR.replace('courseDescription');
    </script>