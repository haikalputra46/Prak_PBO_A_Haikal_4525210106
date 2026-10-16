class MainPertemuan01 {
    public static void main(String[] args) {
        HaloObjek saya = new HaloObjek("Haikal Putra Pratama", "4525210106");
        System.out.println(saya.sapa());

        // Bukti bahwa setiap objek menyimpan datanya masing-masing.
        HaloObjek temanSekelas = new HaloObjek("Budi Santoso", "2024002");
        System.out.println(temanSekelas.sapa());

        System.out.println();
        System.out.println("Pertanyaan untuk direnungkan:");
        System.out.println("  Baris mana di atas yang MEMBUAT objek?");
        System.out.println("  Baris mana yang hanya MENDEKLARASIKAN kelas?");
        System.out.println("  Mengapa kedua objek di atas bisa menyapa dengan nama berbeda,");
        System.out.println("  padahal method sapa() hanya ditulis satu kali?");
    }
}
