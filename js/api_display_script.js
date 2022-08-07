// AJAX Code for price reduction

let btn = document.getElementById("price_reduction");
btn.addEventListener("click", priceReduction, false);

function priceReduction() {
  const ajReq = new XMLHttpRequest();
  let content = document.getElementById("contentpro");
  ajReq.open("GET", "displayAll.php", true);
  ajReq.onload = function () {
    if (this.status == 200) {
      const properties = JSON.parse(ajReq.responseText);
      console.log(properties);
      content.innerHTML = "";
      // let obj = properties.data.valueOf((o) => o.price_reduction === "Yes");
      // console.log(obj);
      for (const property of properties.data) {
        if (property.price_reduction === "No") {
          // console.log(property.price_reduction);
          continue;
        }
        content.innerHTML += `
        <div class='col-xl-3 col-lg-4 col-md-6 mb-4'>
            <div class='bg-wight rounded shadow-lg p-3 bgcard' style='mh-100'>
                <img src='./pictures/${property.picture}' class='card-img-top' alt='...'>
                <div class='bgtitle'>
                    <h5 class='card-title text-light text-center p-2 mb-2'>${property.name}</h5>
                </div>
                <div class='card-body'>
                    <p class='card-text m-0'><strong>Size: </strong> ${property.size}</p>
                    <p class='card-text m-0'><strong>Number of Rooms: </strong>${property.room_number}</p>
                    <p class='card-text m-0'><strong>City: </strong> ${property.city}</p>
                    <p class='card-text m-0'><strong>Price: </strong>${property.price}</p>
                    <p class='card-text m-0'><strong>Price Reduction: </strong>${property.price_reduction}</p>
                </div>
            </div>
        </div>
                `;
      }
    }
  };
  ajReq.send();
}
