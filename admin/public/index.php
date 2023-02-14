<?php
session_start();
if (!isset($_SESSION['access'])){
    header('Location: signin.php');
}

require_once '../database/connection.php';
require_once './controller.php';

//  GET ALL USERS' DATA
$result = $db->query("SELECT * FROM users WHERE is_viewed = 0");
$result2 = $db->query("SELECT * FROM users");

$result_update_is_viewed_sql = "UPDATE users SET is_viewed = 1 WHERE is_viewed = 0";

// Include header of page
include_once("header.php");

?>
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Latest (new) vacations</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">E-Mail</th>
                                    <th scope="col">Birthday</th>
                                    <th scope="col">City, Country</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Estimated GPA</th>
                                    <th scope="col">English Test Scores</th>
                                    <th scope="col">High School</th>
                                    <th scope="col">Date of Graduation</th>
                                    <th scope="col">Collage List</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Acceptance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                printTable($result);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">All vacations</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">E-Mail</th>
                                    <th scope="col">Birthday</th>
                                    <th scope="col">City, Country</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Estimated GPA</th>
                                    <th scope="col">English Test Scores</th>
                                    <th scope="col">High School</th>
                                    <th scope="col">Date of Graduation</th>
                                    <th scope="col">Collage List</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Acceptance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                printTable($result2);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>