import RPi.GPIO as GPIO
import sys

def setup():
    GPIO.setmode(GPIO.BOARD)
    GPIO.setwarnings(False)
    
def pinDirecton(pinNumber):
    GPIO.setup(pinNumber, GPIO.OUT)
    
def writeValue(numberPin, portState):
    GPIO.output(numberPin, portState)
    
pinNumber = int(sys.argv[1])
portState = int(sys.argv[2])
setup()
pinDirecton(pinNumber)
writeValue(pinNumber, portState)