package com.data.link;
/**
 * 双链表
 * @author liudaiming
 * @version 2015-1-21
 *
 */
class DoublyList{
	public long dData;
	public DoublyList prious;
	public DoublyList next;
	public DoublyList(long dd) {
		// TODO Auto-generated constructor stub
		dData = dd;
	}
	public void displayLink(){
		System.out.print(dData+" ");
	}
}

class DoublyLinkList{
	private DoublyList first;
	private DoublyList last;
	public DoublyLinkList() {
		// TODO Auto-generated constructor stub
		first = null;
		last = null;
	}
	public boolean isEmpty(){
		return first==null;
	}
	/**
	 * 头插
	 * @param data
	 */
	public void insertFirst(long data){
		DoublyList newlink = new DoublyList(data);
		if (isEmpty()) {
			last = newlink;
		}else {
			first.prious = newlink;
		}
		newlink.next = first;
		first = newlink;
	}
	/**
	 * 尾插
	 * @param data
	 */
	public void insertLast(long data){
		DoublyList newlink = new DoublyList(data);
		if(isEmpty()){
			first = newlink;
		}else {
			newlink.prious = first;
			last.next = newlink;
		}
		last = newlink;
	}
	/**
	 * 头删
	 * @return object
	 */
	public DoublyList deleteFirst(){
		DoublyList temp = first;
		if (first.next==null) {
			last = null;
		}else{
			first.next.prious = null;
		}
		first = first.next;
		return temp;
	}
	/**
	 * 尾删
	 * @return
	 */
	public DoublyList deleteLast(){
		DoublyList temp = last;
		if (last.prious==null) {
			first = null;
		}else{
			last.prious.next = null;
		}
		last = last.prious;
		return temp;
	}
   public void displayForward()
      {
      System.out.print("List (first-->last): ");
      DoublyList current = first;          // start at beginning
      while(current != null)         // until end of list,
         {
         current.displayLink();      // display data
         current = current.next;     // move to next link
         }
      System.out.println("");
      }
}

public class DoublyLinked {
	public static void main(String[] args) {
		DoublyLinkList theList = new DoublyLinkList();
		theList.insertFirst(22);      // insert at front
        theList.insertFirst(44);
        theList.insertFirst(66);

        theList.insertLast(11);       // insert at rear
        theList.insertLast(33);
        theList.insertLast(55);

        theList.displayForward();     // display list forward
      
	}

}
