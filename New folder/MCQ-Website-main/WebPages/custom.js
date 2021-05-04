var table_name;
var header_str;
var number=0;
function pass_data(id_value) {
    table_name = id_value;
    header_str = document.getElementById(id_value).innerHTML;
    localStorage.setItem("table", table_name);
    localStorage.setItem("header", header_str);
    localStorage.setItem("marks",number);
    window.location = "abc.php";
}