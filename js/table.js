function selectYear(year) {
    let Year = year.value;

    document.querySelector(".all-classes").style.display = "block";
    document.querySelector(".modify1").style.display = "none";
    document.querySelector(".modify2").style.display = "none";
    document.querySelector(".modify3").style.display = "none";
    document.querySelector(".modify4").style.display = "none";
    document.querySelector(".Update1").style.display = "none";
    document.querySelector(".Update2").style.display = "none";
    document.querySelector(".Update3").style.display = "none";
    document.querySelector(".Update4").style.display = "none";
    document.querySelector(".see-table2").style.display = "none";
    document.querySelector(".see-table1").style.display = "none";
    document.querySelector(".see-table3").style.display = "none";
    document.querySelector(".see-table4").style.display = "none";

    if (Year == "one") {
        document.querySelector(".see-table1").style.display = "block";
        document.querySelector(".Update1").style.display = "block";
        document.getElementById("Update_table1").addEventListener('click', Updateforchange1);

    } else if (Year == "two") {
        document.querySelector(".see-table2").style.display = "block";
        document.querySelector(".Update2").style.display = "block";
        document.getElementById("Update_table2").addEventListener('click', Updateforchange2);

    } else if (Year == "three") {
        document.querySelector(".see-table3").style.display = "block";
        document.querySelector(".Update3").style.display = "block";
        document.getElementById("Update_table3").addEventListener('click', Updateforchange3);

    } else if (Year == "four") {
        document.querySelector(".see-table4").style.display = "block";
        document.querySelector(".Update4").style.display = "block";
        document.getElementById("Update_table4").addEventListener('click', Updateforchange4);

    } else {
        document.querySelector(".see-table2").style.display = "none";
        document.querySelector(".see-table1").style.display = "none";
        document.querySelector(".see-table3").style.display = "none";
        document.querySelector(".see-table4").style.display = "none";


    }



}

function Updateforchange1() {
    document.querySelector(".modify1").style.display = "block";
    document.querySelector(".modify2").style.display = "none";
    document.querySelector(".modify3").style.display = "none";
    document.querySelector(".modify4").style.display = "none";
    document.querySelector(".Update1").style.display = "none";
    document.querySelector(".all-classes").style.display = "none";

}

function Updateforchange2() {
    document.querySelector(".modify2").style.display = "block";
    document.querySelector(".modify1").style.display = "none";
    document.querySelector(".modify3").style.display = "none";
    document.querySelector(".modify4").style.display = "none";
    document.querySelector(".Update2").style.display = "none";
    document.querySelector(".all-classes").style.display = "none";

}
function Updateforchange3() {
    document.querySelector(".modify3").style.display = "block";
    document.querySelector(".modify1").style.display = "none";
    document.querySelector(".modify2").style.display = "none";
    document.querySelector(".modify4").style.display = "none";
    document.querySelector(".Update3").style.display = "none";
    document.querySelector(".all-classes").style.display = "none";

}
function Updateforchange4() {
    document.querySelector(".modify4").style.display = "block";
    document.querySelector(".modify1").style.display = "none";
    document.querySelector(".modify3").style.display = "none";
    document.querySelector(".modify2").style.display = "none";
    document.querySelector(".Update4").style.display = "none";
    document.querySelector(".all-classes").style.display = "none";

}




