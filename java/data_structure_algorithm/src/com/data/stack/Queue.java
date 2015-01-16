package com.data.stack;

/**
 * queue
 * @author liudaiming
 * @version 2015-1-15
 *
 */
class QueueX{
	private int maxSize;
	private long[] array;
	private int count;
	private int front;
	private int rear;
	public QueueX(int size) {
		// TODO Auto-generated constructor stub
		maxSize = size;
		array = new long[size];
		front = 0;
		rear = -1;
		count = 0;
	}
	public void insert(long value){
		if(rear==maxSize-1){
			rear = -1;
		}
		if(count==maxSize){
			System.out.println("已满");
			System.exit(0);
		}
		array[++rear] = value;
		count++;
	}
	public long remove(){
		long temp = array[front++];
		if(front==maxSize){
			front = 0;
		}
		count--;
		return temp;
	}
	public boolean isEmpty(){
		return count==0;
	}
	public boolean isFull(){
		return count==maxSize;
	}
}

public class Queue {
	public static void main(String[] args) {
		QueueX theQueue = new QueueX(5);  // queue holds 5 items

	      theQueue.insert(10);            // insert 4 items
	      theQueue.insert(20);
	      theQueue.insert(30);
	      theQueue.insert(40);

	      theQueue.remove();              // remove 3 items
	      theQueue.remove();              //    (10, 20, 30)
	      theQueue.remove();

	      theQueue.insert(50);            // insert 4 more items
	      theQueue.insert(60);            //    (wraps around)
	      theQueue.insert(70);
	      theQueue.insert(80);
	      theQueue.insert(90);
	      theQueue.insert(100);

	      while( !theQueue.isEmpty() )    // remove and display
         {                            //    all items
	         long n = theQueue.remove();  // (40, 50, 60, 70, 80)
	         System.out.print(n);
	         System.out.print(" ");
         }
	      System.out.println("");
	}

}
