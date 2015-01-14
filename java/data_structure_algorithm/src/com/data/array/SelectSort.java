package com.data.array;
/**
 * 选择排序
 * @author liudaiming
 * @version 2015-1-13
 *
 */
class ArraySelect{
	private long[] array;
	private int Elments;
	public ArraySelect(int max) {
		// TODO Auto-generated constructor stub
		array = new long[max];
	}
	public void disply(){
		for (int i = 0; i < Elments; i++) {
			System.out.print(array[i]+" ");
		}
		System.out.print("\n");
	}
	public void insert(long value){
		array[Elments++] = value;
	}
	public void selectionsort(){
		int out,in,min;
		long swap;
		for (out = 0; out < Elments-1; out++) {
			min = out;
			for (in = out+1; in < Elments; in++) {
				if (array[in] < array[min]) {
					min = in;
				}
			}
			if(min!=out){
				swap = array[out];
				array[out] = array[min];
				array[min] = swap;
			}
		}
	}
	
}

public class SelectSort {
	public static void main(String[] args) {
		ArraySelect arr = new ArraySelect(20);
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
        arr.selectionsort();
        arr.disply();
	}

}
