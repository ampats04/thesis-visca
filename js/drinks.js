function EnableDisable(x,y,z,a,b) {
        var btnSubmit = document.getElementById(x);
        var large = document.getElementById(y);
        var medium = document.getElementById(z);
        var small = document.getElementById(a);
        var quantity = document.getElementById(b);
        if (large.checked || medium.checked || small.checked || quantity.value.trim() != ""){
            btnSubmit.disabled = false;
        } else {
            btnSubmit.disabled=true;
        }
    }

