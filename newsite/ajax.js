function signin()
{
    formdata=new FormData(document.getElementById("signingin"));
    $.ajax({
        url:'http://localhost/newsite/signin.php',
        type:"POST",
        data:formdata,
        async : true,
        success:function(data){
            if(data==1){
                //alert(data);
                window.location.href="http://localhost/newsite/workpage123.php";
            }
            else{
                alert("Invalid Username or Password");
            }
        },
        cache:false,
        contentType: false,
        processData: false
    });
}