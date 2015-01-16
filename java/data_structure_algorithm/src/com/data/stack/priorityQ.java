package com.data.stack;
/**
 * 优先级队列
 * @author liudaiming
 * @version 2015-1-15
 *
 */
class priority{
	private long[] array;
	private int item;
	private int maxSize;
	public priority(int size) {
		// TODO Auto-generated constructor stub
		maxSize = size;
		array = new long[size];
		item = 0;
	}
	public void insert(long value){
		if(item==0){
			array[item++] = value;
		}else{
			int j;
			for(j=item-1;j>=0;j--){
				if(array[j]<value){
					array[j+1] = array[j];
				}else{
					break;
				}
			}
			array[j+1] = value;
			item++;
		}
	}
	public long remove(){
		return array[--item];
	}
	public boolean isEmpty(){
		return item==0;
	}
}
public class priorityQ {
	public static void main(String[] args) {
		priority thePQ = new priority(5);
	      thePQ.insert(30);
	      thePQ.insert(50);
	      thePQ.insert(10);
	      thePQ.insert(40);
	      thePQ.insert(20);

	      while( !thePQ.isEmpty() )
	         {
	         long item = thePQ.remove();
	         System.out.print(item + " ");  // 10, 20, 30, 40, 50
	         }  // end while
	      System.out.println("");
	}
}
