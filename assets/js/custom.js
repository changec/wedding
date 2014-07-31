/*------------ 表單驗證 ---------------*/
jQuery(document).ready(function($){
	$("#wedding-form").validate({
		highlight: function(element, errorClass, validClass) {
			$(element).parent().addClass(errorClass);
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parent().removeClass(errorClass);
		},
		errorElement: "span",
		errorClass: "has-error",
		errorPlacement: function(error, element) {
			$(error).addClass("label label-danger").insertAfter($(element).parent());
        },
		rules: {
			name: {
				required: true,
				maxlength:15
			},
			change_or_wendy: {
				required: true
			},
			tel: {
				required: true,
				maxlength:10
			},
			addr: {
				required: true
			}		
		},
		messages: {
			name: {
				required:"請輸入您的名字",
				maxlength: "最多十五個字"
			},
			change_or_wendy: {
				required:"請至少選擇一個"
			},
			tel: {
				required:"請輸入您的連絡資訊",
				maxlength: "最多十個字"
			},
			addr: {
				required:"請輸入您的收件地址"
			}
		}
	});
});
$(function(){ 
    // direction
    //var direction = ;
	$('#map').tinyMap({
		'center': '新北市板橋區',
        'zoom': 13
	});    
 // Events
    $('body')
        .on('click', '[data-map-control]', function () {
			var start = $( "input:text[name=start]" ).val();
			if(!start){ start = '新北市板橋區'};
			var end = $( "input:radio[name=which]:checked" ).val();
			$('#path-form').hide();
            var obj = $(this),
                map = $('#map'),
                act = obj.data('map-control'),
                opt = {},
                toggle = (obj.data('toggle') || 0);
            switch (act.toString().toLowerCase()) {
            case 'direction':
                opt = {
                    'direction': [{
						'from': start,
						  'to': end,
					  'travel': 'driving',
					   'panel': '#direction-panel'
					}]
                };
                break;          
            }
			if (0 === toggle % 2) {
                obj.removeClass('btn-default').addClass('btn-success');
            } else {
                obj.removeClass('btn-success').addClass('btn-default');
            }
            map.tinyMap('modify', opt);
			obj.data('toggle', ++toggle);
        });
   

});