<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="ru-RU">
 <head>
<?php
    include_once('setupDB.php');
    ?>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.3.363"/>
  
  <script type="text/javascript">

   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "page.css"], "outOfDate":[]};
</script>
<script src="scripts/jquery-1.8.3.min.js"></script>
<script src="scripts/pagin.js"></script>
  <script src="scripts/search.js"></script>
  <title>page</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=443350757"/>
  <link rel="stylesheet" type="text/css" href="css/master_______-a.css?crc=4260637060"/>
  <link rel="stylesheet" type="text/css" href="css/page.css?crc=319780738" id="pagesheet"/>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu123-4"><!-- group -->
     <a class="nonblock nontext clearfix grpelem" id="u123-4" href="index.php"><!-- content --><p id="u123-2">Главная</p></a>
     <a class="nonblock nontext clearfix grpelem" id="u129-4" href="information.php"><!-- content --><p id="u129-2">Информация</p></a>
     <a class="nonblock nontext clearfix grpelem" id="u132-4" href="anons.php"><!-- content --><p id="u132-2">Анонсы</p></a>
     <a class="nonblock nontext clearfix grpelem" id="u135-4" href="news.php"><!-- content --><p id="u135-2">Новости</p></a>
     <a class="nonblock nontext clearfix grpelem" id="u138-4" href="document.php"><!-- content --><p id="u138-2">Документы</p></a>
     <a class="nonblock nontext clearfix grpelem" id="u141-4" href="uslugi.php"><!-- content --><p id="u141-2">Услуги</p></a>
     <a class="nonblock nontext clearfix grpelem" id="u144-4" href="report.php"><!-- content --><p id="u144-2">Обратная связь</p></a>
    </div>
    <div class="clearfix colelem" id="pu148"><!-- group -->
     <div class="clearfix grpelem" id="u148"><!-- group -->
      <div class="clearfix grpelem" id="u119"><!-- group -->
       <div class="clearfix grpelem" id="u116-8"><!-- content -->
        <p id="u116-2">МУК &quot;Муниципальный Культурный Комплекс&quot;</p>
        <p id="u116-4">Администрации МО &quot;Сенгилеевский район&quot; Ульяновской области</p>
        <p id="u116-5">&nbsp;</p>
        <p id="u116-6">&nbsp;</p>
       </div>
       <div class="clip_frame grpelem" id="u106"><!-- image -->
        <img class="block" id="u106_img" src="images/dscn5788.jpg?crc=522093097" alt="" width="398" height="260"/>
       </div>
      </div>
     </div>
     <div class="clip_frame grpelem" id="u467"><!-- image -->
      <img class="block" id="u467_img" src="images/icons8-%d0%be%d0%b4%d0%bd%d0%be%d0%ba%d0%bb%d0%b0%d1%81%d1%81%d0%bd%d0%b8%d0%ba%d0%b8-480.png?crc=4024420463" alt="" width="65" height="65"/>
     </div>
     <div class="clip_frame grpelem" id="u469"><!-- image -->
      <img class="block" id="u469_img" src="images/icons8-%d0%b2%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d0%b5-480.png?crc=4094704951" alt="" width="65" height="65"/>
     </div>
     <div class="clearfix grpelem" id="u471-4"><!-- content -->
      <p>+7(84233) 2-15-61</p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu151"><!-- group -->
     <input type="text" class="grpelem" id="u151">
     <div class="clearfix grpelem" id="u154-4"><!-- content -->
      <p id="u154-2">Поиск</p>
     </div>
     <div class="clearfix grpelem" id="u157"><!-- group -->
      <div class="clearfix grpelem" id="u160-4"><!-- content -->
       <p id="u160-2">Главная</p>
      </div>
      <div class="clip_frame grpelem" id="u472"><!-- image -->
       <img class="block" id="u472_img" src="images/icons8-%d0%bc%d0%b0%d1%80%d0%ba%d0%b5%d1%80-%d0%bc%d0%b5%d1%81%d1%82%d0%b0-48.png?crc=4155741371" alt="" width="39" height="39"/>
      </div>
     </div>
    </div>
<?
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $table = $_GET['table'];
    $connect = mysqli_connect(HOST,USER,PASSWORD,DB);
if(!$connect) exit('Ошибка подключения к БД');
$query = mysqli_query($connect,"SELECT * FROM `$table` WHERE `id` = $id");
$row = mysqli_fetch_assoc($query); 
if ($table == "anons"){
  echo '<div class="clearfix colelem" id="u775"><!-- column -->
     <div class="position_content" id="u775_position_content">
      <div class="clearfix colelem" id="u776-4"><!-- content -->
       <p>',"$row[title]",'</p>
      </div>
      <div class="clip_frame colelem" id="u778"><!-- image -->
       <img class="block" id="u778_img" src="images/',$table,'/',"$row[photo]",'?crc=4252155979" alt="" width="442" height="568"/>
      </div>
      <div class="colelem" id="u780"><!-- simple frame --></div>
      <div class="clearfix colelem" id="u777-22"><!-- content -->
       ',"$row[text]",'
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu797-4"><!-- group -->
     <div class="rgba-background clearfix grpelem" id="u797-4"><!-- content -->
      <p id="u797-2">Назад</p>
     </div>
     <div class="clearfix grpelem" id="u794-4"><!-- content -->
      <p>',"$row[date]",'</p>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="1472" data-content-above-spacer="1472" data-content-below-spacer="40"></div>
   </div>
  </div>';
}
if (!$row['photo'] == ""){
echo '<div class="clearfix colelem" id="u775"><!-- column -->
     <div class="position_content" id="u775_position_content">
      <div class="clearfix colelem" id="u776-4"><!-- content -->
       <p>',"$row[title]",'</p>
      </div>
      <div class="clip_frame colelem" id="u778"><!-- image -->
       <img class="block" id="u778_img" src="images/',$table,'/',"$row[photo]",'?crc=4252155979" alt="" width="442" height="332"/>
      </div>
      <div class="colelem" id="u780"><!-- simple frame --></div>
      <div class="clearfix colelem" id="u777-22"><!-- content -->
       ',"$row[text]",'
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu797-4"><!-- group -->
     <div class="rgba-background clearfix grpelem" id="u797-4"><!-- content -->
      <p id="u797-2">Назад</p>
     </div>
     <div class="clearfix grpelem" id="u794-4"><!-- content -->
      <p>',"$row[date]",'</p>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="1472" data-content-above-spacer="1472" data-content-below-spacer="40"></div>
   </div>
  </div>';
}else
{
  echo '<div class="clearfix colelem" id="u775"><!-- column -->
     <div class="position_content" id="u775_position_content">
      <div class="clearfix colelem" id="u776-4"><!-- content -->
       <p>',"$row[title]",'</p>
      </div>
      <div class="clearfix colelem" id="u777-22"><!-- content -->
       ',"$row[text]",'
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu797-4"><!-- group -->
     <div class="rgba-background clearfix grpelem" id="u797-4"><!-- content -->
      <p id="u797-2">Назад</p>
     </div>
     <div class="clearfix grpelem" id="u794-4"><!-- content -->
      <p>',"$row[date]",'</p>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="1472" data-content-above-spacer="1472" data-content-below-spacer="40"></div>
   </div>
  </div>';
}



  }
?>
  <!-- Other scripts -->
  <script type="text/javascript">
   // Decide weather to suppress missing file error or not based on preference setting
var suppressMissingFileError = false
</script>
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Некоторые файлы на сервере могут отсутствовать или быть некорректными. Очистите кэш-память браузера и повторите попытку. Если проблему не удается устранить, свяжитесь с разработчиками сайта.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(f+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(f)):alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=85721165" type="text/javascript" async data-main="scripts/museconfig.js?crc=436936948" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
