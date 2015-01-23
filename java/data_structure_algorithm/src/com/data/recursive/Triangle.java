package com.data.recursive;

public class Triangle {
	public static int triangleapp(int n){
		System.out.println("Enter:n="+n);
		if (n==1) {
			System.out.println("return:1");
			return 1;
		}else {
			int temp = n + triangleapp(n-1);
			System.out.println("return "+temp);
			return temp;
		}
	}
	public static void main(String[] args) {
		System.out.println(triangleapp(4));
	}

}
