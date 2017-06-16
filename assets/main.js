/**
 * Created by stefanomuschera on 16/06/2017.
 */

document.getElementById('suchclose').addEventListener('click', function(e) {
    e.preventDefault();
    this.parentNode.style.display = 'none';
}, false);