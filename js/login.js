const wrapper = document.querySelector(".wrapper");
const loginlink = document.querySelector(".login-link");
const registerlink = document.querySelector(".register-link");
const btpopup = document.querySelector(".login-popup");
const iconclose = document.querySelector(".icon-close");
const forgotlink = document.querySelector(".forgot-link");
const fg = document.querySelector(".login-linkfg");

registerlink.addEventListener("click", () => {
  wrapper.classList.add("active");
});

forgotlink.addEventListener("click", () => {
  wrapper.classList.add("active-fg");
});

loginlink.addEventListener("click", () => {
  wrapper.classList.remove("active");
});

fg.addEventListener("click", () => {
  wrapper.classList.remove("active-fg");
});

btpopup.addEventListener("click", () => {
  wrapper.classList.add("active-popup");
});

iconclose.addEventListener("click", () => {
  wrapper.classList.remove("active-popup");
});
