package jp.co.internous.action;

import java.util.HashMap;
import java.util.Map;

public class MapSample {

	public static void main(String[]args){
		Map<String,String> map = new HashMap<String,String>();
		//値の記憶
		map.put("key1", "value1");
		map.put("key2", "value2");
		map.put("key3", "value3");
		map.put("key4", "value4");
		map.put("key5", "value5");
		//値の取得
		String value=map.get("key1");
		System.out.println(value);
		String valueN=map.get("key6");
		System.out.println(valueN);
		//
		if (map.containsKey("key1")){
			System.out.println("key1は存在します");
		} else{
			System.out.println("key1は存在しません");
		}
		//
		for(Map.Entry<String,String>e:map.entrySet()){
			System.out.println(e.getKey()+":"+e.getValue());
		}

	}
}
