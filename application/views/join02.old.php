
<html>

<head>
	<meta charset="utf-8"/>
<style type="text/css">

#bigdiv { 
  background-image: url(<?php echo base_url('resources/image/background.jpg') ?>);
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
.btn {
  background-image: url(<?php echo base_url('resources/image/theLogo.png') ?>);
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

.btn:hover {
  margin-top: -30px;
}

#btn1{ top:465px; left:1015px; } /*设创*/
#btn2{ top:218px; left:828px; } /*技术*/
#btn3{ top:335px; left:650px; } /*沙伐旅*/
#btn4{ top:405px; left: 393px; } /*人资*/
#btn5{ top:220px; left: 265px; } /*推测*/
#btn6{ top:100px; left: 440px; } /*百度*/

#btn7{
  background-image: url(<?php echo base_url('resources/image/logo.png') ?>);
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
.divImage{
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

<script type="text/javascript" src=<?php echo base_url('resources/js/jquery-1.11.2.min.js') ?>></script>

<script language="javascript" type="text/javascript">
$(document).ready(function(){
 $("body").css("display","none");
 $("body").fadeIn(2000); 
});
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
   

/*金雨婷 2015/3 点击出现各部门简介*/
$(document).ready(function(){
    $("#btn1").click(function(){
      $("#divImage01").fadeIn();
     
    });
  });
  $(document).ready(function(){
    $("#divImage01").click(function(){
      $("#divImage01").fadeOut();
      $("#divImage02").fadeOut();
      $("#bigdiv").css({"background-image":"url(<?php echo base_url('resources/image/background.jpg') ?>"});
    });
  });
  $(document).ready(function(){
    $("#btn2").click(function(){
      $("#divImage02").fadeIn();
    });
  });
  $(document).ready(function(){
    $("#divImage02").click(function(){
      $("#divImage02").fadeOut();
      $("#bigdiv").css({"background-image":"url(<?php echo base_url('resources/image/background.jpg') ?>"});
    });
  });
  $(document).ready(function(){
    $("#btn3").click(function(){
      $("#divImage03").fadeIn();
  
    });
  });
  $(document).ready(function(){
    $("#divImage03").click(function(){
      $("#divImage03").fadeOut();
      $("#bigdiv").css({"background-image":"url(<?php echo base_url('resources/image/background.jpg') ?>"});
    });
  });
  $(document).ready(function(){
    $("#btn4").click(function(){
      $("#divImage04").fadeIn();
    });
  });
  $(document).ready(function(){
    $("#divImage04").click(function(){
      $("#divImage04").fadeOut();
      $("#bigdiv").css({"background-image":"url(<?php echo base_url('resources/image/background.jpg') ?>"});
    });
  });
  $(document).ready(function(){
    $("#btn5").click(function(){
      $("#divImage05").fadeIn();
    });
  });
  $(document).ready(function(){
    $("#divImage05").click(function(){
      $("#divImage05").fadeOut();
      $("#bigdiv").css({"background-image":"url(<?php echo base_url('resources/image/background.jpg') ?>"});
    });
  });
   $(document).ready(function(){
    $("#btn6").click(function(){
      $("#divImage06").fadeIn();
    });
  });
   $(document).ready(function(){
    $("#divImage06").click(function(){
      $("#divImage06").fadeOut();
      $("#bigdiv").css({"background-image":"url(<?php echo base_url('resources/image/background.jpg') ?>"});
    });
  });
 });

</script>
        
</head>
<body>
<div id="bigdiv">
  <input type="button" class="btn" id="btn1" title="点击显示设计创意部简介"/>
  <input type="button" class="btn" id="btn2" title="点击显示技术研发部简介"/>
  <input type="button" class="btn" id="btn3" title="点击显示校园沙伐旅简介"/>
  <input type="button" class="btn" id="btn4" title="点击显示人力资源简介"/>
  <input type="button" class="btn" id="btn5" title="点击显示推广策划部简介"/><!-- 推测 -->
  <input type="button" class="btn" id="btn6" title="点击显示百度菁英俱乐部简介"/> 

  <input type="button" id="btn7" onclick="javascript:location.href='form'"/> <!-- 此处需要修改！ -->

	<div id="divImage01" class="divImage"><img src=<?php echo base_url('resources/image/alert设创.png') ?>></div>
  <div id="divImage02" class="divImage"><img src=<?php echo base_url('resources/image/alert技术部.png') ?>></div>
  <div id="divImage03" class="divImage"><img src=<?php echo base_url('resources/image/alert沙伐旅.png') ?>></div>
  <div id="divImage04" class="divImage"><img src=<?php echo base_url('resources/image/alert人资.png') ?>></div>
  <div id="divImage05" class="divImage"><img src=<?php echo base_url('resources/image/alert推测.png') ?>></div>
  <div id="divImage06" class="divImage"><img src=<?php echo base_url('resources/image/alert百度.png') ?>></div>
</div>

</body>
</html>