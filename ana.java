package soru;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;
import java.util.Arrays;

public class ana {

    public static void main(String[] args) {
        // Soru oluştur
        Quiz quiz = new Quiz("France'in başkenti nedir?", "Paris", Arrays.asList("Paris", "Londra", "Roma", "Berlin"));

        // Kullanıcıya soru ve cevap seçenekleri göster
        System.out.println(quiz.getQuestion());
        for (int i = 0; i < quiz.getChoices().size(); i++) {
            System.out.println((i + 1) + ". " + quiz.getChoices().get(i));
        }

        // Kullanıcının cevabı al
        Scanner scanner = new Scanner(System.in);
        System.out.print("Cevabınız: ");
        int cevap = scanner.nextInt();

        // Kullanıcının cevabının doğruluğunu kontrol et
        if (quiz.getChoices().get(cevap - 1).equals(quiz.getCorrectAnswer())) {
            System.out.println("Doğru cevap!");
        } else {
            System.out.println("Yanlış cevap. Doğru cevap " + quiz.getCorrectAnswer() + "’dır.");
        }
    }
}

class Quiz {
    private String question;
    private String correctAnswer;
    private List<String> choices;

    public Quiz(String question, String correctAnswer, List<String> choices) {
        this.question = question;
        this.correctAnswer = correctAnswer;
        this.choices = choices;
    }

    public String getQuestion() {
        return question;
    }

    public String getCorrectAnswer() {
        return correctAnswer;
    }

    public List<String> getChoices() {
        return choices;
    }
}