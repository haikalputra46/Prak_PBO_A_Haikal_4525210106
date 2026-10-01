public class PegawaiTetap extends Pegawai {

    /** Tunjangan masa kerja: 2% gaji pokok per tahun, maksimum 40%. */
    protected static final double TUNJANGAN_PER_TAHUN = 0.02;
    protected static final double TUNJANGAN_MAKSIMUM  = 0.40;

    private final int masaKerjaTahun;

    public PegawaiTetap(String nip, String nama, double gajiPokok, int masaKerjaTahun) {
        super(nip, nama, gajiPokok);

        this.masaKerjaTahun = masaKerjaTahun;
    }

    @Override
    public double hitungGaji() {
        return super.hitungGaji() + Math.min(masaKerjaTahun * TUNJANGAN_PER_TAHUN, TUNJANGAN_MAKSIMUM) * super.hitungGaji();
    }

    @Override
    public String jenis() { return "TETAP"; }

    protected int getMasaKerjaTahun() { return masaKerjaTahun; }
}
