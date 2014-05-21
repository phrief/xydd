{{include file="header.tpl"}}

<style>
	#navbar1 {
		margin-bottom: 15px;
	}
	#ul_tables {
		margin: 0;
		margin-bottom: 12px;
	}
	#ul_tables>li h3 {
		margin-left: 15px;
		font-size: 16px;
	}
	#ul_tables>li span.ui-li-count {
		font-size: 12px;
	}
</style>

<script>
	var $imgs;
	
	$(document).one('pageinit', function(){
		$imgs = $('img', '#ul_tables').css({
			'max-width': 30,
			'max-height': 30
		});
	});
	
	function enterTable(table) {
		var url = 'chatroom.php?table='+ table;
		mGet(url, {
			 _module: 'apply'
		}, null, function(r){
			if (r.title === 'pass') {
				jumpto(url, r.msg);
				return false;
			}
		});
	}
</script>

<div data-role="content" data-theme="a">
    
    <div id="navbar1" data-role="navbar" data-iconpos="left"><ul>
        <li>
            <a href="map.php" data-icon="grid">
                校园地图
            </a>
        </li>
        <li>
            <a href="#" data-icon="star" class="ui-btn-active ui-state-persist">
                咖啡厅
            </a>
        </li>
    </ul></div>
    
    <h3>欢迎来到咖啡厅</h3>
    <ul id="ul_tables" data-role="listview">
        {{section name="table" loop=$NUM_TABLE}}
        <li><a href="javascript:enterTable({{$smarty.section.table.index+1}})"><img src="images/chat.png" class="ui-li-icon"><h3>{{$smarty.section.table.index+1}}号桌</h3><span class="ui-li-count">已有 {{$count_users[$smarty.section.table.index+1]}} 人</span></a></li>
        {{/section}}
    </ul>
    
</div>

{{include file="footer.tpl"}}