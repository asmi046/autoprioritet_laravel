import './bootstrap';
import IMask from 'imask';
import './mobile_catalog_menu'

const elements = document.querySelectorAll('input[type="tel"]');
console.log(elements)
const maskOptions = {
  mask: '+{7}(000)000-00-00'
};


elements.forEach((element) => {
    IMask(element, maskOptions);
})

document.addEventListener('DOMContentLoaded', function(){
    let clicedRow = document.querySelectorAll(".cliced_row");
    for (let elem of clicedRow) {
        elem.addEventListener('click', function (e) {
            elem.querySelector(".content a").click();
        })
    }
})
