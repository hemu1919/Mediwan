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
if(isset($_SESSION['check']))
echo '<a href="#openmodal1"><button id="nbut" style="cursor:pointer;">BuyNow</button></a>';
}
else
{
echo '<button id="nbut" onclick="store()" style="cursor:pointer;">BuyNow</button>';
}
?>