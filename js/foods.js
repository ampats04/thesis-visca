function EnableDisable(x,y) {
    //Reference the Button.
    var btnSubmit = document.getElementById(x);
    var quantity = document.getElementById(y);
    //Verify the TextBox value.
    if (quantity.value.trim() != "") {
        //Enable the TextBox when TextBox has value.
        btnSubmit.disabled = false;
    } else {
        //Disable the TextBox when TextBox is empty.
        btnSubmit.disabled = true;
    }
};

function SuccessOrder () {
    toastr.success('Order Added!');          
};
        

function AddToOrderClicked (x,y,z) {
    var title = document.getElementById(x).innerText;
    var price = document.getElementById(y).innerText;
    var imageSrc = document.getElementById(z).src;
    sessionStorage.setItem('name', JSON.stringify(title));
    sessionStorage.setItem('price', JSON.stringify(price));
    sessionStorage.setItem('image', JSON.stringify(imageSrc))
}
  


   

    
