var SelectedSeats = document.querySelectorAll('.chk');
    var ShowSelectedSeats = document.querySelector('.ShowSelectedSeats');
    var SeatsArray = new Array();
    var SeatsNumber = document.querySelector('.num')
    var MoviePrice = document.querySelector('.movie-price')
    var TotalPrice = document.querySelector('.total')

    for (var i = 0; i < SelectedSeats.length; i++) {
        SelectedSeats[i].addEventListener('change', function() {
            if (this.checked)
                SeatsArray.push(this.value);

            else {
                SeatsArray.pop(this.value)
            }
            // print selected seats
            ShowSelectedSeats.textContent = SeatsArray;
            ShowSelectedSeats.value = SeatsArray;
            // print number of selected seats
            SeatsNumber.textContent = SeatsArray.length;
            SeatsNumber.value = SeatsArray.length;
            // calculate total price of tickets
            TotalPrice.textContent = parseInt(MoviePrice.textContent) * parseInt(SeatsNumber.textContent);
            TotalPrice.value = parseInt(MoviePrice.textContent) * parseInt(SeatsNumber.textContent);


        });

    }