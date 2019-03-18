document.querySelector('.additional-popup-yes').addEventListener('click', function () {
                    document.querySelector('.popup').style.display = 'block';
                });

document.querySelector('.additional-popup-no').addEventListener('click', function () {
                    document.querySelector('.popup').style.display = 'none';
                });
$('.radel-text-input input').change(function(){
    if ($(this).val() != '') {
            $(this).next().addClass('rdl-up');
            $(this).next().css('top','-45px');
        } else {
            $(this).next().removeClass('rdl-up');
            $(this).next().css('top','');
        }
});
    

