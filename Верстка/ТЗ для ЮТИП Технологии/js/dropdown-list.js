const handler = ({ target: a, currentTarget: b }) => {
    const icon = $(a).closest('.list__toggle-icon');
    const link = $(a).closest('.list__description a');
    if (icon[0]){
        icon.toggleClass('active');
        $(b).find('.list__description').toggle('active');
    }
    else if(link[0]){
        const text = $(b).find('.list__title');
        text.text(link.text());
        $(b).find('.list__toggle-icon').toggleClass('active');
        $(b).find('.list__description').toggle('active');
    }
}

$('.list').each(function (){
    $(this).on('click', handler);
});





























