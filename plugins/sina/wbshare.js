(function(){
	function getQuery(a){
		var param = {
			url: resetHash(location.href),
			type: '1',
			count: '0', /**是否显示分享数，1显示(可选)*/
			appkey: '26534868', /**您申请的应用appkey,显示分享来源(可选)*/
			title: '五邑大学移动社区-校园地带', /**分享的文字内容(可选，默认为所在页面的title)*/
			pic: '', /**分享图片的路径(可选)*/
			ralateUid: '', /**关联用户的UID，分享微博会@该用户(可选)*/
			language: 'zh_cn', /**设置语言，zh_cn|zh_tw(可选)*/
			rnd: new Date().valueOf()
		}
		return param[a];
	}
	var language="";
	function share() {
		var url = "http://service.weibo.com/share/share.php?url="+getQuery("url")+"&appkey="+getQuery("appkey")+"&title="+getQuery("title")+"&pic="+getQuery("pic")+"&ralateUid="+getQuery("ralateUid")+"&language="+language;
		window.open(url, "_blank", "width=615,height=505");
	}
	window.sinaWbShare = share;
})();