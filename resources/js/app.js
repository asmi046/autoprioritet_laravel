import './bootstrap';
import IMask from 'imask';

const elements = document.querySelectorAll('input[type="tel"]');
console.log(elements)
const maskOptions = {
  mask: '+{7}(000)000-00-00'
};


elements.forEach((element) => {
    IMask(element, maskOptions);
})


