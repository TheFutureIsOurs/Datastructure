package com.data.advancesort;
/**
 * 划分
 * @author liudaiming
 * @version 2015-2-22
 *
 */
class Partition{
	private long[] array;
	private int Elements;
	public Partition(int max) {
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
	public int partion(int left,int right,long value){
		int leftter = left-1;
		int rightter = right+1;
		while (true) {
			while (leftter<right&&array[++leftter]<value) {
			}
			while (rightter>left&&array[--rightter]>value) {
			}
			if (leftter>=rightter) {
				break;
			}
			swap(leftter, rightter);
		}
		return leftter;
	}
	public void swap(int dex1, int dex2)  // swap two elements
    {
	    long temp;
	    temp = array[dex1];             // A into temp
	    array[dex1] = array[dex2];   // B into A
	    array[dex2] = temp;             // temp into B
    } 
}

public class PartitionSrc {
	public static void main(String[] args) {
		 int maxSize = 10;             // array size
		 Partition arr;
	      arr = new Partition(maxSize);   // create the array

	      for(int j=0; j<maxSize; j++)  // fill array with
	         {                          // random numbers
	         long n = (int)(java.lang.Math.random()*99);
	         arr.insert(n);
	         }
	      arr.display();                // display unsorted array
	      System.out.println(arr.partion(0, maxSize-1, 90));              // shell sort the array
	      arr.display();    
	}

}
