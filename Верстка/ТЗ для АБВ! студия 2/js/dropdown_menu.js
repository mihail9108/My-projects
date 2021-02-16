const handler = ({ target: a, currentTarget: b }) => {
    const icon = $(a).closest('.icon');
    const link = $(a).closest('.dropdown-menu a');
    if (icon[0]){
        icon.toggleClass('active');
        $(b).find('.dropdown-menu').toggle('active');
    }
    else if(link[0]){
        const text = $(b).find('.description_dropdown');
        text.text(link.text());
        $(b).find('.icon').toggleClass('active');
        $(b).find('.dropdown-menu').toggle('active');
    }
}

$('.dropdown').each(function (){
    $(this).on('click', handler);
});




























