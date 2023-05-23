window.addEventListener("scroll", function () {
  const header = document.querySelector("header")
  const headerLogo = document.querySelector("header > h1")
  const overlayLogo = document.querySelector(".overlayLogo")

  if (window.scrollY > 0 && header) {
    header.classList.add("headerScrolled")
    overlayLogo.style.opacity = "0"
    overlayLogo.style.visibility = "hidden"
    headerLogo.style.opacity = "1"
    headerLogo.style.visibility = "visible"
  } else {
    header.classList.remove("headerScrolled")
    overlayLogo.style.opacity = "1"
    overlayLogo.style.visibility = "visible"
    headerLogo.style.opacity = "0"
    headerLogo.style.visibility = "hidden"
  }
})

const btnMenu = document.querySelector("header .mobilNav  .btnMenu")
const header = document.querySelector("header")
const overlayMenu = document.querySelector("header .mobilNav .navbtnMenu")
const htMl = document.querySelector("htMl")
const headerImageOverlay = document.querySelector(".headerImageOverlay")
const headerLogo = document.querySelector("header > h1")
btnMenu &&
  btnMenu.addEventListener("click", (e) => {
    if (e.currentTarget.classList.contains("opened")) {
      headerLogo.style.visibility = "hidden"
      header.classList.add("menuOpacity")
      overlayMenu.classList.add("overlayMenuOpen")
      htMl.style.overflow = "hidden"
      headerImageOverlay.classList.remove("bg-black")
      headerImageOverlay.classList.remove("opacity-50")
    } else {
      headerLogo.style.visibility = "visible"
      header.classList.remove("menuOpacity")
      headerImageOverlay.classList.add("bg-black")
      headerImageOverlay.classList.add("opacity-50")
      header.classList.remove("headerScrolled")
      overlayMenu.classList.remove("overlayMenuOpen")
      htMl.style.overflow = "auto"
    }
  })
