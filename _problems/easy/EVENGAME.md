---
{"category_name":"easy","problem_code":"EVENGAME","problem_name":"Even Sum","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2\r\n1 2\r\n3\r\n1 1 2\r\n3\r\n1 2 4","output":"2\r\n1\r\n2","explanation":"***Case 1:*** Lets consider all possible choices to prove that person $2$ always has a winning chance regardless of what person $1$ does.\r\n\r\n1) Suppose person $1$ adds a positive sign to $1$, person $2$ can also add a positive sign to $2$ to get total of $3$ which is odd: $(+1) + (+2) = 3$  \r\n\r\n2) Suppose person $1$ adds a negative sign to $1$, person $2$ can add a positive sign to $2$ to get total of $1$ which is odd: $(-1) + (+2) = 1$\r\n\r\n3) Suppose person $1$ adds a positive sign to $2$, person $2$ can also add a positive sign to $1$ to get total of $3$ which is odd: $(+2) + (+1) = 3$  \r\n\r\n4) Suppose person $1$ adds a negative sign to $2$, person $2$ can add a positive sign to $1$ to get total of $-1$ which is odd: $(-2) + (+1) = -1$","isDeleted":false}}},"video_editorial_url":"https://youtu.be/R7XtpEBMnlo","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"akashbhalotia","problem_tester":"","date_added":"30-01-2021","tags":{"0":"akashbhalotia","1":"ltime92","2":"math","3":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EVENGAME","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EVENGAME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME92/hindi/EVENGAME.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME92/bengali/EVENGAME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME92/mandarin/EVENGAME.pdf), [Russian](https://www.codechef.com/download/translated/LTIME92/russian/EVENGAME.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME92/vietnamese/EVENGAME.pdf) as well.

There are $N$ integers in an array $A$. 

Two players take turns alternatively in placing signs (+ or -) before them, and then they all are added. The sign can be placed before any element of the array that has not been assigned a sign yet. All elements must be assigned a sign.

Player $1$ wins if the resulting sum is even, else player $2$ wins. Find out who shall win if they both play optimally. 

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains $2$ lines of input. 
- First line contains a single integer $N$, size of the array.
- Second line contains $N$ space separated integers -  $A_1, A_2, \ldots, A_N$, denoting the array elements.

###Output:
For each testcase, output in a single line "1", if the first person wins or "2" if the second person wins.

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N \leq 10^5$
- $1 \leq A_i \leq 10^9$

### Subtasks
**Subtask #1 (100 points):** Original constraints

###Sample Input:
```
3
2
1 2
3
1 1 2
3
1 2 4
```

###Sample Output:
```
2
1
2
```
	
###Explanation:
***Case 1:*** Lets consider all possible choices to prove that person $2$ always has a winning chance regardless of what person $1$ does.

1) Suppose person $1$ adds a positive sign to $1$, person $2$ can also add a positive sign to $2$ to get total of $3$ which is odd: $(+1) + (+2) = 3$  

2) Suppose person $1$ adds a negative sign to $1$, person $2$ can add a positive sign to $2$ to get total of $1$ which is odd: $(-1) + (+2) = 1$

3) Suppose person $1$ adds a positive sign to $2$, person $2$ can also add a positive sign to $1$ to get total of $3$ which is odd: $(+2) + (+1) = 3$  

4) Suppose person $1$ adds a negative sign to $2$, person $2$ can add a positive sign to $1$ to get total of $-1$ which is odd: $(-2) + (+1) = -1$


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>