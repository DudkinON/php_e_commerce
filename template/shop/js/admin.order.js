/**
 * Created by 3002 on 3/3/2017.
 */
var outputData;
var orderBox = document.getElementById('orders-block');
var art = document.getElementById('art');
var amountItems = document.getElementById('amount');
var addItem = document.getElementById('add');
var hideBox = document.getElementById('hide');

addItem.onclick = function () {
    console.log(art.innerHTML);
    
    /*
    var cb = callback || function(data){};
    var item, path, parameters;
    path = '/admin/order/data';
    parameters = 'name=order&art=' + art + '&amount=' + amountItems;

    ajaxPost(path, parameters, function (data) {
        outputData = data;
        //outputData = JSON.parse(data);
        //item = [index];
        cb(outputData);
        orderBox.innerHTML = outputData;
        hideBox.style.display = "block";return false;
    });
    */
};
function ajaxPost(path, parameters, callback){
    var cb = callback || function(data){};
    var r = new XMLHttpRequest();
    r.onreadystatechange = function(){
        if(r.readyState == 4 && r.status == 200){
            cb(r.responseText);
        }
    };
    r.open('POST', path);
    r.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    r.send(parameters);
}

