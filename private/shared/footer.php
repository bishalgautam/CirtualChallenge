
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript">

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

 $(".drop-down").change(function () {
           // alert($(".drop-down").val());
           var state = $(this).val();
           $row = $(this).closest('tr');           
           var color = "";
          
           if(state == "Done"){
           		color = "#FFFFFF";
           }else if(state == "Cancelled"){
           		color = "#F35C4D";
           }else if(state == "In Progress"){ 
           		color = "#D1FBD5";
           }else {
           	 	color = "#FFFFFF";
           }

           $row.closest('tr').css("background-color",color); 

     });

</script>
  </body>
</html>	

<?php if(isset($db)) { db_close($db); } ?>
