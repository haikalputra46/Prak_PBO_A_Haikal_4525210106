/**
 * Sesi 1 — objek pertama Anda.
 *
 * Kelas objek untuk demonstrasi pembuatan objek dan pemanggilan method.
 *
 * Kompilasi dan jalankan:
 * javac -d out HaloObjek.java main.java
 * java -cp out MainPertemuan01
 */
public class HaloObjek {

    private String nama;
    private String nim;

    public HaloObjek(String nama, String nim) {
        this.nama = nama;
        this.nim = nim;
    }

    /**
     * Mengembalikan sapaan berdasarkan data yang tersimpan pada objek.
     */
    public String sapa() {
        return "Halo, saya " + nama + " (" + nim + ")";
    }

}
