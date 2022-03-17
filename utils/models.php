<!-- Daily Expenses model start -->
<div class="modal fade" id="DailyExpenses" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content card-style">
      <div class="modal-body">
        <div class="image mb-30  text-center">
          <img src="<?php echo($assetsString['dailyExpenseSvg'])?>" alt="" height="100px" />
        </div>
        <form action="addNoteController.php" method="POST"> 
          <input type="hidden" name="category" value="DE">
          <div class="input-style-1">
            <input type="text" name="noteTitle" value="Title">
          </div> 
          <div class="col-lg-12">
            <div class="input-style-1">
              <textarea placeholder="Write Daily Expenses" rows="5" name="noteDescription"></textarea>
            </div>
          </div>
          <div class="action d-flex flex-wrap justify-content-center">
            <input type="submit" name="save_note" value="Save" class="main-btn square-btn btn-hover m-1 "/>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Daily Expenses model end -->
<!-- Grocery Expense model start -->
<div class="modal fade" id="GroceryExpense" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content card-style">
      <div class="modal-body">
        <div class="image mb-30  text-center">
          <img src="<?php echo($assetsString['grocerySvg'])?>" alt="" height="100px" />
        </div>
        <form action="addNoteController.php" method="POST"> 
          <input type="hidden" name="category" value="GE">
          <div class="input-style-1">
            <input type="text" name="noteTitle" value="Title">
          </div> 
          <div class="col-lg-12">
            <div class="input-style-1">
              <textarea placeholder="Write Grocery Expense" rows="5" name="noteDescription"></textarea>
            </div>
          </div>
          <div class="action d-flex flex-wrap justify-content-center">    
            <input type="submit" name="save_note" value="Save" class="main-btn square-btn btn-hover m-1 "/>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Grocery Expense model end -->
<!-- billing data model start -->
<div class="modal fade" id="BillingData" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content card-style">
      <div class="modal-body">
        <div class="image mb-30  text-center">
          <img src="<?php echo($assetsString['billingSvg'])?>" alt="" height="100px" />
        </div>
        <form action="addNoteController.php" method="POST"> 
          <input type="hidden" name="category" value="BD">
          <div class="input-style-1">
            <input type="text" name="noteTitle" value="Title">
          </div> 
          <div class="col-lg-12">
            <div class="input-style-1">
              <textarea placeholder="Write Billing Data" rows="5"name="noteDescription"></textarea>
            </div>
          </div>
          <div class="action d-flex flex-wrap justify-content-center">            
            <input type="submit" name="save_note" value="Save" class="main-btn square-btn btn-hover m-1 "/>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- billing data model end -->
<!-- daily notes model start -->
<div class="modal fade" id="DailyNotes" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content card-style">
      <div class="modal-body">
        <div class="image mb-30  text-center">
          <img src="<?php echo($assetsString['noteSvg'])?>" alt="" height="100px" />
        </div>
        <form action="addNoteController.php" method="POST"> 
          <input type="hidden" name="category" value="DN">
          <div class="input-style-1">
            <input type="text" name="noteTitle" value="Title">
          </div> 
          <div class="col-lg-12">
            <div class="input-style-1">
              <textarea placeholder="Write Note" rows="5" name="noteDescription"></textarea>
            </div>
          </div>
          <div class="action d-flex flex-wrap justify-content-center">            
            <input type="submit" name="save_note" value="Save" class="main-btn square-btn btn-hover m-1 "/>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- daily notes model end -->
<!-- Reminder model start -->
<div class="modal fade" id="Rminder" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content card-style">
      <div class="modal-body">
        <div class="image mb-30  text-center">
          <img src="<?php echo($assetsString['reminderSvg'])?>" alt="" height="100px" />
        </div>
        <form action="addNoteController.php" method="POST"> 
          <input type="hidden" name="category" value="RM">
          <div class="input-style-1">
            <input type="text" name="noteTitle" value="Title">
          </div> 
          <div class="input-style-1">
            <input type="date" name="RMdate" />
          </div>
          <div class="input-style-2">
            <input type="time" name="RMtime"/>
          </div>
          <div class="col-lg-12">
            <div class="input-style-1">
              <textarea placeholder="Write Reminder Note" rows="3" name="noteDescription"></textarea>
            </div>
          </div>
          <div class="action d-flex flex-wrap justify-content-center">            
            <input type="submit" name="save_note" value="Save" class="main-btn square-btn btn-hover m-1 "/>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Reminder model end -->