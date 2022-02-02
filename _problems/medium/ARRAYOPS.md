---
{"category_name":"medium","problem_code":"ARRAYOPS","problem_name":"Array and Operations","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n\r\n1 2 3","output":"4\r\n\r\n1 3\r\n\r\n1 3\r\n\r\n2 3 1\r\n\r\n1 2","explanation":"**Test Case 1:** Initially, the array $a$ is $[1,1,1]$.\r\n\r\nBy the first operation, $a_3:=2\\cdot a_3$, so the array becomes $[1,1,2]$.\r\n\r\nBy the second operation, $a_3:=2\\cdot a_3$, so the array becomes $[1,1,4]$.\r\n\r\nBy the third operation, $a_3:=a_3-a_1$, so the array becomes $[1,1,3]$.\r\n\r\nBy the fourth operation, $a_2:=2\\cdot a_2$, so the array becomes $[1,2,3]$. Now the array is equal to $b$, as desired.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"unbelievable02","problem_tester":"","date_added":"23-03-2021","tags":{"0":"constructive","1":"cook128","2":"math","3":"medium","4":"unbelievable02"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ARRAYOPS","time":{"view_start_date":1618772404,"submit_start_date":1618772404,"visible_start_date":1618772404,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ARRAYOPS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK128/mandarin/ARRAYOPS.pdf), [Russian](https://www.codechef.com/download/translated/COOK128/russian/ARRAYOPS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK128/bengali/ARRAYOPS.pdf) as well.

Chef has an array $a_1,\ldots,a_n$ of $n$ elements. Initially, all elements of the array are equal to $1$. There are two types of operations. 

- $1$  $i$:  Take the index $i$ ($1 \le i \le n$), and multiply it by $2$ ($a_i := 2 \cdot a_i$).

- $2$ $i$ $j$:  Take two indexes $i$ and $j$ ($1 \le i, j \le n, i \ne j$), and subtract $a_j$ from $a_i$, ($a_i := a_i - a_j$).

All elements must be positive after each operation, and at most $10^9$. 

In addition, you are given an array $b$. Chef wants to make $b$ from $a$. Help Chef to reach the array $b$ in no more than $43\ 000$ operations, or determine it is impossible.

###Input:

- The first line contains a single integer $n$ - size of the array.

- The second line contains $n$ integers $b_1, \ldots b_n$ - the array $b$. 

###Output:

If it is impossible to reach $b$, print $-1$.

Otherwise, output $k$ - the number of operations ($0 \le k \le 43\ 000$). On the next $k$ lines, print the operations as described in the statement.

If there are multiple solutions, you may output any.

###Constraints 
- $1 \leq n \leq 10^3$
- $1 \leq b_i \leq 10^6$


###Sample Input:

3

1 2 3


###Sample Output:
4

1 3

1 3

2 3 1

1 2

###Explanation:

**Test Case 1:** Initially, the array $a$ is $[1,1,1]$.

By the first operation, $a_3:=2\cdot a_3$, so the array becomes $[1,1,2]$.

By the second operation, $a_3:=2\cdot a_3$, so the array becomes $[1,1,4]$.

By the third operation, $a_3:=a_3-a_1$, so the array becomes $[1,1,3]$.

By the fourth operation, $a_2:=2\cdot a_2$, so the array becomes $[1,2,3]$. Now the array is equal to $b$, as desired.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>