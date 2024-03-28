package telefon;
import java.util.Random;


public class telefonsa {
    public static void main(String[] args) {
        int size = 5; // Vektör boyutu
        int[] vector1 = new int[size];
        int[] vector2 = new int[size];

        // Vektörleri rastgele sayılarla doldur
        fillVector(vector1);
        fillVector(vector2);

        // Vektörleri ekrana yazdır
        System.out.println("Vector 1:");
        printVector(vector1);
        System.out.println("\nVector 2:");
        printVector(vector2);

        // Vektörleri çarp ve topla
        int[] resultVector = multiplyVectors(vector1, vector2);
        int[] sumVector = addVectors(vector1, vector2);

        // Çarpım ve toplamı ekrana yazdır
        System.out.println("\nÇarpım:");
        printVector(resultVector);
        System.out.println("\nToplam:");
        printVector(sumVector);
    }

    // Vektörü rastgele sayılarla dolduran metod
    public static void fillVector(int[] vector) {
        Random random = new Random();
        for (int i = 0; i < vector.length; i++) {
            vector[i] = random.nextInt(10); // 0 ile 10 arasında rastgele sayılar
        }
    }

    // Vektörü ekrana yazdıran metod
    public static void printVector(int[] vector) {
        for (int i = 0; i < vector.length; i++) {
            System.out.print(vector[i] + " ");
        }
    }

    // İki vektörü çarpan metod
    public static int[] multiplyVectors(int[] vector1, int[] vector2) {
        int[] resultVector = new int[vector1.length];
        for (int i = 0; i < vector1.length; i++) {
            resultVector[i] = vector1[i] * vector2[i];
        }
        return resultVector;
    }

    // İki vektörü toplayan metod
    public static int[] addVectors(int[] vector1, int[] vector2) {
        int[] sumVector = new int[vector1.length];
        for (int i = 0; i < vector1.length; i++) {
            sumVector[i] = vector1[i] + vector2[i];
        }
        return sumVector;
    }
}
