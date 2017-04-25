function changeScreen() {
	animationExecute();
}


function resetState() {
	var blocks = document.getElementsByClassName("block");
	for(var i = 0; i < blocks.length; i++) {
		if (blocks[i].classList.contains("enable")) {
			blocks[i].classList.remove("enable");
		}
	}
}

function animationExecute() {
	var animation_flag = false;
	var columns = document.getElementsByClassName("column");
	var blocks = document.getElementsByClassName("block");
	var screen = document.getElementById("main_body");
	var num_columns = columns.length;
	var num_blocks = blocks.length;
	var blockCount = num_columns;
	var numDiags = blockCount * 2 - 1;
	var midpoint = Math.floor(numDiags/2);	//ceil()
	
	i = 0;
	f = function() {
		k = i;
		if(i <= midpoint) {
			for(j = 0; j <= i; j++) {
				columns[j].getElementsByClassName("block")[k].className += " enable";
				k--;
			}
		}
		if(i > midpoint) {
			k = midpoint;
			for(j = i - midpoint; j <= midpoint; j++) {
				columns[j].getElementsByClassName("block")[k].className += " enable";
				k--;
			}
			k--;
		}
		if(i < numDiags - 1) {
			setTimeout(f, 100);
		} 
		if(i == 35) {
			resetState();
		}
		i++;
	}; f();	
}
