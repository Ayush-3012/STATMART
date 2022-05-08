
document.addEventListener('scroll',function(){
    let left_div = document.getElementById('left-div-id');
    let right_div = document.getElementById('right-div-id');

    if(window.pageYOffset >= 256)
    {
       left_div.classList.add('sticky'); 
       right_div.classList.add('sticky_right');
    }
    else
    {
        left_div.classList.remove('sticky');
        right_div.classList.remove('sticky_right');
    }
});
