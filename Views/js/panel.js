

function createTrip(){
    // go to journey page
    var a = document.createElement("a");
    a.href = "/Tourism/trip/create";
    a.click();
    document.removeChild(a);
}