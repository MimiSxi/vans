<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:31:"./template/pc/lists_special.htm";i:1608278125;}*/ ?>
<!DOCTYPE html>
<html>
    <head> 
        <title><?php echo $eyou['field']['seo_title']; ?></title> 
        <meta name="renderer" content="webkit" /> 
        <meta charset="utf-8" /> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0,minimal-ui" /> 
        <meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" /> 
        <meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
        <link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
        <link rel="stylesheet" type="text/css" href="https://www.eyoucms.com/skin/css/model-style.css" />
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="description">
                    <h1><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></h1>
                    <h2></h2>
                    <nav>
                        <div class="bitcron_nav_container">
                            <div class="bitcron_nav">
                                <div class="mixed_site_nav_wrap site_nav_wrap">
                                    <ul class="mixed_site_nav site_nav sm sm-base">
                                         <li><a href="/" class="active current">首页</a></li>
                                         <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "selected", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                                         <li><a href="<?php echo $field['typeurl']; ?>" class="<?php echo $field['currentstyle']; ?>"><?php echo $field['typename']; ?></a></li>
                                         <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                                    </ul>
                                    <div class="clear clear_nav_inline_end"></div>
                                </div>
                            </div>
                            <div class="clear clear_nav_end">
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <main>
                <!-- #download# -->
                <!-- #single# -->
                <!-- #guestbook# -->
                <!-- #media# -->
                <section class="article-list">
                    <?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "",      "keyword"=> "", ); $tagList = new \think\template\taglib\eyou\TagList; $_result_tmp = $tagList->getList($param, 10, "", "", "desc", "on","off");if(is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 38, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                    <article>
                        <?php if(!(empty($field['is_litpic']) || (($field['is_litpic'] instanceof \think\Collection || $field['is_litpic'] instanceof \think\Paginator ) && $field['is_litpic']->isEmpty()))): ?>
                        <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" style="float: left; margin-right: 10px"> <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" height="100" /> </a>
                        <?php endif; ?> 
                        <h2><a href="<?php echo $field['arcurl']; ?>" class=""><?php echo $field['title']; ?></a><span><?php echo $field['click']; ?>°C</span></h2>
                        <div class="excerpt">
                            <p><?php echo $field['seo_description']; ?></p>
                        </div>
                        <div class="meta">
                            <span class="item"><time><?php echo MyDate('Y-m-d',$field['add_time']); ?></time></span>
                            <span class="item"><?php echo $field['typename']; ?></span>
                        </div>
                    </article>
                    <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                </section>
                <section class="list-pager">
                     <?php  $__PAGES__ = isset($__PAGES__) ? $__PAGES__ : ""; $tagPagelist = new \think\template\taglib\eyou\TagPagelist; $__VALUE__ = $tagPagelist->getPagelist($__PAGES__, "index,pre,pageno,next,end", "2"); echo $__VALUE__; ?>
                    <div class="clear"></div>
                </section>
            </main>
        </div>
        <footer><span><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?></span></footer>
    </body>
</html>