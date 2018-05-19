<?php
session_start();
require_once("func.php");
if(isset($_POST['submit']))
{
$pdodd=con();
$pdodd->query('SET NAMES `utf8`');
$dbhdd=$pdodd->prepare("INSERT INTO `chat` (`topic` ,`content` ,`commenter`) VALUES(:topic,:content,:commenter)");
$dbhdd->bindparam(':topic',$_GET['keyword']);
$dbhdd->bindparam(':content',$_POST['content']);
$dbhdd->bindparam(':commenter',$_POST['commenter']);
$dbhdd->execute();

var_dump($dbhdd->errorInfo());
}
?>
<!DOCTYPE html>
<html>
<head>

<title>Hope & Care</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body
{
font-family:Arial,微軟正黑體;
}
#main
{
background-color:white;
width:100%;
min-height:600px;
}
#comment
{
background-color:white;

}
.commentuser
{

width: 50px;
height: 50px;
color: rgb(34, 193, 255);
text-align: center;
position: absolute;
top: 36px;
left: 0px;
}
.box
{
background-color:#ffffff;
}
.foothighlight
{
color:#ffc0bc;
border-bottom:2px solid #e27287;
text-decoration: underline;
}
.headhighlight
{
color:#f88b95;
border-bottom:2px solid #e27287;
cursor:pointer;
}
.headhref
{
transition: color 0.5s ease;
-moz-transition: color 0.5s ease;
-webkit-transition: color 0.5s ease;
-o-transition: color 0.5s ease;
cursor:pointer;
color:white;
}

.headhighlight
{
color:#dddddd;
border-bottom:2px solid #e27287;
}
.headhref:hover
{
color:#dddddd;
border-bottom:2px solid #e27287;
}
.title
{
width:100%;
height:30px;
background-color:#ededed;
box-shadow:-4px -0px 3px rgba(20%,20%,40%,0.5);
color:#ff867f;
}
.commentbox
{
width: 100%;
border: 2px solid #ffaca8;
word-break: break-all;
border-radius: 6px;
position: absolute;
color:white;
left: 60px;
padding-left: 5px;
background-color:#ffaca8;
min-height:60px;
}
.commentmain
{
position:relative;
padding-bottom: 77px;
width:30%;
}
.commentconner
{
width: 0px;
height: 0px;
border-style: solid;
border-width: 15px 15px 0px 0;
border-color: transparent #ffaca8 transparent transparent;
position: absolute;
left: 46px;
top: 26px;
}
.foothref
{
transition: color 0.5s ease;
-moz-transition: color 0.5s ease;
-webkit-transition: color 0.5s ease;
-o-transition: color 0.5s ease;
cursor:pointer;
color:#fe554c;
text-decoration:none;
}

.foothref:hover
{
color:#ffc0bc;
border-bottom:2px solid #e27287;
}
.menu
{
position:relative;
}
.menumain
{
width:200px;
background-color:#e27287;
opacity:0.7;
position:absolute;top:10px;right:10px;
}
.topconner
{
width: 0px;
height: 0px;
border-style: solid;
border-width: 0 10px 10px 10px;
border-color: transparent transparent #e27287 transparent;
position:absolute;right:82px;

}
.itemmenu
{
cursor:pointer;
color:white;
}
.itemmenu:hover
{
background-color:#fff0ef;
color:black;
}
.headmenu
{
position:absolute;top:209px;right:7px;z-index:1;opacity:0;
transition: opacity 0.5s ease;
-moz-transition: opacity 0.5s ease;
-webkit-transition: opacity 0.5s ease;
-o-transition: opacity 0.5s ease;
}
#hi
{
width:250px;
text-align:left;
float:center;
position:absolute;left:0px;
background-color:#e27287;
opacity:0.7;
}
.search
{
height:30px;
border-bottom:1px solid #F0F0F0;
cursor:pointer;
color:#ffffff;
}
.search:hover
{
background-color:#F0F0F0;
color:#ff867f;
}
p
{
text-indent : 2em;
color:rgb(143, 88, 88);
}
.contentsubtitle
{
border-bottom:1px solid #d8d8d8;
}
</style>
<script>
var headmenu=0;
var sum=0;
var select=0;
var checkmax=0;
var max=0;
var textvalue='';
function data()
{
	var select=document.getElementById('selector').value;
	var data=document.getElementById('keyword').value;
	if(select=='website')
	{
		window.location.assign('data.php?keyword='+data);
	}else
	{
		window.location.assign('https://www.google.com/search?q='+data);
	}
}
function updown(e)
{
	if(e.keyCode=='38'||e.keyCode=='40')
	{
		if(document.getElementById("keyword").value!='')
		{
			if(e.keyCode=='40')
			{
				max=document.getElementById('countednum').innerText;
				if(select!=0)
				{
					document.getElementById(select).style.background='#e27287';
					document.getElementById(select).style.color='#ffffff';
				}
				select++;
				if(select>max)
				{
					select=0;
				}
				if(select!=0)
				{
					document.getElementById("keyword").value=document.getElementById(select).innerHTML;
					document.getElementById(select).style.background='#F0F0F0';
					document.getElementById(select).style.color='#ff867f';
				}else
				{
					document.getElementById("keyword").value=textvalue;
				}
			}else
			{
				if(select>=0)
				{
					if(select!=0)
					{
						document.getElementById(select).style.background='#e27287';
						document.getElementById(select).style.color='#ffffff';
					}
					select--;
					if(select==-1)
					{
						select=max;
					}					
					if(select!=0)
					{
						document.getElementById("keyword").value=document.getElementById(select).innerHTML;
						document.getElementById(select).style.background='#F0F0F0';
						document.getElementById(select).style.color='#ff867f';
					}else
					{
						document.getElementById("keyword").value=textvalue;
					}
				}
			}
		}
	
	}
	if(e.keyCode=='13')
	{
		data();
	}
}
function ajax()
{
	textvalue=document.getElementById('keyword').value;
	if(document.getElementById('keyword').value!='')
	{
		var a=document.getElementById("keyword").value;
			var xmlhttp;
			if(window.XMLHttpRequest)
			{
				xmlhttp=new XMLHttpRequest();
			}
			else
			{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
				select=0;
				var ca=xmlhttp.responseText.indexOf("[wht]");
				document.getElementById("hi").innerHTML=xmlhttp.responseText.substring(0,ca);
				}
			};
			xmlhttp.open("GET","searchch.php?search="+a,true);
			xmlhttp.send();
	}else
	{
		document.getElementById('hi').innerHTML='';
	}
}
function menu()
{
if(headmenu==0)
{
document.getElementById('headmenu').style.opacity='1';
document.getElementById('headmenuclick').style.color='#f88b95';
document.getElementById('headmenuclick').style.borderBottom='2px solid #e27287';
headmenu=1;
}
else
{
document.getElementById('headmenu').style.opacity='0';
document.getElementById('headmenuclick').style.color='#f88b95';
document.getElementById('headmenuclick').style.borderBottom='2px solid #e27287';
headmenu=0;
}
}
</script>
</head>


<body  bgcolor=#f4f4f4>

<div style="width:100%;height:200px;background-image:url('images/bg123.gif');position:relative;" id=head >
<div style="position:absolute;top:15px;left:15px;"><img src=banner.png width=400px></div>
<div style="position:absolute;bottom:0px;right:5px;background-color: #f88b95;"><table><tr><td onclick="javascript:parent.location.href='index.php'" class=headhref >首頁</td><td onclick="menu()" class=headhighlight id=headmenuclick>資料</td><td onclick="javascript:parent.location.href='about.php'" class=headhref >關於我們</td></tr></table>
</div></div><br>
<div id=main>

<div class=title>
<?php 

if($_SESSION['vote']=='')
{
$_SESSION['vote']=0;
}

$topic=$_GET['keyword'];
$dbh =con();
$dbh -> query('set names UTF8');
$a = $dbh ->prepare("SELECT * FROM `data` WHERE topic=:topic");
$a->bindparam(':topic',$topic);
$a->execute();
$row=$a->fetch();
echo $row['topic']."
</div>
".$row['topicinfo'];
if($_SESSION['vote']!=1)
{
$search=$row['search'];
$search++;
$dbha =con();
$dbha -> query('set names UTF8');
$aa = $dbha ->prepare("UPDATE  `u988619767_data`.`data` SET  `search` = :search WHERE  `data`.`id` =:id;");
$aa->bindparam(':id',$row['id']);
$aa->bindparam(':search',$search);
$aa->execute();
$_SESSION['vote']=1;
}
?>
</div>
<br>
<div class=headmenu id=headmenu>
<div id=menu>
<div class=topconner></div>
<div class=menumain><table width=100% height=100%><?php 
$pdox=con();
$pdox->query('SET NAMES `utf8`');
$dbhx=$pdox->prepare("SELECT * FROM `data`");
$dbhx->execute();
while($row=$dbhx->fetch())
{
echo "<tr><td class=itemmenu onclick=\"javascript:parent.location.href='data.php?keyword={$row['topic']}'\">{$row['topic']}</td></tr>";
}
?></table></div>
</div>
</div>
<div id=comment>
<div class=title>留言</div>
<div style="padding-left:10px;padding-top:10px;padding-bottom:5px;">

<?php
$pdo=con();
$pdo -> query('set names UTF8');
$dbh=$pdo->prepare("SELECT * FROM `chat` WHERE `topic`=:topic ORDER BY `time` desc");
$dbh->bindparam(':topic',$_GET['keyword']);
$dbh->execute();

while($row=$dbh->fetch())
{
echo "<div class=commentmain><div class=commentbox>{$row['content']}<br></div><div class=commentconner></div><br>
<div class=commentuser>{$row['commenter']}</div>
</div><br>";
}
?>
</div>
</div>
<div class=box>
<div class=title>留下感想</div>
<form action="
<?php
echo "data.php?keyword={$_GET['keyword']}";
?>
" method="POST">
<table><tr>
<td>名字︰</td><td><input type=text name=commenter style="width:580px;"></td></tr>
<tr><td valign=top >感想︰</td><td><textarea name=content cols=70 rows=14></textarea></td></tr></table><br>
<input type=reset value=重設>&nbsp;
<input type=submit name="submit" value=提交>
</form>
</div><br>

<div style="position:absolute;top:180px;left:50%;margin-left:-184px;">
<div style="position:relative;">
<input type=search name="keyword"  id="keyword" autocomplete="off" style="width:250px;"  onkeyup="updown(event)" oninput="ajax()" x-webkit-speech required/ ><select id=selector><option value=website>站內</option><option value=google>Google</option></select><input type=button value=搜索 onclick=data()></input>
<div id="hi" ></div>
</div>
</div>
<div style="background-color:white;opacity:0.6;color:rgb(255, 0, 235);font-size:18px;border-radius:6px;position:absolute;top:99px;right:19px;">擁有希望的人才能得到快樂<br>懂得關懷的人才能得到幸福</div>
</body>
</html>
