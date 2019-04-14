$(document).ready(function(){
    /*$('#service').on('change',function(){
        var serviceID = $(this).val();
        if(serviceID){
            $.ajax({
                type:'POST',
                url:'addserviceprovider.php',
                data:'service_id='+serviceID,
                success:function(html){
                    $('#subservice').html(html);
                }
            }); 
        }else{
            $('#subservice').html('<option value="">Select service first</option>');
        }
    }); */

    $('#service').change(function(){
                var serviceID = $(this).val();
                if(serviceID){
                $.ajax({
                type:'POST',
                url:'showsub.php',
                data:'service_id='+serviceID,
                success:function(html){
                    $('#subservice').html(html);
                    }
                }); 
            }
            else{
                $('#subservice').html('<option value="">Select service first</option>');
            }       
            });
    });

