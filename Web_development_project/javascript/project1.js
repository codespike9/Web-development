var ss="hello";
var k="suuu"
function changebutton(){
    document.getElementById("myButton").innerHTML=ss;
    ss="hii";
    alert(k)
}

function changeImage()
{
    var image=document.getElementById('myImage');
    if(image.src=="OFFbulb.jpg"){
        image.src="ONbulb.jpg";
    }
    else{
        image.src="OFFbulb.jpg";
    }
}
function calculate()
{
    let calc1=document.getElementById('calc1').value;
    let calc2=document.getElementById('calc2').value;
    let calc3=document.getElementById('calc3').value;
    let calculated_value = parseInt(calc1) + parseInt(calc2) + parseInt(calc3);

    document.getElementById('calculated_value').innerHTML=calculated_value;

}
function string_search()
{
    let str="Hello my name is Dharmaraj Jena. I am from Bhubaneswar.";
    let pos=str.search(document.getElementById('srch').value);
    //alert(document.getElementById("mid").innerHTML=pos);
    if(pos==-1)
    {
        alert("Not found");
    }
    else{
    alert(document.getElementById('srch').value + " found at "+pos);
    }
}
function only_for_alert()
{
    alert("join us at social networks!!");
    alert("@nature_beast/youtube @nature.beast/instagram");
}
$(document).ready
(
    function()
    {  
        $('#search_btn').click(
            function(){
                var para=document.getElementById('mypara').value;
                var srch=document.getElementById('search').value;
                let pos=para.search(srch);
                if(pos==-1){
                $('#failed').toggle();
                }
                else{
                $('#success').toggle();
                }
            }
            
            );
    }
);
//$("#mybutton_hide").click(hide_unhide_para);
$("#mybutton_hide").on({
    mouseenter: function(){
        $(this).css("background-color","red");
    },
    mouseleave: function(){
        $(this).css("background-color","gray");
        click: hide_unhide_para
    },
    }
    );
    $(document).ready(function(){
    $("#xyz").keyup(function(){
        var entered_text=$(this).val();
      $("span").text(entered_text.length);
    if(entered_text.length>10)
    {
        $(this).css("background-color","Lightpink");
    }
    else{
        $(this).css("background-color","white");
    }
})
    })
