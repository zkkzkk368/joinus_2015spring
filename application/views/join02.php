
<html>

<head>
	<meta charset="utf-8"/>
        <title>百度菁英俱乐部</title>
<style type="text/css">

#bigdiv { 
  background-image: url(<?php  echo base_url('resources/image/background.jpg') ?>);
  background-color: transparent;
  background-repeat: no-repeat;
  background-position: top left;
  margin: 0;
  width: 100%;
  height: 768px;
  margin: 0px auto;
  position: relative;
  top: 0px;
  left: 0px;

  }
body{
  background-color: black;
  margin: 0px;
  padding: 0;
  overflow-x: hidden;
}
#iaminput input {
  background-image: url(<?php  echo base_url('/resources/image/theLogo.png') ?>);
  margin: 0;
  background-repeat: no-repeat;
  width: 100px;
  height: 100px;
  position: absolute;
  border: none;
  outline: none;
  background-color: transparent;
  cursor: pointer;
  transition: all .2s linear;
  -webkit-transition: all .2s linear;
  -moz-transition: all .2s linear;
}

#iaminput input:hover {
  margin-top: -30px;
}

#btn1{ top:465px; left:1015px; } /*设创*/
#btn2{ top:218px; left:828px; } /*技术*/
#btn3{ top:335px; left:650px; } /*沙伐旅*/
#btn4{ top:405px; left: 393px; } /*人资*/
#btn5{ top:220px; left: 265px; } /*推测*/
#btn6{ top:100px; left: 440px; } /*百度*/

#btn7{
  background-image: url(<?php echo base_url('/resources/image/logo.png')?>);
  margin: 0;
  background-repeat: no-repeat;
  width: 150px;
  height: 200px;
  position: absolute;
  border: none;
  outline: none;
  background-color: transparent;
  cursor: pointer;
  top:600px;
  left:600px;
}
#iaminput div{
  position: absolute;
  display: none;
}
#divImage01{ left:340px; top: 80px}  /*设创*/
#divImage02{ left:200px; top: 40px;} /*技术*/
#divImage03{ left:220px; top: 60px;} /*沙伐旅*/
#divImage04{ left:100px; top: 60px;} /*人资*/
#divImage05{ left:180px; top: 60px;} /*推测*/
#divImage06{ left:180px; top: 60px;} /*百度*/

</style>

<script type="text/javascript" src=<?php  echo base_url('resources/js/jquery-1.11.2.min.js')?> ></script>
<!-- <script type="text/javascript" src="js/onclickFunction.js"></script> -->
<!-- <script type="text/javascript" src="js/mouseenter.js"></script> -->
<script language="javascript" type="text/javascript">
$(document).ready(function(){
 $("body").css("display","none");
 $("body").fadeIn(2000); 
});
</script>
<script type="text/javascript">
window.onload=function(){
var oiaminput=document.getElementById('iaminput');
var oinput=oiaminput.getElementsByTagName('input');// 获取组：button
var oimage=oiaminput.getElementsByTagName('div');//获取组：图像
for(var i=0;i<oinput.length;i++){
  oinput[i].index=i;
  oinput[i].onclick=function(){
    for(i=0;i<oinput.length;i++){oimage[i].style.display='none';} //隐藏所有
    oimage[this.index].style.display='block';
  }
  oimage[i].onclick=function(){this.style.display='none';}
}
}
</script>

<script type="text/javascript">
//2015.03.金雨婷 mouseover相应板块变色
$(document).ready(function(){
    $("#btn1").mouseenter(function(){
      $("#bigdiv").css({"background-image": "" });
    });
    $("#btn1").mouseenter(function(){
      $("#bigdiv").css({"background-image":"url(<?php  echo base_url( 'resources/image/mouseenter设创.jpg') ?>) "});
    });
    $("#btn2").mouseenter(function(){
      $("#bigdiv").css({"background-image": "url(<?php  echo base_url( 'resources/image/mouseenter技术.jpg') ?>) "});
    });
    $("#btn3").mouseenter(function(){
      $("#bigdiv").css({"background-image":"url(<?php  echo base_url( 'resources/image/mouseenter沙伐旅.jpg') ?>) "});
    });
    $("#btn4").mouseenter(function(){
      $("#bigdiv").css({"background-image":"url(<?php  echo base_url( 'resources/image/mouseenter人资.jpg') ?>) "});
    });
    $("#btn5").mouseenter(function(){
      $("#bigdiv").css({"background-image":"url(<?php  echo base_url( 'resources/image/mouseenter推测.jpg') ?>) "});
    });
    $("#btn6").mouseenter(function(){
       $("#bigdiv").css({"background-image":"url(<?php  echo base_url( 'resources/image/mouseenter百度.jpg') ?>) "});
     });
    $(".btn").mouseleave(function(){
      $("#bigdiv").css({"background-image":"url(<?php echo base_url('resources/image/background.jpg')?>)"});
    });
  });
</script>

</head>
<body>
<div id="bigdiv">
  <div id="iaminput">
  <input type="button"  id="btn1" title="点击显示设计创意部简介"/>
  <input type="button"  id="btn2" title="点击显示技术研发部简介"/>
  <input type="button" id="btn3" title="点击显示校园沙伐旅简介"/>
  <input type="button" id="btn4" title="点击显示人力资源简介"/>
  <input type="button"  id="btn5" title="点击显示推广策划部简介"/><!-- 推测 -->
  <input type="button"  id="btn6" title="点击显示百度菁英俱乐部简介"/> 
  <div id="divImage01"><img src=<?php  echo base_url('/resources/image/alert设创.png') ?>></div>
  <div id="divImage02"><img src=<?php  echo base_url('/resources/image/alert技术部.png') ?>></div>
  <div id="divImage03"><img src=<?php  echo base_url('/resources/image/alert沙伐旅.png') ?>></div>
  <div id="divImage04"><img src=<?php  echo base_url('/resources/image/alert人资.png') ?>></div>
  <div id="divImage05"><img src=<?php  echo base_url('/resources/image/alert推测.png') ?>></div>
  <div id="divImage06"><img src=<?php  echo base_url('/resources/image/alert百度.png') ?> ></div>
  </div>
  <input type="button" id="btn7" onclick="javascript:location.href='form'"/> 

	
</div>

</body>
</html>