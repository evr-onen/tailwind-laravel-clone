const loginSubmit = document.querySelector(".loginSubmit")
const loginEmail = document.querySelector('[name="email"]')
const loginPass = document.querySelector('[name="password"]')

console.log("login")

loginSubmit &&
  loginSubmit.addEventListener("click", async (e) => {
    e.preventDefault()
    const data = {
      email: loginEmail.value,
      password: loginPass.value,
    }
    const url = "http://127.0.0.1:8000/api/auth/login"
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
        /* window.location.href = "http://127.0.0.1:8000/dashboard/" */
      })
      .catch((error) => {
        console.log(error)
      })
  })
