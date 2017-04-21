/**
 * Created by Calopsia on 24/01/2017.
 */



function datos_grafico(div, url)
{
    var ret = false;

    $.ajax({
        url: url,
        type: "GET",
        global: true,
        cache:false,
        async: false,
        dataType: "json",
    success: function(data)
    {

           ret =  {
        "datos":data,
        "div": div
        
       }
    },
    error: function(error)
    {
        console.log("Error");
    }

    });

    return ret;
}