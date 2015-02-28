package com.data.advancesort;
class QuikSort1{
	private long[] array;
	private int Elements;
	public QuikSort1(int max) {
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
	public void quiksort1(){
		quiksort(0, Elements-1);
	}
	public void quiksort(int left,int right){
		if (right-left<=0) {
			return;
		}else {
			long pivot = array[right];
			int partition = partion(left, right, pivot);
			quiksort(left, partition-1);
			quiksort(partition+1, right);
		}
	}
	public int partion(int left,int right,long value){
		int leftter = left-1;
		int rightter = right;
		while (true) {
			while (array[++leftter]<value) {
			}
			while (rightter>0&&array[--rightter]>value) {
			}
			if (leftter>=rightter) {
				break;
			}else {
				swap(leftter, rightter);
			}
		}
		swap(leftter, right);
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

public class QuikSortSrc1 {
	public static void main(String[] args) {
		 int maxSize = 10;             // array size
		 QuikSort1 arr;
	      arr = new QuikSort1(maxSize);   // create the array

	      for(int j=0; j<maxSize; j++)  // fill array with
	         {                          // random numbers
	         long n = (int)(java.lang.Math.random()*99);
	         arr.insert(n);
	         }
	      arr.display();                // display unsorted array
	      arr.quiksort1();             // shell sort the array
	      arr.display();    
	}
}
