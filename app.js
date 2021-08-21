

function load() {
        window.location.href = "#here";
}

var cardContent = document.querySelectorAll('.content');
var secCard = document.querySelectorAll('.sec-2-card');


for (var i = 0; i < secCard.length; i++) {
    secCard[i].addEventListener("click", function () {
        for (var i = 0; i < cardContent.length; i++) {
            cardContent[i].className = 'content';
            document.getElementById(this.dataset.id).className = 'content active';
        }
        for (var i = 0; i < secCard.length; i++) {
            secCard[i].className = 'sec-2-card';
            this.className = 'sec-2-card active';
        }
    })
}





function show() {
    var sec2Head = document.getElementById('sec2-head');
    sec2Head.style.transition = 'all 2s';
    sec2Head.style.left = "0%";

    var sec3Col1 = document.getElementById('sec3Col1');
    sec3Col1.style.transform = 'scale(1)'
    sec3Col1.style.transitionDelay = '1s';
    sec3Col1.style.transition = 'all 2s';

    var sec3Head = document.getElementById('sec3-head3');
    sec3Head.style.transition = 'all 2s';
    sec3Head.style.transitionDelay = '1s';
    sec3Head.style.right = "0%";

    var sec4Head = document.getElementById('sec4Head');
    sec4Head.style.transition = 'all 2s';
    sec4Head.style.transitionDelay = '1.5s';
    sec4Head.style.left = "0%";

    var sec5 = document.getElementById('sec5-col1');
    sec5.style.transition = 'all 2s';
    sec5.style.transitionDelay = '2s';
    sec5.style.right = "0%";


    var sec5Card = document.getElementById('sec5-card');
    sec5Card.style.transition = 'all 2s';
    sec5Card.style.transitionDelay = '2s';
    sec5Card.style.bottom = '0%';

    var sec5Col3 = document.getElementById('sec5Head');
    sec5Col3.style.transition = 'all 2s';
    sec5Col3.style.transitionDelay = '2s';
    sec5Col3.style.right = "0%";
}

function nav_active(id) {
    var links = document.querySelectorAll('.nav-link');
    for (var i = 0; i < links.length; i++) {
        if (i == id) {
            links[i].style.color = 'orange'
        }

    }
}

function form_submit(id) {
    
    var array = $('#'+id).serializeArray();
    var ret = 0;
    // console.log(array)
    $.each(array,function(key,value){
        if(value['value'] == ""){
            $('#'+id+' input[name = '+value['name']+']').css('border' , '2px solid red' )
            ret++ ;
        }
        else{
            $('#'+id+' input[name = '+value['name']+']').css('border' , '1px solid #ced4da' )
        }

    });   
    if(ret != 0){
        return false;
    }
        var data = $('#'+id).serialize();
        $.ajax({
            url: 'form_sub.php',
            type: 'POST',
            data: data,
            success: function (req) {
                console.log(req)
            }
        })
  
}
// $('#form').on('submit',function (event) {
//     event.preventDefault();
//     var data = $(this).serialize();
//     $.ajax({
//         url: 'form_sub.php',
//         type: 'POST',
//         data: data,
//         success: function (req) {
//             console.log(req)
//         }
//     })
// })
