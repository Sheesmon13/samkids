<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SAM KIDS || Admission</title>
    <?php include_once('includes/links.php') ?>
</head>

<body>

    <?php include_once('includes/header.php') ?>

    <section class="page-header breadcrumb-img bg_img">
        <div class="page-caption">

            <ul class="breadcrumb-box">
                <h1>Admission Samkids</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Admission</li>
                </ul>
        </div>
    </section>

    <section class="admission-section pad-all">
        <div class="container">
            <div class="row">
                <div class="admission-head">
                    <h2><span>Online</span> Admission Form</h2>
                    <p class="admission-para-one">All <span class="text-danger">*</span> fields are mandatory</p>
                    <div class="divider"></div>
                    <p class="admission-para">
                        At Sam Kids we share the important goal of instilling a love of learning
                        in each child at an early age. By guiding our students through both planned and spontaneous learning adventures,
                        we challenge them to grow and develop in ways that are enjoyable.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <form action="">
                        <div class="row mb-15">
                            <div class="col-md-6 mb-15">
                                <label class="form-label">Name Of Kid <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Date Of Birth <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-15">
                            <div class="col-md-6 mb-15">
                                <label class="form-label">Admission Sought for <span class="text-danger">*</span></label>
                                <select class="form-select" required>
                                    <option value="" selected disabled>Select Admission</option>
                                    <option>Play Group</option>
                                    <option>Nursery</option>
                                    <option>LKG</option>
                                    <option>UKG</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Gender <span class="text-danger">*</span></label>
                                <select class="form-select" required>
                                    <option value="" selected disabled>Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-15">
                            <div class="col-md-6 mb-15">
                                <label class="form-label">Preferred Center <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6 ">
                                <label class="form-label">Preferred time to Contact</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <h5 class="text-center ad-details mt-4">More Details</h5>
                        <div class="divider"></div>

                        <div class="row mb-15">
                            <div class="col-md-6 mb-15">
                                <label class="form-label">Name of father <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6 ">
                                <label class="form-label">Contact Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-15">
                            <div class="col-md-6 mb-15">
                                <label class="form-label">Name of mother <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6 ">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-15">
                            <div class="col-md-6 mb-15">
                                <label class="form-label">Residence Address <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="2" required></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Remarks</label>
                                <textarea class="form-control" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="btn-style">
                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('includes/footer.php') ?>
    <?php include_once('includes/scripts.php') ?>
</body>

</html>