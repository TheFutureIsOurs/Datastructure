package com.data.advancesort;
/**
 * 希尔排序
 * @author liudaiming
 * @version 2015-2-20
 *
 */
class ShellSort{
	private long[] array;
	private int Elements;
	public ShellSort(int max) {
		// TODO Auto-generated constructor stub
		array = new long[max];
		Elements = 0;
	}
	public void insert(long value){
		array[Elements++] = value;
	}
	public void display(){
		for (int i = 0; i < Elements; i++) {
			System.out.print(array[i]+" ");
		}
		System.out.print("\n");
	}
	public void shellsort(){
		int inner,outter;
		long temp;
		int h=1;
		while (h<=Elements/3) {
			h = h*3+1;
		}
		while (h>0) {
			for (outter = h; outter < Elements; outter++) {
				temp = array[outter];
				inner = outter;
				while (inner>h-1&&temp<array[inner-h]) {
					array[inner] = array[inner-h];
					inner -= h;
				}
				array[inner] = temp;
			}
			h = (h-1)/3;
		}
	}
}

public class ShellSortSrc {
	public static void main(String[] args) {
		 int maxSize = 10;             // array size
	      ShellSort arr;
	      arr = new ShellSort(maxSize);   // create the array

	      for(int j=0; j<maxSize; j++)  // fill array with
	         {                          // random numbers
	         long n = (int)(java.lang.Math.random()*99);
	         arr.insert(n);
	         }
	      arr.display();                // display unsorted array
	      arr.shellsort();              // shell sort the array
	      arr.display();    
	}

}

