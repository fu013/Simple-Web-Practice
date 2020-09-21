var startBtn = document.getElementById("startBtn");
startBtn.addEventListener("click", print_quiz);
var answer = [];
var beginning, ending;

function print_quiz(){
	var quizZone = document.getElementById("quizZone");
	var quizText ="";
	for(var i =0; i<3; i++){
		var num1 = Math.floor(Math.random()*8)+2;
		var num2 = Math.floor(Math.random()*9)+1;
		answer[i] = num1*num2;
		quizText += "<h1>Quiz" + (i+1) + " : " + num1 + "X " +num2 + " = " + "<input type = 'number' id='ans"+i +"'></h1>";
	}
	quizText += "<button type='button' onclick='print_result()'>SUBMIT</button>";
	quizZone.innerHTML = quizText;

	beginning = new Date();
}

function print_result(){
	var count=0;
	for(var i=0; i<answer.length; i++){
		var answerValue = document.getElementById("ans"+i).value;
		if(answer[i] != answerValue){
			alert("The Quiz" + (i+1) + "answer is incorrecct!");
			return false;
		}
		else{
			count++;
		}
	}
	if(count==answer.length){
		ending = new Date();
		document.getElementById("resultZone").innerHTML = "<h1>Running Time : " + (ending-beginning)/1000+"Sec.</h1>";
	}
}