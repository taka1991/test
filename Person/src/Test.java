
public class Test {

	public static void main(String[] args) {
		Person taro =new Person();
		taro.name="taro";
		taro.age=18;
		System.out.println(taro.name);
		System.out.println(taro.age);
		Person jiro = new Person("jiro",20);
		System.out.println(jiro.name);
		System.out.println(jiro.age);
		Person saburo = new Person("saburo");
		System.out.println(saburo.name);
		System.out.println(saburo.age);
		Person nanasi = new Person(25);
		System.out.println(nanasi.name);
		System.out.println(nanasi.age);
		Person hanako = new Person(17, "hanako");
		System.out.println(hanako.name);
		System.out.println(hanako.age);




		Robot aibo =new Robot();
		aibo.name="アイボ";
		System.out.println(aibo.name);
		aibo.talk();
		aibo.walk();
		aibo.run();
		Robot asimo =new Robot();
		asimo.name="アシモ";
		System.out.println(asimo.name);
		asimo.talk();
		asimo.walk();
		asimo.run();
		Robot pepper =new Robot();
		pepper.name="ペッパー";
		System.out.println(pepper.name);
		pepper.talk();
		pepper.walk();
		pepper.run();
		Robot doraemon =new Robot();
		doraemon.name="ドラえもん";
		System.out.println(doraemon.name);
		doraemon.talk();
		doraemon.walk();
		doraemon.run();
	}

}
