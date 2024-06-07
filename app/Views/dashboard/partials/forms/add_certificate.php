<div class="col-12">

<div class="bg-light rounded h-100 p-4">
   <form action="<?=base_url('dashboard/certificates/')?>" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="certId" class="form-label">Certificate ID</label>
                <input type="text" class="form-control" id="certId" name="certId" readonly>
                <button type="button" class="btn btn-warning mt-2" onclick="generateCertId()">Generate ID</button>
                <?php if(isset($validation) && $validation->hasError('certId')) : ?>
                 <div class="text-danger"><?=$validation->getError('certId')?></div>
              <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="dateIssued" class="form-label">Date Issued</label>
                <input type="date" class="form-control" id="dateIssued" name="dateIssued" required>
            </div>
            <div class="mb-3">
                <label for="course" class="form-label">Course</label>
                <select name="course" name="course" id="" class="form-control" required>
                    <option value="">choose</option>
                    <?php if(isset($courses) && !empty($courses)) : ?>
                        <?php foreach($courses as $course): ?>
                            <option value="<?=$course['courseName']?>"><?=$course['courseName']?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
                <?php if(isset($validation) && $validation->hasError('course')) : ?>
                 <div class="text-danger"><?=$validation->getError('course')?></div>
              <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="certificateType" class="form-label">Certificate Type</label>
                <select name="certificateType" id="" class="form-control" required>
                    <option value="">choose</option>
                    <option value="Certificate">Diploma</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Degree">Diploma</option>
                </select>
                <?php if(isset($validation) && $validation->hasError('certificateType')) : ?>
                 <div class="text-danger"><?=$validation->getError('certificateType')?></div>
              <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration" required>
                <?php if(isset($validation) && $validation->hasError('duration')) : ?>
                 <div class="text-danger"><?=$validation->getError('duration')?></div>
              <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="studentName" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="studentName" name="studentName" required>
                <?php if(isset($validation) && $validation->hasError('studentName')) : ?>
                 <div class="text-danger"><?=$validation->getError('studentName')?></div>
              <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>

<script>
        function generateCertId() {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let certId = '';
            for (let i = 0; i < 6; i++) {
                const randomIndex = Math.floor(Math.random() * characters.length);
                certId += characters[randomIndex];
            }
            document.getElementById('certId').value = certId;
        }

        // Optionally, you can generate the certificate ID when the page loads
        document.addEventListener('DOMContentLoaded', generateCertId);
    </script>