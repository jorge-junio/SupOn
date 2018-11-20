<?php  
  if ($_SESSION['ativaMsg'] == 1) { ?>
     
      <div class="row" id="alert_box">
        <div class="col s12">
          <div class="card <?php echo $_SESSION['type']; ?> darken-1">
            <div class="row">
              <div class="col s12">
                <div class="card-content white-text">
                  <?php echo $_SESSION['message']; ?>
              </div>
            </div>
            <div class="col s12">
              <i class="material-icons icon_style" id="alert_close" aria-hidden="true">close</i>
            </div>
          </div>
         </div>
        </div>
      </div>
<?php } ?>


<!--Tempo das messagens de aletas-->
<script>
    window.setTimeout(function(){
        $("#alert_box").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
            <?php $_SESSION['message'] = "";
                  $_SESSION['ativaMsg'] = 0;  ?>
        });
    }, 5000);
</script>