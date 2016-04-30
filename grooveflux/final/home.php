<?php
    require_once("html/header_unsecure.html");
    require_once("html/navbar_unsecure.html");    
?>

    <body>
        <!-- Modal -->
        <div id="upload" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload Image</h4>
              </div>
              <div class="modal-body">
                <p>
                        Select image to upload:
                        <input id="fileToUpload" type="file" name="fileToUpload" />
                        <button id="upload_button">Upload</button>
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

        
        <!-- /gridster -->
        <div class="gridster" style="margin-top:55px">
            <ul id="grid_widget">
                
        
            </ul>
        </div>
        
        <?php require_once("js/init_gridster.php");?>


    </body>
</html>