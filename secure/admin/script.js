
   


    
        $(document).ready(function () {
            /*
            $("#rechide").on('click',function(){
                $("#rectangle").fadeOut();
            });
            $("#recshow").on('click',function () {
                $("#rectangle").fadeIn();
            });
            */
            $("form#login_message").on('submit',function(e){
                e.preventDefault();
                if($("#username").val() == "" || $("#password").val() == "")
                    alert("No field should be left blank");
                else
                {
                    $.ajax({
                        url:"Location: action/index.php",
                        type:"POST",
                        dataType: "json",
                        data:$("form#login_message").serialize(),

                        success:function(data){
                            if(data.admin == 1)
                                window.location.replace("odevFinal/admin/index.php");
                                // $(".displaymessage").html(data.admin);
                           
                            else
                                $(".displaymessage").html(data.error);



                        }
                    });
                }
            });

        });
    </script>

