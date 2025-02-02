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

document.getElementById('viewMessagesBtn').addEventListener('click', function() {
    let messagesContainer = document.getElementById('messagesContainer');
    let messagesTable = document.getElementById('messagesTable');
    messagesContainer.innerHTML = '';  

    messagesTable.style.display = 'table';

    let tbody = messagesTable.getElementsByTagName('tbody')[0];
    tbody.innerHTML = '';  

    if (messages.length > 0) {
        messages.forEach(function(message) {
            let row = tbody.insertRow();

            let cell1 = row.insertCell(0);
            cell1.innerHTML = message.name;

            let cell2 = row.insertCell(1);
            cell2.innerHTML = message.email;

            let cell3 = row.insertCell(2);
            cell3.innerHTML = message.message;

            let cell4 = row.insertCell(3);
            cell4.innerHTML = message.created_at;
        });
    } else {
        messagesContainer.innerHTML = '<p>No messages found.</p>';
    }
});
