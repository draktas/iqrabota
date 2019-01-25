var sumr = document.getElementById('sumr');
	var sum1 = document.getElementById('sum1');
	var sump = document.getElementById('sump');
	var sum2 = document.getElementById('sum2');
	window.CheckRange = function() {
	sum1.value = sumr.value;
	sum2.value = sump.value;
	}
	window.onInput = function() {
	sumr.value = sum1.value;
	sump.value = sum2.value;
	}