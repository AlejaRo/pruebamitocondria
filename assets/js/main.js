$(document).ready(function(){$("#opencart").on("click",function(){$(".cart").toggleClass("carttoggle")});$("form a").on("click",function(o){o.preventDefault();$(this).closest("form").prop("id");var e=$(this).closest("form").find(".nombre").val(),c=$(this).closest("form").find(".description").val(),t=$(this).closest("form").find(".price").val(),n=$(this).closest("form").find(".imagen").val();console.log(e),console.log(c),console.log(t),$.ajax({url:"action.php",data:{nombre:e,descripcion:c,precio:t,imagen:n},type:"POST",async:!1,success:function(o){1==o?alert("Producto agregado"):alert("No se pudo agregar el producto")}})})});