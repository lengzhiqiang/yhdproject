"use strict";$(function(){function a(e,a,n){var s=new Date;s.setTime(s.getTime()+24*n*60*60*1e3);var t="expires="+s.toGMTString();document.cookie=e+"="+a+"; "+t}$(".loginTitle>span").on("click",function(){$(this).addClass("active").siblings().removeClass("active").parent().next().children().removeClass("loginyincang").eq($(this).index()).addClass("loginyincang")}),$(".loginButton").click(function(){$.ajax({type:"post",url:"../server/login.php",data:{username:$("#un").val(),password:$("#pw").val()},dataType:"json",success:function(e){1==e.code?(console.log(111),a("username",e.data.username),a("password",e.data.password),location.href="../pages/carShop.html"):alert(e.msg)}})})});