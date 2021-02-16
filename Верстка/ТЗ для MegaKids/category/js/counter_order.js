    $(document).ready(function() {
        $('.minus').click(function () {
            let $counter_buttons = $(this).parent().find('.counter_buttons');
            let $input = $(".counter_buttons").parent().find('.text_counter');
            let count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').click(function () {
            let $counter_buttons = $(this).parent().find('.counter_buttons');
            let $input = $(".counter_buttons").parent().find('.text_counter');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    });


