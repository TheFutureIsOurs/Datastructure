#include <stdio.h>
#include <stdlib.h>
#include <time.h>
/************************************************************************/
/* 单链表结构                                                           */
/************************************************************************/
typedef struct Node 
{
	struct Node *next;
	int value;
}Node;

typedef struct Node *LinkList;

void initLink(LinkList *L);
void linkInsert(LinkList *L,int i,int value);
void printLink(LinkList *L);
void linkDelete(LinkList *L,int i,int *value);
void getValue(LinkList *L,int i,int *value);
void createHeadLink(LinkList *L,int n);
/************************************************************************/
/* 单链表初始化                                                         */
/************************************************************************/
void initLink(LinkList *L)
{
	*L = malloc(sizeof(Node));
	if (!(*L))
	{
		printf("内存不足");
		exit(0);
	}
	(*L)->next = NULL;
}
/************************************************************************/
/*  插入链表,在第i个元素后插入                                          */
/************************************************************************/
void linkInsert(LinkList *L,int i,int value)
{
	LinkList P,Q;
	int j=1;
	P = *L;
	while (P&&j<i)
	{
		P = P->next;
		j++;
	}
	if (!P||j<i)
	{
		printf("第%d个元素不存在",i);
		exit(0);
	}
	Q = (LinkList)malloc(sizeof(Node));
	if (!Q)
	{
		printf("内存不足");
		exit(0);
	}
	Q->value = value;
	Q->next = P->next;
	P->next = Q;
}
/************************************************************************/
/*  删除单链表中第i个元素                                               */
/************************************************************************/
void linkDelete(LinkList *L,int i,int *value)
{
	LinkList p,q;
	int j = 1;
	p = (*L)->next;
	while (p&&j<i)
	{
		q = p;
		p = p->next;
		j++;
	}
	if (!p||j<i)
	{
		printf("第%d个元素不存在",i);
		exit(0);
	}
	q->next = p->next;
	*value = p->value;
	free(p);
	
	
}
/************************************************************************/
/*  获取单链表第i个位置的值                                             */
/************************************************************************/
void getValue(LinkList *L,int i,int *value)
{
	LinkList p;
	int j=1;
	p = (*L)->next;
	while (p&&j<i)
	{
		p = p->next;
		j++;
	}
	if (!p||j<i)
	{
		printf("第%d个元素不存在",i);
		exit(0);
	}
	*value = p->value;	
}
/************************************************************************/
/* 打印单链表                                                           */
/************************************************************************/
void printLink(LinkList *L)
{
	LinkList p;
	p = (*L)->next;
	while (p)
	{
		printf("值为%d\t",p->value);
		p = p->next;
	}
	printf("\n");
}
/************************************************************************/
/*  头插法创建n个元素的单链表                                         */
/************************************************************************/
void createHeadLink(LinkList *L,int n)
{
	int i;
	LinkList p;
	*L = (LinkList)malloc(sizeof(Node));
	if (!(*L))
	{
		printf("内存不足");
		exit(0);
	}
	(*L)->next = NULL;
	srand(time(0));
	for (i=0;i<n;i++)
	{
		p = (LinkList)malloc(sizeof(Node));
		p->value = rand()%100+1;
		p->next = (*L)->next;
		(*L)->next = p;
	}
}

int main()
{
	LinkList L;
	
	/*
	int i;
	int value;
	initLink(&L);
	for (i=1;i<6;i++)
	{
		linkInsert(&L,i,i);
	}
	printLink(&L);
	getValue(&L,1,&value);
	printf("查找的值为%d\n",value);
	
	//linkDelete(&L,5,&value);
	//printLink(&L);
	//printf("删除的值为%d\n",value);
	*/
	createHeadLink(&L,5);
	printLink(&L);
	return 0;
}