<?php
   include_once("header.php");
?>

<form method="post" action="" enctype="text/plain">

Check the answer to each multiple-coice question, and click on the "Send Form" button to submit the information.

<P>2. The existence of scarcity in an economy imples that:<BR>
<input type="radio" name="#" value="#">A. There are no free goods.<BR>
<input type="radio" name="#" value="#">B. There are no public goods.<BR>
<input type="radio" name="#" value="#">C. Individuals must make choices.<BR>
<input type="radio" name="#" value="#">D. There has been a misallocation of resources.<BR>
</p>
<br>
<input type="submit" value="Send Form">
<input type="reset" value="Clear Form">
<button>
<a href ="qpage3.php">
Next question
</a>
</button>
</form>
</body>
<script type="text/javascript">
function checkAnswer() {
  var a= document.getElementByName("option");
  for (var i = 0, i < a.length; i++) {
    if (a[i].value == "C. Individuals must make choices")
    alert("You have selected the correct answer");
    //push(1).array
     
    else {
      alert("You have selected the wrong answer");
      break;
       
    }
  }
}
   
</script>

<?php
   include_once('footer.php');
?>
