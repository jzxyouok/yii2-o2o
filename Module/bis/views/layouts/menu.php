<?php 
use yii\helpers\Url;
?>
<aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 门店管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
				    <li><a _href="<?php echo yii\helpers\Url::to(['location/add']) ?>" data-title="新增门店" href="javascript:void(0)">新增门店</a></li>
					<li><a _href="<?php echo yii\helpers\Url::to(['location/index']) ?>" data-title="门店列表" href="javascript:void(0)">门店列表</a></li>
				</ul>
			</dd>
		</dl>
		
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 团购管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo yii\helpers\Url::to(['deal/index']) ?>" data-title="团购列表" href="javascript:void(0)">团购列表</a></li>
					<li><a _href="<?php echo yii\helpers\Url::to(['deal/add']) ?>" data-title="团购商品添加" href="javascript:void(0)">团购商品添加</a></li>
					
				</ul>
			</dd>
		</dl>
		
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 账户管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo Url::to(['manager/index']) ?>" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
				</ul>
			</dd>
		</dl>
		
		
	</div>
</aside>