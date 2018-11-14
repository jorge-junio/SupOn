<div class="row" id="alert_box">
  <div class="col s12 m12">
    <div class="card <?php echo $_SESSION['type']; ?> darken-1">
      <div class="row">
        <div class="col s12 m10">
          <div class="card-content white-text">
            <?php echo $_SESSION['message']; ?>
        </div>
      </div>
      <div class="col s12 m2">
        <i class="fa fa-times icon_style"                             id="alert_close" aria-hidden="true"></i>
      </div>
    </div>
   </div>
  </div>
</div>