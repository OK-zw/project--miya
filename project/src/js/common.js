var link = document.getElementsByTagName('a');

// console.log(link)

for(var i = 0 ; i<link.length ; i++){

    link[i].onmouseover = function(){


        console.log(333)
    //     link[i].style.color = 'pink';
    }
}