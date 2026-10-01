public class Trapesium extends BangunDatar {

    private final double sisiA;
    private final double sisiB;
    private final double sisiSamping;
    private final double tinggi;

    public Trapesium(double sisiA, double sisiB, double sisiSamping, double tinggi) {
        super("Trapesium");
        if (sisiA <= 0 || sisiB <= 0 | tinggi <= 0) {
            throw new IllegalArgumentException("Sisi dan tinggi harus > 0");
        }
        this.sisiA = sisiA;
        this.sisiB = sisiB;
        this.sisiSamping = sisiSamping;
        this.tinggi = tinggi;
    }

    @Override
    public double luas() {
        return ((sisiA + sisiB) / 2) * tinggi;
    }

    @Override
    public double keliling() {
        return sisiA + sisiB + sisiSamping + tinggi;
    }
    
}
