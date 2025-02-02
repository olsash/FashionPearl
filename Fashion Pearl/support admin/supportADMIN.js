document.querySelectorAll(".accordion").forEach(button => {
    button.addEventListener("click", function() {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
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

document.getElementById("questionForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    let answerContainer = document.getElementById("answer-container");
    let answerElement = document.getElementById("answer");

    let answerText = "This is a sample answer!";

    if (answerText.trim() !== "") {
        answerElement.textContent = answerText;
        answerContainer.style.display = "flex"; 
    }
});