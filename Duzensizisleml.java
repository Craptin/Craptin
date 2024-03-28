package duzensizislemeler;
import java.util.Random;

public class Duzensizisleml {

	public static void main(String[] args) {
		int[][][] duzensizdizi = rastgeleDuzensizDiziOlustu(5);
		System.out.println("Oluşan düzensiz disi:");
		diziYazdir(duzensizdizi);
		int carpim = 1;
		int toplam = 0;
		for(int i = 0; i < duzensizdizi.length; i++) {
			for(int j = 0 ; j < duzensizdizi[i].length; j++) {
				for(int k = 0; k < duzensizdizi[i][j].length; k++) {
					carpim *= duzensizdizi[i][j][k];
					toplam += duzensizdizi[i][j][k];
				}
			}
		}
		System.out.println("\nÇarpim:"+ carpim);
		System.out.println("Toplam:" + toplam);
		

	}
	
	public static int[][][] rastgeleDuzensizDiziOlustu(int maksimumBoyut){
		Random random = new Random();
		int boyut = random.nextInt(maksimumBoyut)+ 1;
		int[][][] dizi = new int [boyut][][];
		
		for(int i = 0; i < boyut; i++) {
			int  alatDiziUzunlugu =random.nextInt(maksimumBoyut)+ 1;
			dizi[i] = new int [alatDiziUzunlugu][];
			for(int j = 0; j < alatDiziUzunlugu; j++) {
				int altDiziBoyutu =random.nextInt(maksimumBoyut)+1;
				dizi[i][j] = new int [altDiziBoyutu];
				for(int k= 0; k < altDiziBoyutu; k++) {
					dizi[i][j][k]= random.nextInt(10);
				}
			}
		}
		return dizi;
	}
	public static void diziYazdir(int[][][] dizi) {
		for(int i =0; i < dizi.length; i++) {
			System.out.println("dizi" + (i+1)+ ":");
			for(int j = 0; j < dizi[i].length; j++) {
				for(int k = 0; k < dizi[i][j].length; k++) {
					System.out.println(dizi[i][j][k]+ "");
					
				}
				System.out.println();
				
				
			}
			System.out.println();
		}
	}
	
	

}
