function updatePrice() {
    var roomtype = document.getElementById("roomtype").value;
    var priceField = document.getElementById("price");

    switch (roomtype) {
        case "standard":
            priceField.value = 500000;
            break;
        case "deluxe":
            priceField.value = 1000000;
            break;
        case "suite":
            priceField.value = 1500000;
            break;
        default:
            priceField.value = "";
    }
}

document.getElementById("roomtype").addEventListener("change", updatePrice);

updatePrice();

var reservations = [];

function displayReservations() {
    var table = document.getElementById("reservationData");
    table.innerHTML = "";

    reservations.forEach(function (reservation) {
        var row = table.insertRow();
        var nameCell = row.insertCell(0);
        var nikCell = row.insertCell(1);
        var birthdateCell = row.insertCell(2);
        var roomtypeCell = row.insertCell(3);
        var priceCell = row.insertCell(4);
        var guestsCell = row.insertCell(5);

        nameCell.textContent = reservation.name;
        nikCell.textContent = reservation.nik;
        birthdateCell.textContent = reservation.birthdate;
        roomtypeCell.textContent = reservation.roomtype;
        priceCell.textContent = reservation.price;
        guestsCell.textContent = reservation.guests;
    });
}

function submitReservation(event) {
    event.preventDefault();

    var name = document.getElementById("name").value;
    var nik = document.getElementById("nik").value;
    var birthdate = document.getElementById("birthdate").value;
    var roomtype = document.getElementById("roomtype").value;
    var price = document.getElementById("price").value;
    var guests = document.getElementById("guests").value;

    var reservation = {
        name: name,
        nik: nik,
        birthdate: birthdate,
        roomtype: roomtype,
        price: price,
        guests: guests
    };

    alert("Pembelian Berhasil Dilakukan");
    reservations.push(reservation);

    displayReservations();
}

document.getElementById("reservationForm").addEventListener("submit", submitReservation);
