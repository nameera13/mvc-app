<div class="container content p-3">

    <div class="row">

        <div class="col-md-4 mt-5  ">
            <img src="<?php echo $baseurl; ?>images/sign_in.gif" class="img-fluid" style="width: 100%; height: 300px !important;" >
        </div>
        <div class="col-md-8 mt-5">
            <div class="form-group">
                <form method="post">
                    <div class="form-group mt-2">
                        <input type="text" class="form-control" placeholder="Enter Email *" required>
                    </div>
                    <div class="form-group mt-4">
                        <input type="password" class="form-control" placeholder="Enter Password *" required>
                    </div>
                    <div class="form-group mt-4">
                        <input type="submit" class="btn btn-outline-success" value="Sign In!">

                        <b><a href="#" class="link-info" >Forgot Password ?</a></b>
                    </div>
                    <div class="form-group mt-4">
                        <b>Don't have an Account ? <a href="#" data-bs-toggle="modal" class="btn btn-outline-secondary" data-bs-target="#reg"> Create Your Account here? </a></b>
                    </div>
                    
            </div>
        </div>
    </div>

</div>