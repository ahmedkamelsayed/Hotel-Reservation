<!DOCTYPE html>
<html>
<body>

<h2>Cancel Bokking</h2>

<form action="/action_page.php">
  Enter booking ID:<br>
  <input type="text" name="Enter booking ID" value="">
  <br>
  Enter Your Mail:<br>
  <input type="text" name="Enter Your Mail" value=""  onclick="cancel()">
  <br><br>
  <input type="submit" value="Cancel Bokking">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

<script type="text/javascript">
	console.log("Test");
   	function cancel(){
        alert(""+{{ $sa3yd }}+"");
    }

    function msg(){
        alert("your massage send succsefuly");
    }
 
</script>


<!--
<script type="text/javascript">
  console.log("Test");
    function cancel(){
        alert(""+{{ $sa3yd }}+"");
    }

    function msg(){
        alert("your massage send succsefuly");
    }
 
</script>-->