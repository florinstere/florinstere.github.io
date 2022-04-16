var correctAnswer = "Guma";
let numeFieldValue;
let answerFieldValue;

function functiaMea() {
    numeFieldValue = document.getElementById('fname').value;
    answerFieldValue = document.getElementById('fname2').value;

    console.log(numeFieldValue);
    console.log(answerFieldValue);

    var correctBoolean;

    if (answerFieldValue.toUpperCase() == correctAnswer.toUpperCase()) {
        correctBoolean = true
    }
    else {
        correctBoolean = false;
    }

    var element = document.getElementById("new");
    var myP = document.createElement("p");
    myP.id = 'myP';
    var myEmoji = document.createElement("div");
    myEmoji.id = "myEmoji";
    if (correctBoolean == false) {
        myP.innerHTML = `Hello ${numeFieldValue}! <br> Your answer is: ${answerFieldValue}. It seems to be ${correctBoolean}. <br> Ai 5 lei la mine.`;
        myEmoji.innerHTML = "&#129298";
        myEmoji.style.paddingTop = "0px";
        myEmoji.style.fontSize = "50px";
        element.style.background = 'rgb(188, 35, 35)';
    }
    else {
        myP.innerHTML = `Hello ${numeFieldValue}! <br> Your answer is: ${answerFieldValue}. It seems to be ${correctBoolean}. <br> Please screenshot and ask Florin for a 5 lei! <br>`;
        myEmoji.innerHTML = "&#128525";
        myEmoji.style.paddingTop = "0px";
        myEmoji.style.fontSize = "50px";
        element.style.background = 'rgb(35, 188, 53)';
    }

    element.appendChild(myP);
    element.appendChild(myEmoji);
    element.style.display = "block";
}


function functieClose(){
    var element = document.getElementById("new");
    element.removeChild(myP);
    element.removeChild(myEmoji);
    element.style.display = "none"
}


