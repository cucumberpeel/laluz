let p1Obj = document.getElementById('product1');
let p2Obj = document.getElementById('product2');
p1Obj.addEventListener("change", total);
p2Obj.addEventListener("change", total);

let form = document.forms[0];
form.addEventListener("submit", validate);

function total() {
    var p1_items = document.getElementById('product1').value;
    var p1_price = document.getElementById('product1-price').value;
    var p1_total = p1_items * p1_price;
    document.getElementById('product1-total').value = p1_total;

    var p2_items = document.getElementById('product2').value;
    var p2_price = document.getElementById('product2-price').value;
    var p2_total = p2_items * p2_price;
    document.getElementById('product2-total').value = p2_total;

    var p3_items = document.getElementById('product3').value;
    var p3_price = document.getElementById('product3-price').value;
    var p3_total = p3_items * p3_price;
    document.getElementById('product3-total').value = p3_total;

    var p4_items = document.getElementById('product4').value;
    var p4_price = document.getElementById('product4-price').value;
    var p4_total = p4_items * p4_price;
    document.getElementById('product4-total').value = p4_total;

    var p5_items = document.getElementById('product5').value;
    var p5_price = document.getElementById('product5-price').value;
    var p5_total = p5_items * p5_price;
    document.getElementById('product5-total').value = p5_total;

    if (p1_total || p2_total || p3_total || p4_total || p5_total) {
        document.getElementById('total').value = p1_total + p2_total + p3_total + p4_total + p5_total;
    }
    else {
        document.getElementById('total').value = 0;
    }
}

function validate(e) {
    let len = form.elements.length;
    for (let i = 0; i < len - 2; i++) {
        // ensure no empty fields
        if (form.elements[i].value == "" || form.elements[i].value == null) {
            alert("Incomplete field. Please try again.");
            form.elements[i].focus();
            form.elements[i].select();
            form.elements[i].style.backgroundColor="red";
            e.preventDefault();
            return;
        }
        // validate zip code
        else if (i == 2 && form.elements[i].value.length != 5) {
            alert("5-digit zip code required. Please try again.");
            form.elements[i].focus();
            form.elements[i].select();
            form.elements[i].style.backgroundColor="red";
            e.preventDefault();
            return;
        }
        // validate phone number
        else if (i == 3 && form.elements[i].value.length != 10) {
            alert("10-digit phone number required. Please try again.");
            form.elements[i].focus();
            form.elements[i].select();
            form.elements[i].style.backgroundColor="red";
            e.preventDefault();
            return;
        }
        // validate email address
        else if (i == 4 && form.elements[i].value.indexOf("@") == -1) {
            alert("Invalid email address. Please try again.");
            form.elements[i].focus();
            form.elements[i].select();
            form.elements[i].style.backgroundColor="red";
            e.preventDefault();
            return;
        }
        else if (i == 4 && form.elements[i].value.indexOf(".") == -1) {
            alert("Invalid email address. Please try again.");
            form.elements[i].focus();
            form.elements[i].select();
            form.elements[i].style.backgroundColor="red";
            e.preventDefault();
            return;
        }
        else if (i == 7 && form.elements[i].value.length != 16) {
            alert("Invalid credit card number. Please try again.");
            form.elements[i].focus();
            form.elements[i].select();
            form.elements[i].style.backgroundColor="red";
            e.preventDefault();
            return;
        }
    }
}