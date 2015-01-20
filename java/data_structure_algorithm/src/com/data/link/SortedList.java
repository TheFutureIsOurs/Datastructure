package com.data.link;

class SortList{
	private Link first;
	public SortList() {
		// TODO Auto-generated constructor stub
		first = null;
	}
	public boolean isEmpty(){
		return first==null;
	}
	public void insert(int id,double dd){
		Link newLink = new Link(id, dd);
		Link prious = null;
		Link current = first;
		while (current!=null&&current.iData<id) {
			prious = current;
			current = current.next;
		}
		if(prious==null){
			first = newLink;
		}else{
			prious.next = newLink;
		}
		newLink.next = current;
	}
	public Link remove(){
		Link temp = first;
		first = first.next;
		return temp;
	}
	public void displayList(){
		Link current = first;
		while (current!=null) {
			current.displayLink();
			current = current.next;
		}
	}
}

public class SortedList {
	public static void main(String[] args) {
		SortList theSortedList = new SortList();
	      theSortedList.insert(20,20);    // insert 2 items
	      theSortedList.insert(40,40);

	      theSortedList.displayList(); // display list

	      theSortedList.insert(10,10);    // insert 3 more items
	      theSortedList.insert(30,30);
	      theSortedList.insert(50,50);

	      theSortedList.displayList(); // display list

	      theSortedList.remove();      // remove an item

	      theSortedList.displayList(); // display list
	}

}
