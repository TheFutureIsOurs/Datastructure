package com.data.recursive;

/**
 * 汉诺塔
 * @author liudaiming
 * @version 2015-1-26
 *
 */
public class Towers {
	static void doTower(int topN,char src,char inner,char dest){
		if (topN==1) {
			System.out.println("Disk 1 from "+src + " to " + dest);
		}else {
			doTower(topN-1,src,dest,inner);
			System.out.println("Disk "+topN+" from "+ src + " to "+dest);
			doTower(topN-1, inner, src, dest);
		}
	}
	public static void main(String[] args) {
		int top = 3;
		char src = 'A';
		char inner = 'B';
		char dest = 'C';
		doTower(top, src, inner, dest);
	}

}
