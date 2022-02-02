---
{"category_name":"easy","problem_code":"NTHNODE","problem_name":"Nth Node From the End","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"12-07-2021","tags":{"0":"daanish_adm"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1624690676,"submit_start_date":1624690676,"visible_start_date":1624690676,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NTHNODE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Complete the function in the code snippet, returning the value of $N^{th}$ node from the end of a singly linked list $A$, of length $L$. The function takes two arguments, head of the linked list and an integer $N$, and you are expected to return the answer in the form of an integer.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of two lines of input.
- First line contains two space separated integers $L, N$, length of the linked list and the index of the node starting from end whose value is to be determined.
- Second line contains $A_1, A_2, \ldots A_L$, value of the linked list nodes starting from the head. 

**Note:** 
- For Java language, you need to: 

Complete the function in the submit solution tab:
```
int getNthNodeFromEnd(Node head, int n){...}
```
$\ $

- For C++ language, you need to: 

Complete the function in the submit solution tab:
```
int getNthNodeFromEnd(struct Node* head, int n){...}
```
$\ $

- For Python language, you need to: 

Complete the function in the submit solution tab:
```
def getNthNodeFromEnd(head, n):
```
###Output:
The function you complete should return the required answer.

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N \leq L \leq 10^5$
- $1 \leq A_i \leq 10^9$

###Sample Input:
```
2
3 3
1 2 3
3 1
3 2 1
```

###Sample Output:
```
1
1
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>