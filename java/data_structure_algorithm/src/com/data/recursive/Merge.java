package com.data.recursive;
/**
 * 归并排序
 * @author liudaiming
 * @version 2015-1-26
 *
 */
public class Merge {
	public static void merge(int[] arrayA,int sizeA,int[] arrayB,int sizeB,int[] arrayC){
		int indexA=0,indexB=0,indexC=0;
		while (indexA<sizeA&&indexB<sizeB) {
			if (arrayA[indexA]<arrayB[indexB]) {
				arrayC[indexC++] = arrayA[indexA++];
			}else {
				arrayC[indexC++] = arrayB[indexB++];
			}
		}
		while (indexA<sizeA) {
			arrayC[indexC++] = arrayA[indexA++];
		}
		while (indexB<sizeB) {
			arrayC[indexC++] = arrayB[indexB++];
		}
	}
	public static void display(int[] array,int size){
		for (int i = 0; i < size; i++) {
			System.out.print(array[i]+" ");
		}
	}
	public static void main(String[] args) {
		int[] arrayA = {23, 47, 81, 95};
		int[] arrayB = {7, 14, 39, 55, 62, 74};
		int[] arrayC = new int[10];
		int sizeA = 4;
		int sizeB = 6;
		merge(arrayA, sizeA, arrayB, sizeB, arrayC);
		display(arrayC, 10);
	}

}
