/* Function for calendar to show current date and navigate to next or previous months 
  Displays months and full year while also allowing the user to see the a few days before and after 
  which have a low opactiy in the same month
  JavaScript used from YouTube tutorial to create the calendar to navigate through it https://www.youtube.com/watch?v=o1yMqPyYeAo
*/
const date = new Date();

const renderCalendar = () => {
    date.setDate(1);

    const monthDays = document.querySelector(".days");

    const lastDay = new Date(
        date.getFullYear(),
        date.getMonth() + 1,
        0
    ).getDate();

    const prevLastDay = new Date(
        date.getFullYear(),
        date.getMonth(),
        0
    ).getDate();

    const firstDayIndex = date.getDay();

    const lastDayIndex = new Date(
        date.getFullYear(),
        date.getMonth() + 1,
        0
    ).getDay();

    const nextDays = 7 - lastDayIndex - 1;

    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];

    // document.querySelector(".date h1").innerHTML = months[date.getMonth()];

    // document.querySelector(".date p").innerHTML = new Date().toDateString();

    let days = "";

    for (let x = firstDayIndex; x > 0; x--) {
        days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
    }

    for (let i = 1; i <= lastDay; i++) {
        if (
            i === new Date().getDate() &&
            date.getMonth() === new Date().getMonth()
        ) {
            days += `<div class="today">${i}</div>`;
        } else {
            days += `<div>${i}</div>`;
        }
    }

    // for (let j = 1; j <= nextDays; j++) {
    //     days += `<div class="next-date">${j}</div>`;
    //     monthDays.innerHTML = days;
    // }
};

// document.querySelector(".prev").addEventListener("click", () => {
//     date.setMonth(date.getMonth() - 1);
//     renderCalendar();
// });

// document.querySelector(".next").addEventListener("click", () => {
//     date.setMonth(date.getMonth() + 1);
//     renderCalendar();
// });

renderCalendar();

/*
  Allows the user to select a date, choose a time and book an appointment 
  It also shwos which dates are available and which are not   
  This JavaScript was written by myself using prior knowledge and references to 
  previous projects
*/

$(function () {
    $("#datepicker").datepicker();
});

function myFunction() {
    var txt;
    var user = prompt("Enter the type of booking you want");
    if (user === null || user === "") {
        txt = "Please enter booking type";
    } else {
        txt = "Thank you for booking the " + user + " on " + date;
    }
    document.getElementById("bookDate").innerHTML = txt;

};

$('.button').on('click', function () {
    var dat = $('#datepicker').val();
    var tim = $('#time').val();
    console.log(tim);
    var txt1 = "You have booked on"
    $('#bookDate').text(txt1 + " " + dat + "  at " + tim);
})