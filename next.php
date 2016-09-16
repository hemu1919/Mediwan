<?php
 if(session_id() == '')
 {
      // session has NOT been started
      session_start();
 }
 else
 {
      // session has been started
 }
?>
<?php
if(!isset($_SESSION['table']))
{
echo '<a href="#" data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-info">Login to Upload Image</button></a>';
}
else
{
echo '<a href="#" data-toggle="modal" data-target="#myModal1"><button type="button" class="btn btn-info" onclick="s();">Upload Image</button></a>';
}
?>