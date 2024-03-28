package odevhakankaradereli;
import java.util.Random;


public class hakanKadd {

	public static void main(String[] args) {
		 int size = 3; // Matris boyutu
	        int[][] matrix1 = new int[size][size];
	        int[][] matrix2 = new int[size][size];

	        // Matrisleri rastgele sayılarla doldur
	        fillMatrix(matrix1);
	        fillMatrix(matrix2);

	        // Matrisleri ekrana yazdır
	        System.out.println("Matrix 1:");
	        printMatrix(matrix1);
	        System.out.println("\nMatrix 2:");
	        printMatrix(matrix2);

	        // Matrisleri çarp ve topla
	        int[][] resultMatrix = multiplyMatrices(matrix1, matrix2);
	        int[][] sumMatrix = addMatrices(matrix1, matrix2);

	        // Çarpım ve toplamı ekrana yazdır
	        System.out.println("\nÇarpım:");
	        printMatrix(resultMatrix);
	        System.out.println("\nToplam:");
	        printMatrix(sumMatrix);
	    }

	    // Matrisi rastgele sayılarla dolduran metod
	    public static void fillMatrix(int[][] matrix) {
	        Random rand = new Random();
	        for (int i = 0; i < matrix.length; i++) {
	            for (int j = 0; j < matrix[i].length; j++) {
	                matrix[i][j] = rand.nextInt(10); // 0 ile 10 arasında rastgele sayı
	            }
	        }
	    }

	    // Matrisi ekrana yazdıran metod
	    public static void printMatrix(int[][] matrix) {
	        for (int i = 0; i < matrix.length; i++) {
	            for (int j = 0; j < matrix[i].length; j++) {
	                System.out.print(matrix[i][j] + " ");
	            }
	            System.out.println();
	        }
	    }

	    // Matrisleri çarpan metod
	    public static int[][] multiplyMatrices(int[][] matrix1, int[][] matrix2) {
	        int size = matrix1.length;
	        int[][] result = new int[size][size];
	        for (int i = 0; i < size; i++) {
	            for (int j = 0; j < size; j++) {
	                for (int k = 0; k < size; k++) {
	                    result[i][j] += matrix1[i][k] * matrix2[k][j];
	                }
	            }
	        }
	        return result;
	    }

	    // Matrisleri toplayan metod
	    public static int[][] addMatrices(int[][] matrix1, int[][] matrix2) {
	        int size = matrix1.length;
	        int[][] result = new int[size][size];
	        for (int i = 0; i < size; i++) {
	            for (int j = 0; j < size; j++) {
	                result[i][j] = matrix1[i][j] + matrix2[i][j];
	            }
	        }
	        return result;
	    }
	}