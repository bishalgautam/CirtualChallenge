
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript">

// wait till all the html tags are populated then change the color of the rows based on the last td child of all tr expecct the first tr(table heading).
$( document ).ready(function() {
    //console.log( "ready!" );

    $("table tr").each(function(index){
    	if(index != 0){
    		$row = $(this);

    		 var str = $row.find('td:last');
    		//console.log(str.find('option:first').text());
    		var state = str.find('option:first').text().toLowerCase().trim();
    		//console.log(state);

    	if(state == "done"){
           		color = "#FFFFDD";
           }else if(state == "cancelled"){
           		color = "#F35C4D";
           }else if(state == "in progress"){ 
           		color = "#D1FBD5";
           }else {
           	 	color = "#FFFFFF";
           }
           $row.css("background-color",color); 

    	}

    });

});
 
// search for the type keywords in the order of stroke 
 $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase().trim();

    $("table tr").each(function(index) {
        if (index != 0) {

            $row = $(this);

            $row.find('td').each (function() {
            var id = $(this).text().toLowerCase();
            if (id.indexOf(value) !== 0) {
                $row.hide();
            }
            else {
                $row.show();
                return false;
            }
        });  

        }
    });
})

// change the colors again if the drop-down options changes.

 $(".drop-down").change(function () {
           // alert($(".drop-down").val());
           //var state = $(this).val().toLowerCase();
          var state = $(this).children("option").filter(":selected").text()
          var lower= state.toLowerCase().trim();
          //console.log(state);
           $row = $(this).closest('tr');           
           var color = "";
          
           if(lower == "done"){
           		color = "#FFFFDD";
           }else if(lower == "cancelled"){
           		color = "#F35C4D";
           }else if(lower == "in progress"){ 
           		color = "#D1FBD5";
           }else {
           	 	color = "#FFFFFF";
           }
           $row.closest('tr').css("background-color",color); 
         // state = $(this).children("option").filter(":selected").text().trim();

          var id = $(this).val().trim();
          //console.log(id);
      $.ajax({
        type: "POST",
        url: "script.php",
        data: { id:id , state:state},
        complete: function(data){
            //data contains the response from the php file.
            //u can pass it here to the javascript function
            alert("Updated Successfully");

          }
        });

  });



</script>
  </body>
</html>	

<?php if(isset($db)) { db_close($db); } ?>
