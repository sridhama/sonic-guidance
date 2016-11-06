#include <NewPing.h>
#define TRIGGER_PIN  A3   // Arduino pin tied to trigger pin on the ultrasonic sensor.
#define ECHO_PIN     A4   // Arduino pin tied to echo pin on the ultrasonic sensor.
#define MAX_DISTANCE 300  // Maximum distance we want to ping for (in centimeters).
#define TRIGGER_PIN2  6   // Arduino pin tied to trigger pin on the ultrasonic sensor.
#define ECHO_PIN2     7   // Arduino pin tied to echo pin on the ultrasonic sensor.
#define MAX_DISTANCE2 300 // Maximum distance we want to ping for (in centimeters).
#define TRIGGER_PIN3  8   // Arduino pin tied to trigger pin on the ultrasonic sensor.
#define ECHO_PIN3     9   // Arduino pin tied to echo pin on the ultrasonic sensor.
#define MAX_DISTANCE3 300 // Maximum distance we want to ping for (in centimeters).

NewPing sonar(TRIGGER_PIN, ECHO_PIN, MAX_DISTANCE);     // sets sonar class for hand detector
NewPing sonar2(TRIGGER_PIN2, ECHO_PIN2, MAX_DISTANCE2); // sets sonar class for feet detector
NewPing sonar3(TRIGGER_PIN3, ECHO_PIN3, MAX_DISTANCE3); // sets sonar class for head detector

int range = 100;    // holds the range for the first sensor   
int range2 = 40;    // holds the range for the first sensor   
int range3 = 175;   // holds the range for the first sensor   
int btn;            // records current button value

const int pot = A0;   // potentiometer for adjusting values of range
const int buzz = 3;   // buzzer for feet detector
const int buzz2 = 5;  // buzzer for head detector
const int vibe = 0;   // vibration motor for hand detector
const int button = 4; // button for changing which range to adjust


void setup() {
  // initializes all hardware
  pinMode(pot,INPUT);
  pinMode(buzz,OUTPUT);
  pinMode(buzz2,OUTPUT);
  pinMode(vibe,OUTPUT);

  btn = 0;  // sets value to no range to change
  
  Serial.begin(115200); // begin serial communication
}

void loop() {
  execute(); // executes all functions
}

void execute() {    // cycles through functions
  sense();

  vibrate(USDist(sonar),range,vibe);
  beep(USDist(sonar2),range2,buzz,0);
  beep(USDist(sonar3),range3,buzz2,1);
}

int USDist(NewPing sonar) {   // finds distance away from object within linear path
  delay(100);   // pauses to take reading
  unsigned int uS = sonar.ping();   // reading is taken
  return sonar.convert_cm(uS);      // converts to centimeter units
}

void vibrate(int val, int range, int vibe) {  // creates vibration based upon distance given
  if( val < range - 10) {   // if an object is too close, high intensity vibration goes off
    digitalWrite(vibe,HIGH);
    delay(500);
    digitalWrite(vibe,LOW);
    delay(50);
  }
  else if(val > range + 10) {   // if objects are too far away, low intensity vibration goes off
    digitalWrite(vibe,HIGH);
    delay(200);
    digitalWrite(vibe,LOW);
    delay(50);
  }
  else {    // if objects are a safe distance away, no vibrations occur

  }
}

void beep(int val, int range, int buzz, int num) {   // beeping on left or right ear goes off depending on distance given
  unsigned char delayms;
  if( val < range - 10) {   // if an object is too close, high intensity beeping goes off
    delayms = 5;
    int y = 1;
    analogWrite(buzz, y);

    delay(100);
    analogWrite(buzz, 0);
    delay(delayms);
  }
  else if(num == 1) {
    if(val > range + 8) {    // if objects are too far away, low intensity beeping goes off
      delayms = 700;
      int y = 1;
      analogWrite(buzz, y);

      delay(40);
      analogWrite(buzz, 0);
      delay(delayms);
    }
  }
  else {    // if objects are a safe distance away, no beeping occur
    
  }
}

void sense() {    // determines which ranges to adjust
  if(digitalRead(button) == 1) {    // changes range to adjust each time button is pushed
    btn++;
    delay(50);
    if(btn > 3) {
      btn = 0;
    }
  }
  if(btn == 1) {    // hand detector range is adjusted
    range = 100 + 2*((analogRead(pot) - 515)/30);   
  }
  if(btn == 2) {    // feet detector range is adjusted
    range2 = 40 + 2*((analogRead(pot) - 515)/30);
  }
  if(btn == 3) {    // head detector range is adjusted
    range3 = 175 + 2*((analogRead(pot) - 515)/30);
  }  
}


      
