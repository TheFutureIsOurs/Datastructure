package com.data.array;

/**
 * 冒泡排序
 * @author liudaiming
 * @version 2015-1-13
 *
 */
class ArrayBubble{
	private long[] a;
	private int Elements;
	public ArrayBubble(int max) {
		// TODO Auto-generated constructor stub
		a = new long[max];
		Elements = 0;
	}
	/**
	 * 打印
	 */
	public void disply(){
		for (int i = 0; i < Elements; i++) {
			System.out.print(a[i]+" ");
		}
		System.out.println("");
	}
	public void insert(long value){
		a[Elements++] = value;
	}
	/**
	 * 冒泡
	 */
	public void bubsort(){
		int out,in;
		long swap;
		for(out=Elements-1;out>0;out--){
			for(in=0;in<out;in++){
				 if(a[in]>a[in+1]){
					 swap = a[in];
					 a[in] = a[in+1];
					 a[in+1] = swap;
				 }
			}
		}
	}
}

public class BubbleSort {
	public static void main(String[] args) {
		ArrayBubble arr = new ArrayBubble(20);
		arr.insert(77);               // insert 10 items
        arr.insert(99);
        arr.insert(44);
        arr.insert(55);
        arr.insert(22);
        arr.insert(88);
        arr.insert(11);
        arr.insert(00);
        arr.insert(66);
        arr.insert(33);
        arr.disply();
        arr.bubsort();
        arr.disply();
	}

}
