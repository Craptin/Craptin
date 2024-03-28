package Matriss;

public class matristele {

	public static void main(String[] args) {
		int [][] matris = new int [3][3];
		for(int i = 0; i< 3; i++) {
			for (int j=0; j < 3; j++) {
				
				matris[i][j] =(int)(Math.random() * 100);
			}
		}
		System.out.println("Matris Bu hocam :D");
		for(int i = 0; i < 3; i++) {
			for(int j=0; j < 3; j++) {
				System.out.println(matris[i][j]+ "\t");
			}
			System.out.println();
		}
		
		int[] tekBoyutluMatris = new int[9];
		int index =0;
		for(int i =0; i <3; i++) {
			for(int j=0; j < 3; j++) {
				tekBoyutluMatris[index++] = matris[i][j];
			}
		}
		for(int i = 0; i< tekBoyutluMatris.length - 1; i++) {
			for(int j = 0; j < tekBoyutluMatris.length - i - 1; j++) {
				if (tekBoyutluMatris[j] < tekBoyutluMatris[j + 1]) {
					int temp = tekBoyutluMatris[j];
					tekBoyutluMatris[j] = tekBoyutluMatris[j  + 1];
					tekBoyutluMatris[j +1] = temp;
				}
			}
		}
		index = 0;
		for(int i = 0; i < 3; i++ ) {
			for (int j =0; j <3; j++){
				matris[i][j] = tekBoyutluMatris[index++];
			}
		}
		System.out.println("\nSıralanmış matris:");
		for(int i = 0; i < 3; i++) {
			for(int j = 0; j <3; j++) {
				System.out.println(matris[i][j]+ " \t");
			}
			System.out.println();
		}

	}

}

