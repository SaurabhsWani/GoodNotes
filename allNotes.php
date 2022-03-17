<?php
include_once('navbar.php');
include('utils/models.php');
?>
<!-- ========== section start ========== -->
<section class="section">
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="titlemb-30">
            <h2><?php echo($appString['dailyNote'])?></h2>
            <br>
          </div>
        </div>
      </div>
      <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->
    <div class="row">
      <?php 
      $category=$_GET['category'];
      $query="SELECT * FROM allnotes WHERE category='$category' AND uid='$uid'";
      $sql=mysqli_query($connection,$query);   
      if (mysqli_num_rows($sql)>0) {
        while ($row=mysqli_fetch_assoc($sql)) {             
          ?>
          <div class="col-lg-4">
            <div class="card-style clients-table-card mb-30">
              <div class=" title d-flex justify-content-between align-items-center ">
                <h4 class="mb-10"><?php echo $row['title'];?></h4>
                <div class="more-btn-wrapper">
                  <button class="more-btn dropdown-toggle" id="moreAction" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="lni lni-more-alt"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction">
                    <!-- <li class="dropdown-item">
                      <a href="#0" class="text-gray">Edit</a>
                    </li> -->
                    <form action="removeNoteController.php" method="POST">
                      <input  type="hidden" name="noteid" value="<?php echo $row['nid'];?>" />
                      <input type="hidden" name="category" value="<?php echo $category;?>">
                    <li class="dropdown-item">
                      <input class="btn" value="Delete" type="submit" name="DeleteNote" />
                    </li>
                    </form>
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <?php if($category=='RM'){echo '<span class=" text-medium text-gray">'.$row['date'].' '.$row['time'].'</span>';}?>
                <p class="text-justify <?php if($category=='RM'){echo "mt-10";}?>"><?php echo $row['note'];?></p>
              </div>
            </div>
          </div>
        <?php } }
        else{

          echo '
              <div class="alert-list-wrapper">
                <div class="alert-box orange-alert pl-100">
                  <div class="left">
                    <h5 class="text-bold">Empty</h5>
                  </div>
                  <div class="alert">
                    <h4 class="alert-heading">No Note Found</h4>
                    <p class="text-medium">
                      Start Creating Notes Now!
                    </p>
                  </div>
                </div>
                </div>';

        }?>
        </div>
      </div>
      <!-- end container -->
    </section>
    <!-- ========== section end ========== -->
    <?php
    include_once('footer.php');
    ?>

