<?=$this->extend('public/partials/common/layout2')?>

<?=$this->section('content')?>

<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                           <h2 data-aos="fade-up" data-aos-duration="2000">Verify Certificate </h2>
                            <p>Home<span>/</span>Verify Certificate </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

    <!--::review_part start::-->
    <section class="special_cource pt-3">
        <div class="container" >
            <div class="row">

              <?php if(isset($request) && $request == 'verify_certificate'): ?>
                <div class="col-md-8 offset-md-2 my-3 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-danger">Welcome to our certificate Verication Service</h43>
                            <p class="lead">This page is used to authenticate  certificates, diploma or degrees 
                                presented bearing the IIIST Name or Logo in order to avoid or prevent froudelent act. 
                            </p>
                            <a data-aos="fade-down mt-5" data-toggle="modal" data-target="#verifyModal" data-aos-duration="2000" href="#" class="btn_1">Proceed</a>
                        </div>
                    </div>
                  </div>
                  <?php endif; ?>

                  <?php if(isset($certificate) && empty($certificate)): ?>
                  <div class="col-md-6 offset-md-3 my-3 mb-5 ">
                    <div class="card border border-danger border-2">
                        <div class="card-body text-center">
                            <img src="/imgs/invalid.jpg" class="img-fluid" alt="">
                            <h5 class=" mb-3 ">The certificate is not in our database 
                            </h5>
                            
                            <a data-aos="fade-down mt-5" data-toggle="modal" data-target="#verifyModal" data-aos-duration="2000" href="#" class="btn_1">Re verify</a>
                        </div>
                    </div>
                  </div>
                  <?php endif; ?>

                  <?php if(isset($certificate) && !empty($certificate)): ?>
                  <div class="col-md-6 offset-md-3 my-3 mb-5 ">
                    <div class="card">
                        <div class="card-body  border border-primary border-2">
                            <img src="/imgs/xender.jpg" class="img-fluid mb-4" alt="">
                            <h5 class=" mb-3 ">The certificate is valid 
                            </h5>
                            <table class="table table-stripped">
                              <tr>
                                <td>Holder's Name:</td>
                                <td><?=$certificate[0]['studentName']?></td>
                              </tr>
                              <tr>
                                <td>Type:</td>
                                <td><?=$certificate[0]['certificateType']?></td>
                              </tr>
                              <tr>
                                <td>Course Completed</td>
                                <td><?=$certificate[0]['course']?></td>
                              </tr>
                              <tr>
                                <td>Date Issued</td>
                                <td><?=$certificate[0]['dateIssued']?></td>
                              </tr>
                            </table>
                            
                        </div>
                    </div>
                  </div>
                  <?php endif; ?>
    
            </div>
           
        </div>
    </section>
    <!--::blog_part end::-->

<!-- Modal -->
<div class="modal fade" id="verifyModal" tabindex="-1" role="dialog" aria-labelledby="verifyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-center" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verifyModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Enter serial/id of the certificate, diploma, or degree and click the verify button</p>
        <div class="form-group mb-3">
          <input type="text" id="id" oninput="validate()" placeholder="Eg. aX4va6" class="form-control">
        </div>
        <a data-aos="fade-mtdown-2" onclick="verify_doc()" data-aos-duration="2000" href="#" class="btn_1">Verify</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
  let verify_state = false;
  let cert_code = "";

  function validate() {
    return document.getElementById('id').value;
  }

  function verify_doc() {
    cert_code = validate();
    if (cert_code.length != 6) {
      alert("Can't be more nor less than six characters");
    } else {
      window.location.href = '/vfy/' + cert_code;
    }
  }
</script>



<?=$this->endSection()?>