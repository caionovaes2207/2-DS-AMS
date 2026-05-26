// Definição dos pinos baseada no seu circuito original
int trig = 4;
int echo = 5;
int led = 8;

void setup() {
  Serial.begin(9600);
  
  pinMode(4, OUTPUT);
  pinMode(5, INPUT);
  pinMode(2, OUTPUT);
  pinMode(8, OUTPUT);
}

void loop() {
  // Pulso para ativar o sensor ultrassônico
  digitalWrite(trig, LOW);
  delayMicroseconds(2);
  digitalWrite(trig, HIGH);
  delayMicroseconds(10);
  digitalWrite(trig, LOW);

  // Mede o tempo de resposta do eco
  long duracao = pulseIn(echo, HIGH);
  
  // Calcula a distância em centímetros
  float distancia = (duracao/2) / 29.1;

  // Exibe o valor no Monitor Serial para você acompanhar
  Serial.print("Distancia: ");
  Serial.print(distancia);
  Serial.println(" cm");

  if (distancia > 50 && distancia < 60) {
    tone(2, 400);
    digitalWrite(led, HIGH);
  } else {
    noTone(2);
    digitalWrite(led, LOW);
  }
    
  delay(100);
}
