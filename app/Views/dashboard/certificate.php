<?php $this->extend('dashboard/partials/common/layout')?>

<?=$this->section('content')?>
	<div class="container">
	<div class="row">

<div class="col-md-8 pt-2">

            <div class="card bg-light border-0">
                        <div class="card-body table-responsive">
                            <h6 class="text-primary">List of Certificate issued</h6>
                            <table class="table-stripped table table-hover" id="example">
                                <thead>
                                    <tr class="fw-bold text-dark">
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Certificate Code</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($certificates as $certificate) :?>
                                        <tr>
                                            <td scope="row"><?=$certificate['studentName']?></td>
                                            <td scope="row"><?=$certificate['certId']?></td>
                                            <td><?=substr($certificate['course'],0,30)?>...</td>
                                            <td>
                                            <a href="<?=base_url('dashboard/view-certificate/'.$certificate['certId'])?>" 
                                            class="btn btn-sm rounded-circle btn-primary"><i class="fa fa-eye"></i>
                                            </a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                            </table>
                        </div>
                    </div>
		
</div>

<div class="col-md-4 pt-2">
	<div class="card">
		<div class="card-header d-flex justify-content-between">
			<h6>Issue a new certificate </h6>
		</div>
		<div class="card-body bg-light">
			<?php include("partials/forms/add_certificate.php")?>
		</div>
	</div>
</div>

</div>
	</div>
<?=$this->endSection()?>