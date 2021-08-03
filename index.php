<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
 <body>
 <div id="text" class="container center-text">

 </div>
 </body>
 <script type="text/javascript">
   $(document).ready(function(){

      var plus__=0;
      var check_click;
      $(document).on('click','.more',function(){
        
        var id_text=$(this).attr('id');

        if (check_click != id_text) 
        {
          check_click=id_text;
          plus__=0;
        }

        plus__=plus__+200;
        fetch_text(plus__,id_text);
       });
     });

     fetch_text();
     function fetch_text(plus__,id)
      {  
         $.ajax({
            url:"fetch_more_text.php",
            type:"post",
            data:{plus__:plus__,id:id},
            success:function(data)
            {
              $("#text").html(data);
            }
         });
      }
 </script>
</html>
