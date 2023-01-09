function validate() {
    var userName = document.getElementById('userName').value;
    if(!userName.length > 0) {
        document.getElementById('errMsgUserName').innerHTML = 'Please Enter the User Name';
        document.getElementById('userName').focus();
        return;
    }
    else {
        document.getElementById('errMsgUserName').innerHTML = '';
    }

    var emailId = document.getElementById('emailId').value;
    if(!emailId.length > 0) {
        document.getElementById('errMsgEmailId').innerHTML = 'Please Enter Email Id';
        document.getElementById('emailId').focus();
        return;  

    }
    else {
        document.getElementById('errMsgEmailId').innerHTML = '';

    }  

    var contact = document.getElementById('contact').value;
    if(!contact.length > 0) {
        document.getElementById('errMsgContactNo').innerHTML = 'please enter contact No.';
        document.getElementById('contact').focus();
        return;
    }
    else {
        document.getElementById('errMsgContactNo').innerHTML = '';
    }

    var qty = document.getElementById('qty').value;
    if(qty <= 0 || qty > 10) {
        document.getElementById('errMsgQty').innerHTML = 'Quantity must be between 1-10';
        document.getElementById('qty').focus();
        return;
    }
    else {
        document.getElementById('errMsgQty').innerHTML = '';
    }
    
    var price = document.getElementById('price').value;
    if(price <= 0 || price > 10000) {
        document.getElementById('errMsgPrice').innerHTML = 'Price must be between 1-10000';
        document.getElementById('price').focus();
        return;
    }
    else {
        document.getElementById('errMsgPrice').innerHTML = '';
    }

    var brandName = document.getElementById('brandName').value;
    if(!brandName.length > 0) {
        document.getElementById('errMsgBrandName').innerHTML = 'Please Enter Brand Name';
        document.getElementById('brandName').focus();
        return;
    }
    else {
        document.getElementById('errMsgBrandName').innerHTML = '';
    }

    var clientName = document.getElementById('clientName').value;
    if(!clientName.length > 0) {
        document.getElementById('errMsgClientName').innerHTML = 'Please Enter Client Name';
        document.getElementById('clientName').focus();
        return;
    }
    else {
        document.getElementById('errMsgClientName').innerHTML = '';
    }
    document.getElementById('form').submit();
}


document.getElementById('save').addEventListener('click', validate);
