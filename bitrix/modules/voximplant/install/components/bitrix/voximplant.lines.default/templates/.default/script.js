BX.namespace("BX.Voximplant.Numbers");

BX.Voximplant.Numbers = {
	init: function(numbers)
	{
		this.numbers = numbers ? numbers : {};
		BX.ready(function(){
			BX.bind(BX('search_btn'), 'click', function() {
				BX.submit(BX('search_form'));
				return false;
			});
			BX.bind(BX('clear_btn'), 'click', function() {
				BX('search_form').elements.FILTER.value = '';
				BX.submit(BX('search_form'));
				return false;
			});
			BX.bind(BX('option_btn'), 'click', function() {
				var node = BX.create('SPAN', {props : {className : "wait"}});
				BX.addClass(BX('option_btn'), "webform-small-button-wait webform-small-button-active");
				this.appendChild(node);
				BX.ajax({
					method: 'POST',
					url: (BX.message("VI_NUMBERS_URL") + 'option'),
					data: {sessid : BX.bitrix_sessid(), portalNumber : BX('option_form').elements.portalNumber.value},
					dataType: 'json',
					onsuccess: function()
					{
						BX.removeClass(BX('option_btn'), "webform-small-button-wait webform-small-button-active");
						BX.remove(node);
					},
					onfailure: function()
					{
						BX.removeClass(BX('option_btn'), "webform-small-button-wait webform-small-button-active");
						BX.remove(node);
					}
				});
				return false;
			});
		});
	}
};