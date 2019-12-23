var bit1 = false;
var bit2 = false;
var bit3 = false;
var bit4 = false;

function buttonLed1(){
	
	if(document.getElementById("led1").className == "led1Dark" ){
		
		document.getElementById("led1").className = "led1Bright";
		bit4 = true;
		
	}else{
		
		document.getElementById("led1").className = "led1Dark";
		bit4 = false;
		
	}
	
	logicalPorts();
	
}

function buttonLed2(){
	
	if(document.getElementById("led2").className == "led2Dark" ){
		
		document.getElementById("led2").className = "led2Bright";
		bit3 = true;
		
	}else{
		
		document.getElementById("led2").className = "led2Dark";
		bit3 = false;
		
	}
	
	logicalPorts();
	
}

function buttonLed3(){
	
	if(document.getElementById("led3").className == "led3Dark" ){
		
		document.getElementById("led3").className = "led3Bright";
		bit2 = true;
		
	}else{
		
		document.getElementById("led3").className = "led3Dark";
		bit2 = false;
		
	}
	
	logicalPorts();
	
}

function buttonLed4(){
	
	if(document.getElementById("led4").className == "led4Dark" ){
		
		document.getElementById("led4").className = "led4Bright";
		bit1 = true;
		
	}else{
		
		document.getElementById("led4").className = "led4Dark";
		bit1 = false;
		
	}
	
	logicalPorts();
	
}



function logicalPorts(){
	
	
	bitNot1 = !bit1;bitNot2 = !bit2;bitNot3 = !bit3;bitNot4 = !bit4;
	
	//----------------------------------------------------------------
	
	L11 = false;L12 = false;L13 = false;L14 = false;
	L15 = false;L16 = false;L17 = false;L18 = false;
	L19 = false;L110 = false;L111 = false;L112 = false;
	L113 = false;
	
	//----------------------------------------------------------------
	
	L21 = false;L22 = false;L23 = false;L24 = false;
	L25 = false;L26 = false;L27 = false;L28 = false;
	L29 = false;L210 = false;L211 = false;L212 = false;
	L213 = false;L214 = false;L215 = false;L216 = false;
	L217 = false;L218 = false;L219 = false;L220 = false;
	L221 = false;
	
	//----------------------------------------------------------------
	
	L31 = false;L32 = false;L33 = false;L34 = false;
	L35 = false;L36 = false;L37 = false;L38 = false;
	L39 = false;L310 = false;
	

	//----------------------------------------------------------------
	
	//L11
	if(bitNot3 && bitNot4){
		L11 = true;
	}	
	//L12
	if(bitNot2 && bit1){
		L12 = true;
	}	
	//L13
	if(bitNot4 && bit3){
		L13 = true;
	}	
	//L14
	if(bitNot1 && bitNot2){
		L14 = true;
	}	
	//L15
	if(bitNot3 && bit4){
		L15 = true;
	}	
	//L16
	if(bit1 && bit2){
		L16 = true;
	}	
	//L17
	if(bit3 && bit4){
		L17 = true;
	}	
	//L18
	if(bit2 && bit3){
		L18 = true;
	}	
	//L19
	if(bit2 && bit4){
		L19 = true;
	}	
	//L110
	if(bitNot1 && bit2){
		L110 = true;
	}	
	//L111
	if(bit2 && bitNot4){
		L111 = true;
	}	
	//L112
	if(bit1 && bitNot4){
		L112 = true;
	}	
	//L113
	if(bitNot2 && bitNot3){
		L113 = true;
	}
	
	//----------------------------------------------------------------
	
	
	
	//L21
	if(L11 && L12){
		L21 = true;
	}
	//L23
	if(L13 && L14){
		L23 = true;
	}
	//L24
	if(L15 && L16){
		L24 = true;
	}
	//L25
	if(L17 && L12){
		L25 = true;
	}
	//L26
	if(L13 && L12){
		L26 = true;
	}
	//L27
	if(L18 && bitNot1){
		L27 = true;
	}
	//L28
	if(L19 && bit1){
		L28 = true;
	}
	//L29
	if(L17 && bitNot1){
		L29 = true;
	}
	//L210
	if(L110 && L11){
		L210 = true;
	}
	//L211
	if(L17 && bit2){
		L211 = true;
	}
	//L212
	if(L18 && bit1){
		L212 = true;
	}
	//L213
	if(L110 && L15){
		L213 = true;
	}
	//L214
	if(L113 && bit1){
		L214 = true;
	}
	//L215
	if(L13 && bitNot2){
		L215 = true;
	}
	//L216
	if(L11 && bit1){
		L216 = true;
	}
	//L217
	if(L11 && bit2){
		L217 = true;
	}
	//L218
	if(L111 && bit1){
		L218 = true;
	}
	//L219
	if(L11 && bitNot2){
		L219 = true;
	}
	//L220
	if(L13 && L16){
		L220 = true;
	}
	//L221
	if(L17 && L14){
		L221 = true;
	}
	
	
	
	
	//----------------------------------------------------------------
	
	//L310
	if(L21 || L23){
		L310 = true;
	}
	//L31
	if(L24 || L25){
		L31 = true;
	}
	//L32
	if(L26 || L27){
		L32 = true;
	}
	//L33
	if(L28 || L29){
		L33 = true;
	}
	//L34
	if(L210 || L29){
		L34 = true;
	}
	//L35
	if(L212 || L213){
		L35 = true;
	}
	//L36
	if(L112 || L214){
		L36 = true;
	}
	//L37
	if(L216 || L217){
		L37 = true;
	}
	//L38
	if(L218 || L25){
		L38 = true;
	}
	//L39
	if(L219 || L220){
		L39 = true;
	}
	
	
	
	//----------------------------------------------------------------
	
	
	
	//segmentA
	if(L310 || L31){
		
		document.getElementById("segmentA").className = "segmentADark";
				
	}else{
		
		document.getElementById("segmentA").className = "segmentABright";		
		
	}
	//segmentB
	if(L32 || L33){
		
		document.getElementById("segmentB").className = "segmentBDark";
				
	}else{
		document.getElementById("segmentB").className = "segmentBBright";
		
		
	}
	//segmentC
	if(L34 || L211){
		
		document.getElementById("segmentC").className = "segmentCDark";
				
	}else{
		document.getElementById("segmentC").className = "segmentCBright";
		
		
	}	
	//segmentD
	if(L310 || L35){
		
		document.getElementById("segmentD").className = "segmentDDark";
				
	}else{
		document.getElementById("segmentD").className = "segmentDBright";
		
		
	}	
	//segmentE
	if(L36 || L215){
		
		document.getElementById("segmentE").className = "segmentEDark";
				
	}else{
		document.getElementById("segmentE").className = "segmentEBright";
		
		
	}
	//segmentF
	if(L37 || L38){
		
		document.getElementById("segmentF").className = "segmentFDark";
				
	}else{
		document.getElementById("segmentF").className = "segmentFBright";
		
		
	}
	//segmentG
	if(L39 || L221){
		
		document.getElementById("segmentG").className = "segmentGDark";
				
	}else{
		document.getElementById("segmentG").className = "segmentGBright";
		
		
	}
	
	
	
	
}


































