<?php 
require_once("models/config.php");

if(isUserLoggedIn()){
   require_once("models/header.php");
   require_once("html/navbar.html");
   require_once("html/upload_modal.html"); 

} 
else{
   require_once("html/header_unsecure.html");
   require_once("html/navbar_unsecure.html"); 
}  
?>
    <body>
    <center><img id="page_header" src="img/page_header.jpg" ></center>
    <div class='well well-lg' >

        
            <form role="form" action="process_contact.php" method="post">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            </form>
        
    </div>
    <script type='text/javascript'>
        $('#contact').addClass('active');
    </script>
    </body>
</html>