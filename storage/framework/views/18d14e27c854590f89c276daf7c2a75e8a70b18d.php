<?php $__env->startSection('title','Users View'); ?>

<?php $__env->startSection('page-styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pages/page-users.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- users view start -->
<section class="users-view">
  <!-- users view media object start -->
  <div class="row">
    <div class="col-12 col-sm-7">
      <div class="media mb-2">
        <a class="mr-1" href="#">
          <img src="<?php echo e(asset('images/portrait/small/avatar-s-26.jpg')); ?>" alt="users view avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">
        </a>
        <div class="media-body pt-25">
          <h4 class="media-heading"><span class="users-view-name">Dean Stanley </span><span
              class="text-muted font-medium-1"> @</span><span
              class="users-view-username text-muted font-medium-1 ">candy007</span></h4>
          <span>ID:</span>
          <span class="users-view-id">305</span>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
      <a href="#" class="btn btn-sm mr-25 border"><i class="bx bx-envelope font-small-3"></i></a>
      <a href="#" class="btn btn-sm mr-25 border">Profile</a>
      <a href="<?php echo e(asset('page-users-edit')); ?>" class="btn btn-sm btn-primary">Edit</a>
    </div>
  </div>
  <!-- users view media object ends -->
  <!-- users view card data start -->
  <div class="card">
    <div class="card-content">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-4">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td>Registered:</td>
                  <td>01/01/2019</td>
                </tr>
                <tr>
                  <td>Latest Activity:</td>
                  <td class="users-view-latest-activity">30/04/2019</td>
                </tr>
                <tr>
                  <td>Verified:</td>
                  <td class="users-view-verified">Yes</td>
                </tr>
                <tr>
                  <td>Role:</td>
                  <td class="users-view-role">Staff</td>
                </tr>
                <tr>
                  <td>Status:</td>
                  <td><span class="badge badge-light-success users-view-status">Active</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-12 col-md-8">
            <div class="table-responsive">
              <table class="table mb-0">
                <thead>
                  <tr>
                    <th>Module Permission</th>
                    <th>Read</th>
                    <th>Write</th>
                    <th>Create</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Users</td>
                    <td>Yes</td>
                    <td>No</td>
                    <td>No</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td>Articles</td>
                    <td>No</td>
                    <td>Yes</td>
                    <td>No</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td>Staff</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>No</td>
                    <td>No</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- users view card data ends -->
  <!-- users view card details start -->
  <div class="card">
    <div class="card-content">
      <div class="card-body">
        <div class="row bg-primary bg-lighten-5 rounded mb-2 mx-25 text-center text-lg-left">
          <div class="col-12 col-sm-4 p-2">
            <h6 class="text-primary mb-0">Posts: <span class="font-large-1 align-middle">125</span></h6>
          </div>
          <div class="col-12 col-sm-4 p-2">
            <h6 class="text-primary mb-0">Followers: <span class="font-large-1 align-middle">534</span></h6>
          </div>
          <div class="col-12 col-sm-4 p-2">
            <h6 class="text-primary mb-0">Following: <span class="font-large-1 align-middle">256</span></h6>
          </div>
        </div>
        <div class="col-12">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>Username:</td>
                <td class="users-view-username">dean3004</td>
              </tr>
              <tr>
                <td>Name:</td>
                <td class="users-view-name">Dean Stanley</td>
              </tr>
              <tr>
                <td>E-mail:</td>
                <td class="users-view-email">deanstanley@gmail.com</td>
              </tr>
              <tr>
                <td>Comapny:</td>
                <td>XYZ Corp. Ltd.</td>
              </tr>

            </tbody>
          </table>
          <h5 class="mb-1"><i class="bx bx-link"></i> Social Links</h5>
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>Twitter:</td>
                <td><a href="#">https://www.twitter.com/</a></td>
              </tr>
              <tr>
                <td>Facebook:</td>
                <td><a href="#">https://www.facebook.com/</a></td>
              </tr>
              <tr>
                <td>Instagram:</td>
                <td><a href="#">https://www.instagram.com/</a></td>
              </tr>
            </tbody>
          </table>
          <h5 class="mb-1"><i class="bx bx-info-circle"></i> Personal Info</h5>
          <table class="table table-borderless mb-0">
            <tbody>
              <tr>
                <td>Birthday:</td>
                <td>03/04/1990</td>
              </tr>
              <tr>
                <td>Country:</td>
                <td>USA</td>
              </tr>
              <tr>
                <td>Languages:</td>
                <td>English</td>
              </tr>
              <tr>
                <td>Contact:</td>
                <td>+(305) 254 24668</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- users view card details ends -->

</section>
<!-- users view ends -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-scripts'); ?>
<script src="<?php echo e(asset('js/scripts/pages/page-users.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/frest/resources/views/pages/page-users-view.blade.php ENDPATH**/ ?>