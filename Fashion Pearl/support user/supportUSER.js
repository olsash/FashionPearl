document.querySelectorAll(".accordion").forEach(button => {
    button.addEventListener("click", function() {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;
        panel.style.display = (panel.style.display === "block") ? "none" : "block";
    });
});

document.getElementById("questionForm").addEventListener("submit", function(event) {
    event.preventDefault();
    let question = document.getElementById("question").value;

    fetch("get_answers.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "question=" + encodeURIComponent(question)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("answer").innerHTML = data;
    });
});