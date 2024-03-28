package odev3;
import java.util.Random;


public class odev3matris {

	public static void main(String[] args) {
		int[][] matrix1 = new int[2][3];
        int[][] matrix2 = new int[3][1];

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

    // Diğer metodlar burada

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
        int rows1 = matrix1.length;
        int cols1 = matrix1[0].length;
        int cols2 = matrix2[0].length;
        int[][] result = new int[rows1][cols2];
        for (int i = 0; i < rows1; i++) {
            for (int j = 0; j < cols2; j++) {
                for (int k = 0; k < cols1; k++) {
                    result[i][j] += matrix1[i][k] * matrix2[k][j];
                }
            }
        }
        return result;
    }

    // Matrisleri toplayan metod
    public static int[][] addMatrices(int[][] matrix1, int[][] matrix2) {
        int rows = Math.min(matrix1.length, matrix2.length);
        int cols = Math.min(matrix1[0].length, matrix2[0].length);
        int[][] result = new int[rows][cols];
        for (int i = 0; i < rows; i++) {
            for (int j = 0; j < cols; j++) {
                result[i][j] = matrix1[i][j] + matrix2[i][j];
            }
        }
        return result;
    }
}