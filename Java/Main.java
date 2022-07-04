class Main 
{
    public static void main(String[] args) 
    {
        System.out.println("Hola Mundo");
        Car car = new Car("AMQ123", new Account("Andres Herrera", "AND123","andresh@hotmail.com", "123456"));
        car.setPassenger(3);
        car.printDataCar();

        System.out.println("--------------");
        UberX uberx2 = new UberX("AMQ123", new Account("Andy Lorenz", "RTF163","lorenza@hotmail.com", "123456"), "Subaru", "Impresa");
        uberx2.setPassenger(4);
        uberx2.printDataCar();

        System.out.println("--------------");
        UberVan uberVan = new UberVan("FGH345", new Account("Lorenzo Sigfredo", "12334521", "lorenzito@gmail.com", "123345"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();

        System.out.println("--------------");
        UberX uberX = new UberX("QWE567", new Account("Andrea Ferran", "ANDA876", "andreaf@gmail.com", "654321"), "Toyota" ,"Corolla");
        uberX.driver.printDataAccount();
        
        
    }

}