<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Hello, world!</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-11">
                                <a href="<?php echo base_url("listing") ?>"
                                    class="btn btn-danger btn-sm rounded">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="container-fluid">
                                <form action="<?php echo base_url("postform")?>" method="POST">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="agent_name" class="form-label">First Name <span
                                                        class="text-danger">
                                                        *</span>
                                                </label>

                                                <input type="text" id="f_name" name="first_name" class="form-control"
                                                    value="<?php echo $data['first_name'] ?? ""; ?>">

                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="agent_name" class="form-label">Last Name <span
                                                        class="text-danger">
                                                        *</span>
                                                </label>
                                                <input type="text" id="l_name" name="last_name" class="form-control"
                                                    value="<?php echo $data['last_name'] ?? ""; ?>">

                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="agent_name" class="form-label">Mobile<span
                                                        class="text-danger">
                                                        *</span>
                                                </label>
                                                <input type="number" id="m_number" name="mobile" class="form-control"
                                                    value="<?php echo $data['mobile'] ?? ""; ?>">

                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="e_address" class="form-label">Email<span
                                                        class="text-danger"> *</span></label>
                                                <input type="email" id="agent_address" name="email" class="form-control"
                                                    value="<?php echo $data['email'] ?? ""; ?>">
                                            </div>
                                        </div>
                                        <div class="container my-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                <div class="col-sm-11">
                                                                    <button 
                                                                        type="Submit"
                                                                        class="btn btn-primary btn-sm rounded">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>

                
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                    crossorigin="anonymous"></script>
</body>

</html>