#include<SoftwareSerial.h>
SoftwareSerial mySerial(D1, D2); 

void setup(){
  Serial.begin(115200);
  mySerial.begin(115200);
}

void loop(){
  String msg = mySerial.readStringUntil('\r');
  Serial.println(msg);
  int ga = analogRead(A0);
  if(ga > 1000){
    Serial.println("GAS LEVEL HIGH");
  }
  delay(30000);
}
