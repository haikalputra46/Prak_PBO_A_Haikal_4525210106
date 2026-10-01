public class Segitiga extends BangunDatar {

    private final double alas;
    private final double tinggi;
    private final double sisi;

    public Segitiga(double alas, double tinggi, double sisi) {
        super("Segitiga");
        if (alas <= 0 || tinggi <= 0 || sisi <= 0) {
            throw new IllegalArgumentException("Sisi harus > 0");
        }
        this.alas = alas;
        this.tinggi = tinggi;
        this.sisi = sisi;
    }

    @Override
    public double luas() {
        return 0.5 * alas * tinggi;
    }

    @Override
    public double keliling() {
        return sisi + sisi + sisi;
    }
    
}
