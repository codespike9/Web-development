$(document).ready(function(){
    $("#first_name").change(function(){
        var entered_text=$(this).val();
        if(entered_text.length>15)
        {
            alert("Try giving within 15 characters!");
        }
        else{
            $("#first_name").css("background","color:yellow");
        }
    });
});
$(document).ready(function(){
    $("#submit").click(function(){
        $("#success").toggle(1000);
        $('#success').hide(10000);
    })
})

/*$(document).ready{
    function(){
        $('#first_name').change(
            function(){
                if($('#first_name').css("background","color:yellow");*/