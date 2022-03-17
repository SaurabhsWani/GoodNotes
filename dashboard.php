<?php
include_once('navbar.php');
include('utils/models.php')
?>
<!-- ========== section start ========== -->
<section class="section">
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="titlemb-30">
            <h2><?php echo($appString['dashboard'])?></h2>
            <br>
          </div>
        </div>
      </div>
      <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->
    <div class="row">
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card icon-card-2 mb-30 ">
          <div class="d-flex align-items-center">
            <div class="content">
              <h6 class="mb-10 mr-20"><?php echo($appString['dailyExpenses'])?></h6>
              <?php 
              $getDailyExpenseCount="SELECT * FROM allnotes WHERE category='DE' AND uid='$uid'";
              $runNgetDailyExpenseCountQuery=mysqli_query($connection,$getDailyExpenseCount);   
              $deCount=mysqli_num_rows($runNgetDailyExpenseCountQuery)
              ?>
              <h3 class="text-bold"><?php echo $deCount;?></h3>
            </div>
            <div class="icon purple" type="button" data-bs-toggle="modal" data-bs-target="#DailyExpenses" title="Add Daily Expenses">
              <i class="lni lni-plus"></i>
            </div>
            <a class="icon purple" href="allNotes.php?category=DE">
              <i class="lni lni-credit-cards"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- End Col -->
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card icon-card-2 mb-30 ">
          <div class="d-flex align-items-center">
            <div class="content">
              <h6 class="mb-10 mr-10"><?php echo($appString['groceryExpenses'])?></h6>
              <?php 
              $getgroceryExpensesCount="SELECT * FROM allnotes WHERE category='GE' AND uid='$uid'";
              $runNgetgroceryExpensesCountQuery=mysqli_query($connection,$getgroceryExpensesCount);   
              $geCount=mysqli_num_rows($runNgetgroceryExpensesCountQuery)
              ?>
              <h3 class="text-bold"><?php echo $geCount;?></h3>
            </div>  
            <div class="icon success" type="button" data-bs-toggle="modal" data-bs-target="#GroceryExpense"title="Add Grocery Expenses">
              <i class="lni lni-plus"></i>
            </div>
            <a class="icon success" href="allNotes.php?category=GE">
              <i class="lni lni-cart-full"></i>
            </a>          
          </div>
        </div>
      </div>
      <!-- End Col -->
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card icon-card-2 mb-30 ">
          <div class="d-flex align-items-center">
            <div class="content">
              <h6 class="mb-10 mr-25"><?php echo($appString['billingData'])?></h6>
              <?php 
              $getbillingDataCount="SELECT * FROM allnotes WHERE category='BD' AND uid='$uid'";
              $runNgetbillingDataCountQuery=mysqli_query($connection,$getbillingDataCount);   
              $bdCount=mysqli_num_rows($runNgetbillingDataCountQuery)
              ?>
              <h3 class="text-bold"><?php echo $bdCount;?></h3>
            </div>
            <div class="icon primary" type="button" data-bs-toggle="modal" data-bs-target="#BillingData"title="Add Billing Data">
              <i class="lni lni-plus"></i>
            </div>
            <a class="icon primary" href="allNotes.php?category=BD">
              <i class="lni lni-dollar"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- End Col -->
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card icon-card-2 mb-30 ">
          <div class="d-flex align-items-center">
            <div class="content">
              <h6 class="mb-10 mr-20"><?php echo($appString['dailyNote'])?></h6>
              <?php 
              $getdailyNoteCount="SELECT * FROM allnotes WHERE category='DN' AND uid='$uid'";
              $runNgetdailyNoteCountQuery=mysqli_query($connection,$getdailyNoteCount);   
              $dnCount=mysqli_num_rows($runNgetdailyNoteCountQuery)
              ?>
              <h3 class="text-bold"><?php echo $dnCount;?></h3>
            </div>
            <div class="icon orange" type="button" data-bs-toggle="modal" data-bs-target="#DailyNotes" title="Add Daily Notes">
              <i class="lni lni-plus"></i>
            </div>
            <a class="icon orange" href="allNotes.php?category=DN">
              <i class="lni lni-add-files"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- End Col -->
      <!-- End Col -->
      <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card icon-card-2 mb-30 ">
          <div class="d-flex align-items-center">
            <div class="content">
              <h6 class="mb-10 mr-20"><?php echo($appString['reminder'])?></h6>
              <?php 
              $getreminderCount="SELECT * FROM allnotes WHERE category='RM' AND uid='$uid'";
              $runNgetreminderCountQuery=mysqli_query($connection,$getreminderCount);   
              $rmCount=mysqli_num_rows($runNgetreminderCountQuery)
              ?>
              <h3 class="text-bold"><?php echo $rmCount;?></h3>
            </div>
            <div class="icon deep-blue" type="button" data-bs-toggle="modal" data-bs-target="#Rminder" title="Add Daily Notes">
              <i class="lni lni-plus"></i>
            </div>
            <a class="icon deep-blue" href="allNotes.php?category=RM">
              <i class="lni lni-alarm-clock"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- End Col -->
    </div>
  </div>
  <!-- end container -->
</section>
<!-- ========== section end ========== -->
<?php
include_once('footer.php');
?>

