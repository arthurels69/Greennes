const addToCarts = document.getElementsByClassName("addToCart")

for (let i = 1; i < 5; i++) {
    addToCarts[i - 1].addEventListener('submit', (e) => {
        const quantity = parseInt(document.getElementById("quantity" + i).value)
        totalQuantity += quantity
        sessionStorage.setItem('cart', totalQuantity)
        document.getElementById("nbItems").textContent = totalQuantity
        nbItems.style.display = "block"
        $('#infos' + i).modal('toggle')
    })
}