
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
</script>
  </body>
</html>	

<?php if(isset($db)) { db_close($db); } ?>
