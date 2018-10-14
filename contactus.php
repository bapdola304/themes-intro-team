<!DOCTYPE html>
<html lang="en">
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <?php include('header.html') ?>
    <!-- content -->
    <div class="row register-form">
        <div class="col-md-8" style="margin:auto">
            <form class="form-horizontal custom-form" action="sendform.php" method="post">
                <h1>CONTACT US</h1>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputEmail3" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Vi</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputEmail3" name="vi">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="inputEmail3" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"></div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Twitter</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputEmail3" name="twitter">
                    </div>
                </div>
            <button class="btn btn-default submit-button" type="submit" name="submit">Submit Form</button></form>
        </div>
    </div>
    <!-- end-contact -->
    <?php include('footer.html') ?>
    
</html>