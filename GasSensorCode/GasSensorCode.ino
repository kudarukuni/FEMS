void setup(){
  Serial.begin(115200);
}

void loop(){
  int ga = analogRead(A0);
  if(ga > 10){
    Serial.println(ga);
  }
  delay(5000);
}
