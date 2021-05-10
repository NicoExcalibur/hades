// function toggle(el){
//     var value = el.options[el.selectedIndex].value,
//         div = document.querySelector('.passives');
//     console.log(div)
//     if (value) {
//         div.style.display = 'block'
//     } else {
        
//         div.style.display = 'none'
//     }
// }
let div = document.querySelector('.passives');

function selectInfo(element){
    let msg = element.value
    div.textContent = msg ;
    console.log(passive);
   }