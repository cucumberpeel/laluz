let p1Obj = document.getElementById('product1');
let p2Obj = document.getElementById('product2');
p1Obj.addEventListener("change", total);
p2Obj.addEventListener("change", total);

// prevent default
// shipping not adding to total
// reset
let form = document.forms[0];
form.addEventListener("submit", validate);
// form.addEventListener("submit", validate(e) {
//     e.preventDefault()
// });

function total() {
    var p1_items = document.getElementById('product1').value;
    var p1_price = document.getElementById('product1-price').value;
    var p1_total = p1_items * p1_price;
    document.getElementById('product1-total').value = p1_total;

    var p2_items = document.getElementById('product2').value;
    var p2_price = document.getElementById('product2-price').value;
    var p2_total = p2_items * p2_price;
    document.getElementById('product2-total').value = p2_total;

    if (p1_total > 0 || p2_total > 0) {
        document.getElementById('total').value = p1_total + p2_total;
    }
    else {
        document.getElementById('total').value = 0;
    }
}

function validate(e) {
    let len = form.elements.length;
    // let text = "<h1>Thank you for your purchase! </h1>";
    // let total = "?";
    // let radio_flag = false;
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
        // else if (i == 5 && form.elements[i].checked == true) {
        //     text += form.elements[i].name;
        //     text += ": ";
        //     text += form.elements[i].value;
        //     text += "<p>";
        //     radio_flag = true;
        // }
        // else if (i == 5 && form.elements[i].checked == false) {
        //     continue;
        // }
        // else if (i == 6 && radio_flag) {
        //     continue;
        // }
        // else if (i == 6 && form.elements[i].checked == true) {
        //     text += form.elements[i].name;
        //     text += ": ";
        //     text += form.elements[i].value;
        //     text += "<p>";
        // }
        else if (i == 7 && form.elements[i].value.length != 16) {
            alert("Invalid credit card number. Please try again.");
            form.elements[i].focus();
            form.elements[i].select();
            form.elements[i].style.backgroundColor="red";
            e.preventDefault();
            return;
        }
        // else if (i == 7) {
        //     text += form.elements[i].name;
        //     text += ": ";
        //     text += "XXXX XXXX XXXX " + form.elements[i].value.slice(12, 16);
        //     text += "<p>";
        // }
        // else {
        //     text += form.elements[i].name;
        //     text += ": ";
        //     text += form.elements[i].value;
        //     text += "<p>";
        // }
    }
    // show receipt
    // document.open();
    // document.write(text);
    // document.write("<h2>Total: " + total + "</h2>");
}