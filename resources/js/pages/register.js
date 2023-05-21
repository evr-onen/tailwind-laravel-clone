const registerSubmit = document.querySelector(".registerSubmit")
const registerEmail = document.querySelector('[name="email"]')
const registerPass = document.querySelector('[name="password"]')
const registerPassConf = document.querySelector('[name="confirm-password"]')
console.log("register")
console.log(registerSubmit)
registerSubmit &&
  registerSubmit.addEventListener("click", async () => {
    const data = {
      email: registerEmail.value,
      password: registerPass.value,
      password_confirmation: registerPassConf.value,
    }
    const url = "http://127.0.0.1:8000/api/auth/register"
    const options = {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    }
    await fetch(url, options)
      .then((response) => response.json())
      .then((result) => {
        window.location.href = "http://127.0.0.1:8000/dashboard/"
      })
      .catch((error) => {
        console.log("Hata:", error)
      })
  })
