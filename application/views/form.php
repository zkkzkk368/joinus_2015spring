<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>表单</title>

        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

        <!-- Custom Google font -->

        <link rel=<?php echo base_url('resources/css/fontello.css') ?> type="text/css" />
        <link href=<?php echo base_url('resources/css/styles.min.css') ?> rel="stylesheet">
        <style>
            #mstart {
                display: none;
            }
        </style>
        <script type="text/javascript">
        // 判断是否为移动端运行环境
        if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE|iPhone/.test(navigator.userAgent))){
            setActiveStyleSheet(<?php echo base_url('resources/css/mobile.css') ?>, "screen");
        }
        else{
        // PC端
        }
        function setActiveStyleSheet(herf, media)
        {
            document.write("<link href="+herf+" media="+media+" rel=stylesheet>");
        }
        </script>
    <style type="text/css">
   
    </style>
    </head>

    <body>
      <div id="phizzForm" class="form" style="background-color: rgb(237, 239, 241); height: 554px;">
            <form action="form" method="post" style="height: 504px;">
                <div class="formPanel">
                        <h1>加入我们吧！</h1>
                        <h2>百度俱乐部2015纳新报名表</h2>
                        <div class="formNotice">
                            <h3  class="icon-check">注意事项：</h3>
                            <ul>
                                <li>报名截止时间：3月27号18点</li>
                                <li>面试时间：请等待短信通知</li>
                                <li>联系我们：15868119798 552743 喻同学</li>
                                <li>备注：若有作品（内容不限，可以是文章，图片，代码等来证明自己的能力），请打包压缩发至zjubaidu@126.com，注明姓名等信息</li>
                            </ul>
                        </div>
                        <font color="red"><?php echo validation_errors(); ?></font>
                        <div class="errors"><i class="icon-exclamation-sign"></i>
                            Oops! You've entered some incorrect details.</div>
                        <button type="button" id="mstart">点击填写报名表</button>
                        <button id="start" class="buttonNext buttonStart">点击填写报名表</button>
                </div>



                <div class="formPanel">
                    <h2>个人信息</h2>

                    <div class="errors"><i class="icon-exclamation-sign"></i>
                        Oops! You've entered some incorrect details.</div>
                    <fieldset>
                        <legend>个人信息</legend>
                        <div class="formRow">
                            <label for="name">姓名</label>
                            <span class="inputAddOn" style="background-color: rgb(46, 204, 113);"><i class="icon-user-1" style="color: rgb(255, 255, 255);"></i></span>
                            <input type="text" placeholder="姓名" name="uname" id="name" value="<?php echo set_value('uname') ?>">
                            <div class="tooltip" style="background-color: rgb(52, 73, 94); top: -69px;"><p>请输入你的姓名</p><i class="icon-caret-down" style="color: rgb(52, 73, 94);"></i></div>
                        </div>

                        <div class="formRow">
                            <label for="gender">性别</label>
                            <span class="inputAddOn" style="background-color: rgb(46, 204, 113);"><i class="  icon-male" style="color: rgb(255, 255, 255);"></i></span>
                             <select name="sex">
                             <optgroup label="性别">
                                <option value="男">男</option>
                                <option value="女">女</option>
                            </optgroup>
                            </select>
                        </div>
                          <div class="formRow">
                            <label for="age">年级</label>
                            <span class="inputAddOn" style="background-color: rgb(46, 204, 113);"><i class=" icon-graduation-cap" style="color: rgb(255, 255, 255);"></i></span>
                           <select name="grade">
                           <optgroup label="年级">
                                    <option value="大一">大一</option>
                                    <option value="大二">大二</option>
                                    <option value="大三">大三</option>
                                    <option value="大四">大四</option>
                                </optgroup>
                            </select>
                        </div>
                         <div class="formRow">
                            <label for="profession">专业</label>
                            <span class="inputAddOn" style="background-color: rgb(46, 204, 113);"><i class="icon-book" style="color: rgb(255, 255, 255);"></i></span>
                            <input type="text" value="<?php echo set_value('major') ?>" placeholder="专业/大类" name="major" id="profession" >
                            <div class="tooltip" style="background-color: rgb(52, 73, 94); top: -69px;"><p>请输入你所在的专业 / 大类</p><i class="icon-caret-down" style="color: rgb(52, 73, 94);"></i></div>
                        </div>
                        <div class="formRow">
                            <label for="phoneNumber-1">手机</label>
                            <span class="inputAddOn" style="background-color: rgb(46, 204, 113);"><i class="icon-phone" style="color: rgb(255, 255, 255);"></i></span>
                            <input type="tel" value="<?php echo set_value('longnum') ?>" placeholder="手机长号" name="longnum" id="phoneNumber-1">
                            <div class="tooltip" style="background-color: rgb(52, 73, 94); top: -69px;"><p>输入你的手机长号</p><i class="icon-caret-down" style="color: rgb(52, 73, 94);"></i></div>
                        </div>
                        <div class="formRow">
                            <label for="phoneNumber-2">手机</label>
                            <span class="inputAddOn" style="background-color: rgb(46, 204, 113);"><i class=" icon-phone" style="color: rgb(255, 255, 255);"></i></span>
                            <input type="text" value="" placeholder="手机短号" name="shortnum" id="phoneNumber-2">
                            <div class="tooltip" style="background-color: rgb(52, 73, 94); top: -69px;"><p>输入你的手机短号（没有可不填）</p><i class="icon-caret-down" style="color: rgb(52, 73, 94);"></i></div>
                        </div>
                         <button class="buttonPrev">上一步</button>
                        <button class="buttonNext">下一步</button>
                    </fieldset>
                </div>





                <div class="formPanel">
                    <h2>选择你想要加入的部门</h2>
                    <br>
                    <div class="errors"><i class="icon-exclamation-sign"></i>
                        Oops! You've entered some incorrect details.</div>
                    <fieldset>
                        <legend> details</legend>
                        <h3>第一志愿</h3>
                        <div class="formRow">
                            <label for="choice-1">choice-1</label>
                            <span class="inputAddOn" style="background-color: rgb(46, 204, 113);"><i class=" icon-ok-circled" style="color: rgb(255, 255, 255);"></i></span>
                            <select name="firstopt">
                             <optgroup label="第一志愿">
                                <option value="推广策划部">推广策划部</option>
                                <option value="人力资源部">人力资源部</option>
                                <option value="技术研发部">技术研发部</option>
                                <option value="设计创意部">设计创意部</option>
                                <option value="校园沙伐旅">校园沙伐旅</option>
                             </optgroup>
                            </select>
                            <div class="tooltip" style="background-color: rgb(52, 73, 94); top: -69px;"><p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit.</p><i class="icon-caret-down" style="color: rgb(52, 73, 94);"></i></div>
                        </div>
                        <h3>第二志愿</h3>
                        <div class="formRow">
                            <label for="choice-2">choice-2</label>
                            <span class="inputAddOn" style="background-color: rgb(46, 204, 113);"><i class=" icon-ok-circled" style="color: rgb(255, 255, 255);"></i></span>
                            <select name="secondopt">
                              <optgroup label="第二志愿">
                                <option value="推广策划部">推广策划部</option>
                                <option value="人力资源部">人力资源部</option>
                                <option value="技术研发部">技术研发部</option>
                                <option value="设计创意部">设计创意部</option>
                                <option value="校园沙伐旅">校园沙伐旅</option>
                             </optgroup>
                            </select>
                            <div class="tooltip" style="background-color: rgb(52, 73, 94); top: -69px;"><p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit.</p><i class=" icon-cog" style="color: rgb(52, 73, 94);"></i></div>
                        </div>
                        <h3>是否服从调配？</h3>
                        <div class="formRow">
                            <label for="Confirm">Confirm</label>
                            <span class="inputAddOn" style="background-color: rgb(46, 204, 113);"><i class=" icon-cog" style="color: rgb(255, 255, 255);"></i></span>
                            <select name="obey">
                             <optgroup label="是否服从调配？">
                                <option value="服从">服从</option>
                                <option value="不服从">不服从</option>
                              </optgroup>
                            </select>
                        </div>

                        <button class="buttonPrev">上一步</button>
                        <button class="buttonNext">下一步</button>
                    </fieldset>
                </div>
                <div class="formPanel">
                    <h2>展现你独特的一面</h2>
                    <br>
                    <div class="errors"><i class="icon-exclamation-sign"></i>
                        Oops! You've entered some incorrect details.</div>
                    <fieldset>
                        <legend>Other information</legend>
                        <div class="formRow">
                            <label for="houseNumber">House number</label>
                            <span class="inputAddOn " style="background-color: rgb(46, 204, 113);"><i class="icon-star" style="color: rgb(255, 255, 255);"></i></span>
                            <textarea name="featureshow" id="introduce" cols="30" rows="8" value="<?php echo set_value('featureshow') ?>">自我介绍及特长展示</textarea>
                        </div>
                        <div class="formRow">
                            <label for="favouriteDrink">Favourite drink</label>
                            <span class="inputAddOn" style="background-color: rgb(46, 204, 113);"><i class="icon-chat" style="color: rgb(255, 255, 255);"></i></span>
                            <textarea name="understanding" id="advice" cols="30" rows="8" value="<?php echo set_value('understanding') ?>">你希望从百度菁英俱乐部里获得什么</textarea>
                        </div>



                        <button class="buttonPrev">上一步</button>
                        <button id="sub" name="sub" type="submit" class="buttonSubmit icon-paper-plane">  提交 </button>
                    </fieldset>
                </div>
            </form>
        </div>

        <!-- Javascript -->
        <script src=<?php echo base_url('resources/js/jquery.min.js') ?>></script>
        <script src=<?php echo base_url('resources/js/jquery-ui.min.js') ?>></script>
        <script src=<?php echo base_url('resources/js/scripts.min.js') ?>></script>

        <script>
            $(document).ready(function(){
                $('#mstart').click(function(){
                    $('#name').focus();
                });
                $('#sub').click(function(){
                    if($('#name').val()=='' || $('#profession').val()==''
                        || $('#introduce').val()=='' || $('#advice').val()==''){
                        alert('您还有尚未填写的信息，请完善后继续！');
                        return false;
                    }
                });
            });

            $('body').phizzForms({
            });
        </script>

    </body>
</html>