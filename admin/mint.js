function sub(event){

    event.preventDefault();

}



const input = document.getElementById('upload');
const pi = document.getElementById('pi');

input.addEventListener(`change`, function(event) {
    const file = this.files[0];

    if(file) {
        const reader = new FileReader();

        reader.addEventListener('load', function() {
          
          pi.setAttribute('src', this.result);

        });

        reader.readAsDataURL(file);
    }

});

  



