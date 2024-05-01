const btnDarkModeToggle = document.getElementById("btn-dark-mode-toggle")
const themeSystem = localStorage.getItem("themeSystem") || "light"

btnDarkModeToggle.addEventListener('click', () => {
    let oldTheme = localStorage.getItem("themeSystem") || "light"
    let newTheme = oldTheme == "light" ? "dark" : "light"

    localStorage.setItem("themeSystem", newTheme)
    defineCurrentTheme(newTheme)
})

function defineCurrentTheme(theme){
    const darkIcon = '<i class="fa-solid fa-moon"></i>'
    const lightIcon = '<i class="fa-regular fa-sun"></i>'
    document.documentElement.setAttribute("data-theme", theme)

    if(theme == "light")
    {
        btnDarkModeToggle.innerHTML = darkIcon;
    }
    else
    {
        btnDarkModeToggle.innerHTML = lightIcon
    }
}

defineCurrentTheme(themeSystem)


