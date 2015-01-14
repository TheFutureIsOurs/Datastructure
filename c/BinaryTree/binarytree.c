#include "tree.h"
#include <stdio.h>
#include <stdlib.h>

struct TreeNode 
{
	ElementType element;
	SearchTree Left;
	SearchTree Right;
};
/************************************************************************/
/* 清空二叉树                                                           */
/************************************************************************/
SearchTree MakeEmpty(SearchTree T)
{
	if(T!=NULL)
	{
		MakeEmpty(T->Left);
		MakeEmpty(T->Right);
		free(T);
	}
	return NULL;
}
/************************************************************************/
/* 二叉树插入                                                          */
/************************************************************************/
SearchTree Insert(SearchTree T,ElementType E)
{
	if (T==NULL)
	{
		T = (SearchTree)malloc(sizeof(struct TreeNode));
		if (T==NULL)
		{
			printf("无法分配内存");
			exit(0);
		}
		
	}
}

int main()
{
	return 0;
}