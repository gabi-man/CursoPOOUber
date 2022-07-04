from car import Car

class UberVan(Car):

    typeCarAccepted = []
    seatsMaterials = []

    def __init__(self, licence, driver,typeCarAccepted, seatsMaterials):
        super.__init__(license, driver)
        self.typeCarAccepted = typeCarAccepted
        self.seatsMaterials = seatsMaterials