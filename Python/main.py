from car import Car
from account import Account
from uberX import UberX
from user import User


if __name__ == "__main__":
    print("Hola Mundo")
    car = Car("AMS234", Account("Andres Herrera", "ANDA786", "andresin@sinfin.com", "123345567"))
    print(vars(car))
    print(vars(car.driver))


    car2 = Car("QWE567", Account("Martha", "ADN123", "martita@hotmail.com", "123345"))
    print(vars(car2))
    print(vars(car2.driver))

    print("UberX")
    uberx = UberX("KLO365", Account("Marco Lois", "SGR4567", "marquito@gmail.com", "345567"), "toyota", "Corolla")
    print(vars(uberx))
    print(vars(uberx.driver))
