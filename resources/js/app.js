import "./bootstrap"
import "./pages/header"
import "./pages/register"
import "./pages/login"

console.log("main.js")

AOS.init({
  duration: 700,
  once: true,
  offset: 10, // offset (in px) from the original trigger point
  easing: "ease-in-out",
})
