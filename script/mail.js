$(function(){
    $('#contact').submit(function(){
        var errors = false;
        $(this).find('span').empty();

        $(this).find('input').each(function(){
            if( $.trim( $(this).val() ) == '' ){
                errors = true;
                $(this).next().text( 'Заполните это поле');
            }
        });

        if('errors'){
            var data = $('#contact').serialize();
            $.ajax ({
                url: 'mail.php',
                type: 'POST',
                data: data,
                beforeSend: function() {
                    $('#submit').next().text('Отправляю...');
                },
                success: function(res) {
                    alert('Заявка успешно отправлена. Наш Менеджер свяжется с Вами в ближайшее время!');
                },
                error: function() {
                    alert('ошибка');
                }
            });
        }
        return false;
    });
});


