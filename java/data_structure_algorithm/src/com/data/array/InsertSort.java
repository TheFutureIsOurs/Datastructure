package com.data.array;
/**
 * 插入排序
 * @author liudaiming
 * @version 2015-1-14
 *
 */
class ArrayInsert{
	private long[] array;
	private int Elements;
	public ArrayInsert(int max) {
		// TODO Auto-generated constructor stub
		array = new long[max];
		Elements = 0;
	}
	public void insert(long value){
		array[Elements++] = value;
	}
	public void display(){
		for(int i=0;i<Elements;i++){
			System.out.print(array[i]+" ");
		}
		System.out.println("");
	}
	/**
	 * start
	 */
	public void insertionsort(){
		int in,out;
		for(out=1;out<Elements;out++){
			long temp = array[out];
			in = out;
			while (in>0&&temp<array[in-1]) {
				array[in] = array[in-1];
				--in;
			}
			array[in] = temp;
		}
		
	}
}

public class InsertSort {
	public static void main(String[] args) {
		ArrayInsert arr = new ArrayInsert(20);
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
        arr.display();
        arr.insertionsort();
        arr.display();
	}

}
