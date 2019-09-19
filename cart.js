addToCarts = document.getElementsByClassName("addToCart")
for (addToCart of addToCarts) {
    addToCart.addEventListener('submit', (e) => {
        quantity = addToCart.elements.namedItem("quantity").value
        console.log(quantity)
    })
}