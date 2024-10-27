<!DOCTYPE html>
<html>
<head>
    <title>Registration form</title>
</head>
<body>
    <?php include('common/header.php'); ?>
    <div class="container-fluid">
        <div class="row pt-2">
            <div class="col-xl-12 col-lg-12 col-md-12 w-100">
                <div class="bg-info text-center">
                    <div class="table-one flex-wrap flex-md-no-wrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
                        <h4>Online Admission Form</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-md-12">
                <form action="submit_admission.php" method="POST" enctype="multipart/form-data">
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first_name">Applicant First Name:*</label>
                                <input type="text" name="first_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="middle_name">Applicant Middle Name:</label>
                                <input type="text" name="middle_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="last_name">Applicant Last Name:*</label>
                                <input type="text" name="last_name" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="parents_name">Parent/Guardian Name:*</label>
                                <input type="text" name="parents_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Applicant Email:*</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mobile_no">Mobile No:*</label>
                                <input type="number" name="mobile_no" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="index_no">KCSE Index No:*</label>
                                <input type="text" name="index_no" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kcse_grade">KCSE Grade:*</label>
                                <input type="text" name="kcse_grade" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="course_category">Course Category:*</label>
                                <input type="text" name="course_category" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="course_code">Course you want:</label>
                                <select class="browser-default custom-select" name="course_code" required>
                                    <option value="">Select Course</option>
                                    <?php
                                        $query = "SELECT course_code FROM courses";
                                        $run = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_array($run)) {
                                            echo "<option value='".$row['course_code']."'>".$row['course_code']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="session">Select Session:</label>
                                <select class="browser-default custom-select" name="session" required>
                                    <option value="">Select Session</option>
                                    <?php
                                        $query = "SELECT session FROM sessions";
                                        $run = mysqli_query($con, $query);
                                        while ($row = mysqli_fetch_array($run)) {
                                            echo "<option value='".$row['session']."'>".$row['session']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
