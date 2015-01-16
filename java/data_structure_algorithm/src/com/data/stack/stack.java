package com.data.stack;
/**
 * 栈
 * @author liudaiming
 * @version 2015-1-14
 *
 */
class stackX{
	private long[] array;
	private int size;
	private int top;
	public stackX(int max) {
		// TODO Auto-generated constructor stub
		array = new long[max];
		size = max;
		top = -1;
	}
	public void push(long value){
		array[++top] = value;
	}
	public long pop(){
		return array[top--];
	}
	public boolean isfull(){
		return top==size-1;
	}
	public boolean isempty(){
		return top==-1;
	}
	
}

public class stack {
	public static void main(String[] args) {
		stackX stack = new stackX(10);
		stack.push(20);               // push items onto stack
		stack.push(40);
		stack.push(60);
		stack.push(80);
		while (!stack.isempty()) {
			System.out.print(stack.pop()+" ");
		}
	}

}
