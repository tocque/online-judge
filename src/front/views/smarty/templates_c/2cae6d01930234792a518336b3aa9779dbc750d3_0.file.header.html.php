<?php
/* Smarty version 3.1.31, created on 2017-08-15 10:37:43
  from "/var/www/html/OnlineJudge/src/front/views/smarty/templates/common/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5992cef7202466_47516073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cae6d01930234792a518336b3aa9779dbc750d3' => 
    array (
      0 => '/var/www/html/OnlineJudge/src/front/views/smarty/templates/common/header.html',
      1 => 1502793459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5992cef7202466_47516073 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- header部分start -->
    <!-- 静态导航条 -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.html">NENUOJ</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../problems/problem.html">题目</a></li>
            <li><a href="../status/status.html">状态</a></li>
            <li><a href="../contest/contest.html">比赛</a></li>
            <li><a href="../rank/rank.html">排名</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ToRapture <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">查看信息</a></li>
                <li><a href="#">更改信息</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- header部分end --><?php }
}