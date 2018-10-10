package jp.co.internous.action;

public class Main {

	public static void main(String[]args){
		System.out.println("Hello World");
		System.out.println(gokei(1,2));
		int total=gokei(2,3);
		System.out.println(total);
	}
	public static int gokei(int num1, int num2){
		return num1+num2;
	}
}
