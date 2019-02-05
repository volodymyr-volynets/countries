
function numbers_widgets_addresses_decode_postal_code(element) {
	var form = Numbers.Form.getForm(element);
	var values = Numbers.Form.getAllValues(form);
	var country_code = Numbers.Form.getValue(values, null, element, 'wg_address_country_code');
	var postal_code = Numbers.Form.getValue(values, null, element, 'wg_address_postal_code');
	if (country_code && postal_code) {
		$.ajax({
			url: '/Numbers/Countries/Widgets/Addresses/Controller/DecodePostalCode/_Index',
			method: "POST",
			data: {
				token: Numbers.token,
				country_code: country_code,
				postal_code: postal_code,
				__ajax: true
			},
			dataType: "json"
		}).done(function(data) {
			if (data.success) {
				var province_code = Numbers.Form.getValue(values, null, element, 'wg_address_province_code');
				if (!province_code) {
					Numbers.Form.setValue(form, Numbers.Form.getPath(element, 'wg_address_province_code'), data.province_code);
				}
				var city = Numbers.Form.getValue(values, null, element, 'wg_address_city');
				if (!city) {
					Numbers.Form.setValue(form, Numbers.Form.getPath(element, 'wg_address_city'), data.city);
				}
				// these we just replace
				Numbers.Form.setValue(form, Numbers.Form.getPath(element, 'wg_address_latitude'), data.latitude);
				Numbers.Form.setValue(form, Numbers.Form.getPath(element, 'wg_address_longitude'), data.longitude);
			} else {
				Numbers.Form.error(element, 'warning', data.error, Numbers.Form.getName(element, 'wg_address_postal_code'), {skip_i18n: true});
			}
		});
	}
}