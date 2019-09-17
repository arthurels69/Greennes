form = document.querySelector("form")

form.addEventListener("submit", (e) => {
    e.preventDefault()
    const firstname = document.getElementById("first-name").value
    pElt = document.createElement("p")
    pElt.classList.add("text-center")
    pElt.textContent = `${firstname}, merci de nous avoir contacter, nous reviendrons vers vous au plus vite.`
    form.innerHTML = ""
    form.appendChild(pElt)
})