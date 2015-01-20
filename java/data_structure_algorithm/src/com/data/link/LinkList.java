package com.data.link;

/**
 * 无头结点的单链表
 * @author liudaiming
 * @version 2015-01-19
 *
 */
class Link{
	protected int iData;
	protected double dData;
	protected Link next;
	public Link(int id,double dd) {
		// TODO Auto-generated constructor stub
		iData = id;
		dData = dd;
	}
	public void displayLink(){
		System.out.println("{"+iData+","+dData+"}");
	}
}

public class LinkList {
	private Link first;
	public LinkList() {
		// TODO Auto-generated constructor stub
		first = null;
	}
	public boolean isEmpty(){
		return first==null;
	}
	/**
	 * 头插法
	 */
	public void insertFirst(int id,double dd){
		Link newlink = new Link(id, dd);
		newlink.next = first;
		first = newlink;
	}
	public Link deleteFirst(){
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
	public Link find(int key){
		Link current = first;
		while (current.iData!=key) {
			if (current.next==null) {
				return null;
			}else{
				current = current.next;
			}
		}
		return current;
	}
	public Link delete(int key){
		Link current = first;
		Link prious = first;
		while (current.iData!=key) {
			if(current.next==null){
				return null;
			}else{
				prious = current;
				current = current.next;
			}
		}
		if (current==first) {
			first = first.next;
		}else{
			prious.next = current.next;
		}
		return current;
	}
	public static void main(String[] args) {
		LinkList theList = new LinkList();
		theList.insertFirst(22, 2.99);      // insert four items
        theList.insertFirst(44, 4.99);
        theList.insertFirst(66, 6.99);
        theList.insertFirst(88, 8.99);
        theList.displayList();
        Link f = theList.find(44);          // find item
        if( f != null)
           System.out.println("Found link with key " + f.iData);
        else
           System.out.println("Can't find link");

        Link d = theList.delete(66);        // delete item
        if( d != null )
           System.out.println("Deleted link with key " + d.iData);
        else
           System.out.println("Can't delete link");

        theList.displayList();              
        /*while( !theList.isEmpty() )         // until it's empty,
        {
	        Link aLink = theList.deleteFirst();   // delete link
	        System.out.print("Deleted ");         // display it
	        aLink.displayLink();
	        System.out.println("");
        }
        theList.displayList();              // display list
*/	}

}
