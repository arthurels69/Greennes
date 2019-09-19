const addToCarts = document.getElementsByClassName("addToCart")

for (let i = 1; i < 5; i++) {
    addToCarts[i - 1].addEventListener('submit', (e) => {
        const quantityElt = document.getElementById("quantity" + i)
        const quantity = parseInt(quantityElt.value)
        totalQuantity += quantity
        quantityElt.value = "1"
        sessionStorage.setItem('cart', totalQuantity)
        document.getElementById("nbItems").textContent = totalQuantity
        nbItems.style.display = "block"
        $('#infos' + i).modal('toggle')
    })
}