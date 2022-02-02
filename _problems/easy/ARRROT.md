---
{"category_name":"easy","problem_code":"ARRROT","problem_name":"Array Rotation","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n    1 2\r\n    2\r\n    1 1","output":"6\r\n    12","explanation":"Initially, the array is $[1,2]$.\r\nAfter the first query, the array becomes $[1, 2] + f([1, 2], 1) = [1, 2] + [2, 1] = [1, 2, 2, 1]$. The total sum is $6$.\r\nAfter the second query, the array becomes $[1, 2, 2, 1] + f([1, 2, 2, 1], 1) = [1, 2, 2, 1] + [1, 1, 2, 2] = [1, 2, 2, 1, 1, 1, 2, 2]$. The total sum is $12$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Z-PjH17p9ew","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"zankanotachi","problem_tester":"","date_added":"19-04-2021","tags":{"0":"ltime95","1":"simple","2":"zankanotachi"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ARRROT","time":{"view_start_date":1619802000,"submit_start_date":1619802000,"visible_start_date":1619802000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ARRROT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Given an array $A$ of length $N$, we can define rotation as follows. If we rotate $A$ to the right, all elements move to the right one unit, and the last element moves to the beginning. That is, it becomes $[A_N, A_1,A_2,\ldots,A_{N-1}]$. Similarly if we rotate $A$ to the left, it becomes $[A_2,A_3,\ldots,A_N, A_1]$.

Given an array $A$ and an integer $x$, define $f(A,x)$ to be the array $A$ rotated by the amount $x$. If $x\ge 0$, this means we rotate it right $x$ times. If $x<0$, this means we rotate it left $|x|$ times.

You are given an array $A$ of length $N$. Then $Q$ queries follow. In each query, an integer $x$ is given. To answer the query, you should replace $A$ with $A+f(A,x)$ where $+$ denotes concatenation. After this operation, you must output the sum of all elements of $A$. Since this number can be large, output it modulo $10^9 + 7$.

Note that the queries are cumulative. When you modify $A$ to answer one query, it starts that way for the next query.

###Input

- The first line contains an integer $N$ - the size of the initial array. 
- The second line contains $N$ integers $A_1,\ldots, A_N$ - the elements of the initial array.
- The third line contains an integer $Q$ - the number of queries.
- The fourth line contains $Q$ space-separated integers $x_1,\ldots, x_Q$, where $x_i$ is the parameter of the $i$-th query.

###Output
After each query, output in a single line the the sum of all elements of the current array modulo $10^9+7$.

###Constraints 
- $ 1\leq N\leq 10^5$
- $ 1\leq Q\leq 10^5$
- $ -10^9\leq A_i\leq 10^9$ 
- $ -10^5 \leq x_i\leq 10^5$ 

###Subtasks

**Subtask #1 (100 points):** original constraints

###Sample Input
    2
    1 2
    2
    1 1


###Sample Output
    6
    12

###Explanation
Initially, the array is $[1,2]$.
After the first query, the array becomes $[1, 2] + f([1, 2], 1) = [1, 2] + [2, 1] = [1, 2, 2, 1]$. The total sum is $6$.
After the second query, the array becomes $[1, 2, 2, 1] + f([1, 2, 2, 1], 1) = [1, 2, 2, 1] + [1, 1, 2, 2] = [1, 2, 2, 1, 1, 1, 2, 2]$. The total sum is $12$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>