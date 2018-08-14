$(document).ready(function () {
    $("#folders").hide();
    $("#imagfold").hide();
    $(".dir").hide();
    $("#details").hide();
    $("#delete").hide();
    $("#remove").click(function () {
        $("#delete").toggle();
    });
    $("#create").click(function () {
        $("#folders").toggle();
    });
    $("#upload").click(function () {
        $("#imagfold").toggle();
    });
    $("#submit").click(function () {
        var x=$("#foldername").val();
        $("#foldername").val("");
        $(".dir").append($('<button id="button" style="background-color:#be8205;border: none;padding: 10px;width: 100%;margin-top: 2px;" >'+x+'</button>').on('click',function () {
            $("#details").show();
        }));
        $(".dir").show();

    });
    $(".click").click(function () {
        $(".dir").toggle();
    });
});
function createfolder(){
    formData=new FormData(document.getElementById("bucket"));
    $.ajax({
        url:"http://localhost/newsite/folders.php",
        type:"POST",
        data:formData,
        async : true,
        success:function(data){
            $("#data").html(data);
        },
        cache:false,
        contentType: false,
        processData: false
    });
}

function savedata() {
    formData=new FormData(document.getElementById("record"));
    $.ajax({
        url:"http://localhost/newsite/savedata.php",
        type:"POST",
        data:formData,
        async : true,
        success:function(data){
           // $("#data").html(data);
            alert(data);
        },
        cache:false,
        contentType: false,
        processData: false
    });
}
function loadDir() {
    $(".dir").load(" .dir");
    $.post('foldercontents.php',function(data){
        var res = $.parseJSON(data);
        for(i=res.result.length-1;i>=0;i--){
               //alert(res.result[i]);
            $(".dir").append($('<button id="button" style="background-color:#be8205;border: none;padding: 10px;width: 100%;margin-top: 2px;" >'+res.result[i]+'</button>').on('click',function () {
                var x=$(this).text();
                $("#data").load(" #data");
                //alert(x);
                $.post('imagecontents.php',{foldername:x},function(data){
                    var res1=$.parseJSON(data);
                    for(i=res1.result.length-1;i>=0;i--)
                    {
                       $("#data").append('<img src='+res1.result[i]+' height="300px" width="300px" style="margin-left: 20px;margin-top: 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">');
                    }
                });
            }));
            }
    });
}
function deletefolder(){
    if($("#delfolder").val()!="") {
        var del = confirm("Are You Sure You Want To Delete");
        if (del == true) {
            //alert("you pressed ok");
            formData = new FormData(document.getElementById("removefolder"));
            $.ajax({
                url: "http://localhost/newsite/removefolder.php",
                type: "POST",
                data: formData,
                async: true,
                success: function (data) {
                    alert(data);
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    }
    else{alert("Enter valid folder name");}
$(".dir").load(" .dir");
    $("#data").load(" #data");
}