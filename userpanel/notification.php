<script src='http://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js'></script>
<script>

 <?php if ($_GET['durum']=='ok') { ?>

 $.notify({
	title: 'Məlumat mesajı',
	message: 'Əməliyyat uğurla yerinə yetirildi'
},{
    type: 'pastel-success',
     animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutRight'
            },

    delay: 6000,

    template: '<div data-notify="container" class="col-xs-11 col-sm-6 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});


<?php }  elseif($_GET['durum']=='exit') {?>

   $.notify({
	title: 'Hesabdan',
	message: 'uğurla çıxış edildi'
},{
    type: 'pastel-warning',
     animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutRight'
            },

    delay: 6000,
    template: '<div data-notify="container" class="col-xs-8 col-sm-4 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});

<?php }  elseif($_GET['buy']=='ok') {?>

$.notify({
	title: 'Satın alma prosesi uğurla bitdi',
	message: 'XXXX Siz imtahanını əldə etdiniz!'
},{
    type: 'pastel-success',
     animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutRight'
            },

    delay: 6000,
    template: '<div data-notify="container" class="col-xs-8 col-sm-4 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});

<?php }  elseif($_GET['login']=='ok') {?>

   $.notify({
	title: 'Salam Əziz <?php echo $usercek['user_name']?>',
	message: 'Şəxsi kabinetinizə xoş gəldiniz!'
},{
    type: 'pastel-success',
     animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutRight'
            },

    delay: 6000,
    template: '<div data-notify="container" class="col-xs-8 col-sm-4 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});


<?php }  elseif($_GET['change']=='ok') {?>

   $.notify({
	title: 'Hesab Parametrləri',
	message: 'Məlumatlarınız uğurla yeniləndi!'
},{
    type: 'pastel-success',
     animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutRight'
            },

    delay: 6000,
    template: '<div data-notify="container" class="col-xs-8 col-sm-4 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});


<?php }  elseif($_GET['change']=='no') {?>

   $.notify({
	title: 'Hesab Parametrləri',
	message: 'Məlumatlarınız yenilənmə prosesində problem yarandı!'
},{
    type: 'pastel-danger',
     animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutRight'
            },

    delay: 6000,
    template: '<div data-notify="container" class="col-xs-8 col-sm-4 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});


<?php }  elseif($_GET['verify']=='ok') {?>

   $.notify({
	title: 'Hesab Parametrləri',
	message: 'E-mailnizə 6 rəqəmli şifrə göndərilidi!'
},{
    type: 'pastel-success',
     animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutRight'
            },

    delay: 6000,
    template: '<div data-notify="container" class="col-xs-8 col-sm-4 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});


<?php }  elseif($_GET['verify']=='no') {?>

   $.notify({
	title: 'Hesab Parametrləri',
	message: 'Bu email-ə aid hesab mövcud deyil!'
},{
    type: 'pastel-danger',
     animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutRight'
            },

    delay: 6000,
    template: '<div data-notify="container" class="col-xs-8 col-sm-4 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});


<?php }  elseif($_GET['login']=='no') {?>

   $.notify({
	title: 'Hesab Parametrləri',
	message: 'E-mail və ya şifrə yanlışdır'
},{
    type: 'pastel-danger',
     animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutRight'
            },

    delay: 6000,
    template: '<div data-notify="container" class="col-xs-8 col-sm-4 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});


<?php }  elseif($_GET['pass']=='no') {?>

   $.notify({
	title: 'Hesab Parametrləri',
	message: 'Şifrə yenilənə bilmədi!'
},{
    type: 'pastel-danger',
     animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutRight'
            },

    delay: 6000,
    template: '<div data-notify="container" class="col-xs-8 col-sm-4 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});


<?php }  elseif($_GET['login']=='nolog') {?>

   $.notify({
	title: 'İcazəsiz giriş',
	message: 'Hesaba daxil olmamısınız!'
},{
    type: 'pastel-danger',
     animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutRight'
            },

    delay: 6000,
    template: '<div data-notify="container" class="col-xs-8 col-sm-4 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});


<?php }  elseif($_GET['pass']=='ok') {?>

   $.notify({
	title: 'Hesab Parametrləri',
	message: 'Şifrə uğurla yeniləndi!'
},{
    type: 'pastel-success',
     animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutRight'
            },

    delay: 6000,
    template: '<div data-notify="container" class="col-xs-8 col-sm-4 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});


<?php }  elseif($_GET['durum']=='add') {?>

   $.notify({
	title: 'Alış veriş',
	message: 'Sifariş qəbul olundu!'
},{
    type: 'pastel-success',
     animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutRight'
            },

    delay: 6000,
    template: '<div data-notify="container" class="col-xs-8 col-sm-4 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});


<?php }  elseif($_GET['durum']=='save') {?>

   $.notify({
	title: 'Düzənləmə işləmləri',
	message: 'Sizin sifarişiniz yadda saxlanıdlı'
},{
    type: 'pastel-info',
     animate: {
                enter: 'animated fadeInUp',
                exit: 'animated fadeOutRight'
            },

    delay: 6000,
    template: '<div data-notify="container" class="col-xs-8 col-sm-4 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});

<?php } ?>


</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js'></script>
