#define _CRT_SECURE_NO_WARNINGS

#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <ctype.h>
#include <conio.h>
#include <time.h>

void ch10_1(void);  void ch10_2(void);  void ch10_3(void);  

// 10장 첫번째 문제 관련 함수 선언
//     예시 int find_max(int a, int b, int c);
// 10장 두번째 문제 관련 함수 선언
//     예시 void copyarray(int from[], int to[], int n);
//          void printarray(int ary[], int n);
// 10장 세번째 문제 관련 함수 선언
//     예시 long sum(int);


int main(void)
{
	int i;
	do  {
		printf("수행하고자 하는 문제 번호 입력(1~3), 종료(0)\n  >> ");
		scanf("%d", &i);	fflush(stdin);

		switch (i) {	//문제 선택
		case  1:	 ch10_1();		printf("\n\n");		system("pause");	system("cls");		break;
		case  2:	 ch10_2();		printf("\n\n");		system("pause");	system("cls");		break;
		case  3:	 ch10_3();		printf("\n\n");		system("pause");	system("cls");		break;
		case  0:	 printf("종료되었습니다.\n");		break;
		default:	 printf("잘못입력하였습니다.\n\n"); system("pause");	system("cls");
		}
	} while (i != 0);   //사용자가 종료를 원할 때까지 반복

}

void ch10_1(void) // 10장 첫번째 문제 프로그램
{

	return;
}

void ch10_2(void) // 10장 두번째 문제 프로그램
{

	return;
}

void ch10_3(void) // 10장 세번째 문제 프로그램
{

	return;
}
