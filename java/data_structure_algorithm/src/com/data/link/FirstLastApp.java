package com.data.link;

class FirstLastList{
	private Link first;
	private Link last;
	public FirstLastList() {
		// TODO Auto-generated constructor stub
		first = null;
		last = null;
	}
	public boolean isEmpty(){
		return first==null;
	}
	/**
	 * 头插法
	 */
	public void insertFirst(int id,double dd){
		Link newlink = new Link(id, dd);
		if(isEmpty()){
			last = newlink;
		}
		newlink.next = first;
		first = newlink;
	}
	/**
	 * 尾插法
	 */
	public void insertLast(int id,double dd){
		Link newlink = new Link(id, dd);
		if (isEmpty()) {
			first = newlink;
		}
		last.next = newlink;
		last = newlink;
	}
	public void displayList(){
		Link current = first;
		while (current!=null) {
			current.displayLink();
			current = current.next;
		}
	}
}

class FirstLastApp
{
	public static void main(String[] args) {
		FirstLastList theList = new FirstLastList();
		theList.insertFirst(22,22);       // insert at front
        theList.insertFirst(44,44);
        theList.insertFirst(66,66);

        theList.insertLast(11,11);        // insert at rear
        theList.insertLast(33,33);
        theList.insertLast(55,55);

        theList.displayList();         // display the list
	}
	
}

