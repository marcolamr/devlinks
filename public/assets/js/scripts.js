function toggleMode() {
    const html = document.documentElement;
    html.classList.toggle("light");

    if (html.classList.contains("light")) {
        localStorage.setItem("devlinks-mode", "light");
    } else {
        localStorage.setItem("devlinks-mode", "dark");
    }
}
