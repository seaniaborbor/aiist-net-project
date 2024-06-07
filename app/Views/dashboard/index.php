

<?=$this->extend('dashboard/partials/common/layout')?>

<?=$this->section('content')?>

<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
    <div class="col-sm-6 col-xl-3">
    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-chart-line fa-3x text-primary"></i>
        <div class="ms-3">
            <p class="mb-2">Total Courses</p>
            <h6 class="mb-0"><?=count($courses)?></h6>
        </div>
    </div>
</div>
<div class="col-sm-6 col-xl-3">
    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
        <i class="far fa-file-code fa-3x text-primary"></i>
        <div class="ms-3">
            <p class="mb-2">Career Paths</p>
            <h6 class="mb-0"><?=count($career)?></h6>
        </div>
    </div>
</div>

<div class="col-sm-6 col-xl-3">
    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-certificate fa-3x text-primary"></i>
        <div class="ms-3">
            <p class="mb-2"> Certificate</p>
            <h6 class="mb-0"><?=count($certificate)?></h6>
        </div>
    </div>
</div>

<div class="col-sm-6 col-xl-3">
    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-newspaper fa-3x text-primary"></i>
        <div class="ms-3">
            <p class="mb-2">News/Blog Post </p>
            <h6 class="mb-0"><?=count($blog)?></h6>
        </div>
    </div>
</div>
<div class="col-sm-6 col-xl-3">
    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-globe fa-3x text-primary"></i>
        <div class="ms-3">
            <p class="mb-2">Total Visitors</p>
            <h6 class="mb-0"><?=count($visitors)?></h6>
        </div>
    </div>
</div>
<div class="col-sm-6 col-xl-3">
    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-users fa-3x text-primary"></i>
        <div class="ms-3">
            <p class="mb-2">Subscribers</p>
            <h6 class="mb-0"><?=count($subscribers)?></h6>
        </div>
    </div>
</div>
<div class="col-sm-6 col-xl-3">
    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-comment fa-3x text-primary"></i>
        <div class="ms-3">
            <p class="mb-2">Testimonials</p>
            <h6 class="mb-0"><?=count($testimonials)?></h6>
        </div>
    </div>
</div>
<div class="col-sm-6 col-xl-3">
    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-users fa-3x text-primary"></i>
        <div class="ms-3">
            <p class="mb-2">Users/Team</p>
            <h6 class="mb-0"><?=count($team)?></h6>
        </div>
    </div>
</div>

    </div>
</div>

            <!-- Widgets Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card bg-light border-0">
                        <div class="card-body">
                            <h6 class="text-primary">Blog Post Log</h6>
                            <table class="table-stripped table table-hover" id="example">
                                <thead>
                                    <tr class="fw-bold text-dark">
                                        <th scope="col">Blog Title</th>
                                        <th scope="col">created At </th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($blog as $blg) :?>
                                        <tr>
                                            <th scope="row"><?=$blg['title']?></th>
                                            <td><?=$blg['createdAt']?></td>
                                            <td>
                                            <a href="<?=base_url('blog-details/'.$blg['id'])?>" class="btn btn-sm rounded-circle btn-primary"><i class="fa fa-eye"></i></a>
                    <a href="<?=base_url('/dashboard/edit/blog/'.$blg['id'])?>" class="btn btn-sm rounded-circle btn-primary"><i class="fa fa-pen"></i> </a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
            <!-- Widgets End -->

<?=$this->endSection()?>