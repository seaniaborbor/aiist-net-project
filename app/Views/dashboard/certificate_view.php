<?php $this->extend('dashboard/partials/common/layout')?>

<?=$this->section('content')?>
	
    <div class="container">
        <div class="row">
            <div class="col-md-8 pt-2">
                <div class="card m-3 px-4 shadow-lg rounded" style="background-image: url(<?=base_url()?>/imgs/certificate_background.png); background-size: cover; background-position:center">
                    <div class="card-body ">
                        <div class="m-2 px-3 py-5 bg-white rounded text-center" >
                                <h2 style="font-family: 'Old English Text MT'" class="mb-4 text-dark">
                                    <?=$certificate[0]['certificateType']?>
                                </h2>
                                <p><b><i>Awarded to: </i></b></p>
                                <h5><?=$certificate[0]['studentName']?></h5>
                                <p class="mb-0">for successfully completing</p>
                                <p><i><?=$certificate[0]['course']?></i></p>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="card-body">
                        <h3>Certificate Info</h3>
                        <p class="d-flex border-bottom justify-content-between">
                            <span><small>Date Issued:</small></span>
                            <span><small><?=$certificate[0]['dateAdded']?></small></span>
                        </p>
                        <p class="d-flex border-bottom justify-content-between">
                            <span><small>Certificate Code:</small></span>
                            <span><small><?=$certificate[0]['certId']?></small></span>
                        </p>
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?=$certificate[0]['certId']?>" 
                          class="img-fluid  w-100" >
                    </div>
                </div>
                <a href="#" class="btn btn-danger mt-3">Delete Certificate</a>
            </div>
        </div>
	</div>
<?=$this->endSection()?>