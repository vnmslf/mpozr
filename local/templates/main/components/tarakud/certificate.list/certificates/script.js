var bAjax = "N";

function certificatePopup(title, btnOrder, btnClose, urlPost, elementId)
{
	formPopup = BX.PopupWindowManager.create("certificate-form", "", {
		offsetTop : -70,
		offsetLeft : -50,
		autoHide : true,
		closeByEsc : true,
		closeIcon : true,
		titleBar : true,
		draggable: {restrict:true},
		titleBar: {content: BX.create("span", {html: title, 'props': {'className': 'sale-popup-title'}})},
		content : BX("certificate-popup"),
		events: {
			onPopupShow: function() {
				if (BX('certificate-phone')) {
					let phoneMasked = new BX.MaskedInput({
						mask: '+7 999 999 9999',
						input: BX('certificate-phone'),
						placeholder: '_'
					});
				}
			}
        }
	});
	formPopup.setButtons([
		new BX.PopupWindowButton({
			text: btnOrder,
			className: "popup-save",
			id: "popup-save",
			events: {
				click: function()
				{
					var el = $(this);
					var bError = false;
					BX('certificate-error').innerHTML = '';
					BX.style(BX('certificate-error'), 'display', 'none');
					
					let obSelect = BX.findChild(BX("certificate-popup"), {class: 'js-required'}, true, true);
					obSelect.forEach(function(element){
						BX.style(element, 'border', '1px solid #ccc');
						
						if (!element.value.length)
						{
							BX.style(element, 'border', '1px solid red');
							bError = true;
						}
						if (element.getAttribute('name') == "email_recipient")
						{
							let pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
							if(!pattern.test(element.value))
							{
								BX.style(element, 'border', '1px solid red');
								bError = true;
							}
						}
						if (element.getAttribute('name') == "email_buyer_recipient")
						{
							let pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
							if(!pattern.test(element.value))
							{
								BX.style(element, 'border', '1px solid red');
								bError = true;
							}
						}
						if (element.getAttribute('name') == "phone_recipient")
						{
							let pattern = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
							if(!pattern.test(element.value))
							{
								BX.style(element, 'border', '1px solid red');
								bError = true;
							}
						}
					});
					
					if (bAjax == "N" && !bError)
					{
						bAjax = "Y";
						BX.showWait(BX('certificate-loader'));
						var params = {
							ajax: 'Y',
							id: elementId,
							email_recipient: BX('certificate-email').value,
							email_buyer: BX('certificate-email_buyer').value,
							name_buyer: BX('certificate-name').value,
							name_recipient: BX('certificate-name-rec').value,
							sessid: BX.bitrix_sessid()
						};
						
						if (BX('certificate-phone')) {
							params["phone_recipient"] = BX('certificate-phone').value;
						}
						if (BX('certificate-text')) {
							params["text_recipient"] = BX('certificate-text').value;
						}
						
						BX.onCustomEvent(this, 'onBeforeCertificateBuy', [{
							params: params,
							target: el
						}]);
						
						BX.ajax({
							'method': 'POST',
							'dataType': 'json',
							'url': urlPost,
							'data': params,
							'onsuccess': function(data){
								bAjax = "N";
								BX.closeWait();
								
								BX.onCustomEvent(this, 'onAfterCertificateBuy', [{
									result: data,
									params: params,
									target: el
								}]);
								
								if (data.status == "ok")
								{
									BX.style(BX('popup-save'), 'display', 'none');
									BX.style(BX('certificate-popup-form'), 'display', 'none');
									BX.style(BX('certificate-popup-message'), 'display', 'block');
								}
								else
								{
									BX('certificate-error').innerHTML = data.answer;
									BX.style(BX('certificate-error'), 'display', 'block');
								}
							},
							'onfailure': function(){
								bAjax = "N";
								BX.closeWait();
							}
						});
					}
				}
			}
		}),
		new BX.PopupWindowButton({
			text: btnClose,
			className: "popup-close",
			id: "popup-close",
			events: {
				click: function()
				{
					BX.style(BX('certificate-popup-form'), 'display', 'block');
					BX.style(BX('certificate-popup-message'), 'display', 'none');
					formPopup.close();
				}
			}
		})
	]);

	formPopup.show();
}