/**
 * Created by stefanomuschera on 16/06/2017.
 */

// Let there be cookies
document.getElementById('suchclose').addEventListener('click', function(e) {
    e.preventDefault();
    this.parentNode.style.display = 'none';
}, false);

// Let's show some nice text
setTimeout(function(){
    document.getElementById('muchblep').classList.remove('hide');
}, 1700);

setTimeout(function(){
    document.getElementById('veryfur').classList.remove('hide');
}, 2500);

setTimeout(function(){
    document.getElementById('sopattern').classList.remove('hide');
}, 3400);

setTimeout(function(){
    document.getElementById('verydeveloper').classList.remove('hide');
}, 4000);