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
    document.getElementById('veryfur').classList.remove('hide');
}, 2000);

setTimeout(function(){
    document.getElementById('muchblep').classList.remove('hide');
}, 2000);