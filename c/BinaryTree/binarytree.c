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
/* ��ն�����                                                           */
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
/* ����������                                                          */
/************************************************************************/
SearchTree Insert(SearchTree T,ElementType E)
{
	if (T==NULL)
	{
		T = (SearchTree)malloc(sizeof(struct TreeNode));
		if (T==NULL)
		{
			printf("�޷������ڴ�");
			exit(0);
		}
		
	}
}

int main()
{
	return 0;
}