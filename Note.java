package user;

import java.util.*;
import java.util.Scanner;

class User {
    public String kullaniciAdi;
    public String sifre;
    public List<String> notlar;

    public User(String kullaniciAdi, String sifre) {
        this.kullaniciAdi = kullaniciAdi;
        this.sifre = sifre;
        this.notlar = new ArrayList<>();
    }

    public String getKullaniciAdi() {
        return kullaniciAdi;
    }

    public String getSifre() {
        return sifre;
    }

    public List<String> getNotes() {
        return notlar;
    }

    public void notEkle(String not) {
        notlar.add(not);
    }

    public static User kayitOl(Map<String, User> kullanicilar) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Kullanıcı adı girin: ");
        String kullaniciAdi = scanner.nextLine();
        System.out.print("Şifre girin: ");
        String sifre = scanner.nextLine();
        User kullanici = new User(kullaniciAdi, sifre);
        kullanicilar.put(kullaniciAdi, kullanici);
        return kullanici;
    }

    public static User girisYap(Map<String, User> kullanicilar) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Kullanıcı adı girin: ");
        String kullaniciAdi = scanner.nextLine();
        System.out.print("Şifre girin: ");
        String sifre = scanner.nextLine();
        User kullanici = kullanicilar.get(kullaniciAdi);
        if (kullanici != null && kullanici.getSifre().equals(sifre)) {
            return kullanici;
        }
        return null;
    }
}

public class Note {
    public static void main(String[] args) {
        Map<String, User> kullanicilar = new HashMap<>();
        User kullanici = null;
        while (true) {
            System.out.println("1. Kayıt Ol");
            System.out.println("2. Giriş Yap");
            System.out.println("3. Not Ekle");
            System.out.println("4. Notları Görüntüle");
            System.out.println("5. Çıkış");
            System.out.print("Seçiminiz: ");
            Scanner scanner = new Scanner(System.in);
            int secim = scanner.nextInt();
            scanner.nextLine();

            switch (secim) {
                case 1:
                    kullanici = User.kayitOl(kullanicilar);
                    break;
                case 2:
                    kullanici = User.girisYap(kullanicilar);
                    break;
                case 3:
                    if (kullanici == null) {
                        System.out.println("Lütfen önce giriş yapın.");
                        break;
                    }
                    System.out.print("Not girin: ");
                    String not =scanner.nextLine();
                    kullanici.notEkle(not);
                    System.out.println("Not eklendi.");
                    break;
                case 4:
                    if (kullanici == null) {
                        System.out.println("Lütfen önce giriş yapın.");
                        break;
                    }
                    System.out.println("Notlarınız:");
                    int i = 1;
                    for (String not2 : kullanici.getNotes()) {
                        System.out.println(i + ". " + not2);
                        i++;
                    }
                    break;
                case 5:
                    System.exit(0);
                default:
                    System.out.println("Geçersiz seçim.");
            }
        }
    }
}