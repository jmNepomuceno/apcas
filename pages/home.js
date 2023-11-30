const screen_more_btns = document.querySelectorAll('.screen-more-btn')
document.querySelector('.screen-1-info').style.display = 'none'
document.querySelector('.screen-2-info').style.display = 'none'
document.querySelector('.screen-3-info').style.display = 'none'

for(let i = 0; i < screen_more_btns.length; i++) {
    screen_more_btns[i].addEventListener('click', function(event){
        document.querySelector('.default-info').style.display = "none"
        if(i === 0){
            document.querySelector('.screen-1-info').style.display = 'flex'
            document.querySelector('.screen-2-info').style.display = 'none'
            document.querySelector('.screen-3-info').style.display = 'none'
        }
        if(i === 1){
            document.querySelector('.screen-1-info').style.display = 'none'
            document.querySelector('.screen-2-info').style.display = 'flex'
            document.querySelector('.screen-3-info').style.display = 'none'
        }
        if(i === 2){
            document.querySelector('.screen-1-info').style.display = 'none'
            document.querySelector('.screen-2-info').style.display = 'none'
            document.querySelector('.screen-3-info').style.display = 'flex'
        }
    })
}


function showSelectedShow() {
    // Get the selected radio button value
    let selectedShowtime = document.querySelector('input[name="show"]:checked');
    if (selectedShowtime) {
        alert('Selected Show: ' + selectedShowtime.value);
        // You can perform further actions based on the selected show
    } else {
        alert('Please select a show.');
    }
}

document.getElementById('screen-time-btn-1').addEventListener('click', showSelectedShow)

