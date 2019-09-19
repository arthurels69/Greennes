if (!(sessionStorage.getItem('age'))) {
    ageCheck = document.getElementById("ageCheck")
    ageCheck.style.display = "block"
    document.body.style.overflow = "hidden"
    ageCheckContent = document.getElementById("ageCheckContent")
    form = document.getElementById("ageCheckForm")
    birthDate = document.getElementById("birthDate")
    confirmBtn = document.getElementById("confirmBtn")
    cancelButton = document.getElementById("cancel")
    const currentDate = new Date()
    currentYear = currentDate.getFullYear()
    form.addEventListener('submit', (e) => {
        if (birthDate.value === "" || birthDate.value.length > 10) {
            e.preventDefault()
        }
        else if (currentYear - birthDate.value.substring(0, 4) < 18) {
            e.preventDefault()
            pElt = document.createElement('p')
            pElt.classList.add("text-center")
            if (birthDate.value.substring(0, 4) > currentYear) {
                pElt.textContent = "Vous n'êtes pas né et n'avez pas accès à ce site"
            } else {
                pElt.textContent = "Vous êtes mineur et n'avez pas accès à ce site"
            }
            ageCheckContent.innerHTML = ""
            ageCheckContent.appendChild(pElt)
            setTimeout(() => window.history.back(), 3000)
        } else {
            sessionStorage.setItem('age', 'majeur')
            ageCheck.style.display = "none"
            document.body.style.overflow = "visible"
        }
    })
}  