const addToCarts = document.getElementsByClassName("addToCart")

for (let i = 1; i < 5; i++) {
    addToCarts[i - 1].addEventListener('submit', (e) => {
        const quantityElt = document.getElementById("quantity" + i)
        if (quantityElt.value === "") {
            quantityElt.value = 0;
        }
        const quantity = parseInt(quantityElt.value)
        totalQuantity += quantity
        quantityElt.value = "1"
        sessionStorage.setItem('cart', totalQuantity)
        document.getElementById("nbItems").textContent = totalQuantity
        if (totalQuantity > 0) {
            nbItems.style.display = "block"
        } else {
            nbItems.style.display = "none"
        }
        $('#infos' + i).modal('toggle')
    })
}