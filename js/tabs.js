
var men_serv = $ ('.men_servicios');
var links = men_serv.find('a');
var items = $('.item_serv');

men_serv.on('click', 'a', function{
	var t =(this);
	t.addClass('active').siblings().removeClass('active');
});

