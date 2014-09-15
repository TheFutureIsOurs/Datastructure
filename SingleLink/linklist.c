#include <stdio.h>
#include <stdlib.h>
#include <time.h>
/************************************************************************/
/* ������ṹ                                                           */
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
/* �������ʼ��                                                         */
/************************************************************************/
void initLink(LinkList *L)
{
	*L = malloc(sizeof(Node));
	if (!(*L))
	{
		printf("�ڴ治��");
		exit(0);
	}
	(*L)->next = NULL;
}
/************************************************************************/
/*  ��������,�ڵ�i��Ԫ�غ����                                          */
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
		printf("��%d��Ԫ�ز�����",i);
		exit(0);
	}
	Q = (LinkList)malloc(sizeof(Node));
	if (!Q)
	{
		printf("�ڴ治��");
		exit(0);
	}
	Q->value = value;
	Q->next = P->next;
	P->next = Q;
}
/************************************************************************/
/*  ɾ���������е�i��Ԫ��                                               */
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
		printf("��%d��Ԫ�ز�����",i);
		exit(0);
	}
	q->next = p->next;
	*value = p->value;
	free(p);
	
	
}
/************************************************************************/
/*  ��ȡ�������i��λ�õ�ֵ                                             */
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
		printf("��%d��Ԫ�ز�����",i);
		exit(0);
	}
	*value = p->value;	
}
/************************************************************************/
/* ��ӡ������                                                           */
/************************************************************************/
void printLink(LinkList *L)
{
	LinkList p;
	p = (*L)->next;
	while (p)
	{
		printf("ֵΪ%d\t",p->value);
		p = p->next;
	}
	printf("\n");
}
/************************************************************************/
/*  ͷ�巨����n��Ԫ�صĵ�����                                         */
/************************************************************************/
void createHeadLink(LinkList *L,int n)
{
	int i;
	LinkList p;
	*L = (LinkList)malloc(sizeof(Node));
	if (!(*L))
	{
		printf("�ڴ治��");
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
	printf("���ҵ�ֵΪ%d\n",value);
	
	//linkDelete(&L,5,&value);
	//printLink(&L);
	//printf("ɾ����ֵΪ%d\n",value);
	*/
	createHeadLink(&L,5);
	printLink(&L);
	return 0;
}