package com.data.recursive;

/**
 * 二分法查找
 * @author liudaiming
 * @version 2015-1-22
 *
 */
class OrdArray{
	private long[] array;
	private int Elements;
	public OrdArray(int max) {
		// TODO Auto-generated constructor stub
		array = new long[max];
		Elements = 0;
	}
	public int size(){
		return Elements;
	}
	public void insert(long value){
		int i;
		for (i = 0; i < Elements; i++) {
			if(value<array[i]){
				break;
			}
		}
		for (int j = Elements; j > i; j--) {
			array[j] = array[j-1];
		}
		array[i] = value;
		Elements++;
	}
	public void display(){
		for (int i = 0; i < Elements; i++) {
			System.out.print(array[i]+" ");
		}
	}
	public int find(long value){
		return ordfind(value, 0, Elements-1);
	}
	/**
	 * 二分查找
	 * @return
	 */
	public int ordfind(long value,int lowerbound,int upperbound){
		int order;
		order = (lowerbound+upperbound)/2;
		if (array[order]==value) {
			return order;
		}else if (lowerbound>upperbound) {
			return -1;
		}else {
			if (array[order]>value) {
				return ordfind(value, lowerbound, order-1);
			}else {
				return ordfind(value, order+1, upperbound);
			}
		}
	}
}

public class BinarySearch {
	public static void main(String[] args) {
		OrdArray arr = new OrdArray(100);
		  arr.insert(72);                // insert items
	      arr.insert(90);
	      arr.insert(45);
	      arr.insert(126);
	      arr.insert(54);
	      arr.insert(99);
	      arr.insert(144);
	      arr.insert(27);
	      arr.insert(135);
	      arr.insert(81);
	      arr.insert(18);
	      arr.insert(108);
	      arr.insert(9);
	      arr.insert(117);
	      arr.insert(63);
	      arr.insert(36);
	      arr.display();
	      System.out.println("");
	      int order = arr.find(87);
	      System.out.println(order);
	}

}
