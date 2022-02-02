---
{"category_name":"medium","problem_code":"SHSPOONS","problem_name":"Shifting Spoons","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n    3\r\n    4 3 5\r\n    2\r\n    1 2","output":"2\r\n    2 1 3\r\n    3 1 5\r\n    -1","explanation":"In the first example, $A = [4, 3, 5]$.\r\n- First, choose $p= 2, q =1, x = 3$. After this operation, $A = [7, 0, 5]$.\r\n- Now, choose $p = 3, q = 1, x = 5$. Now, $A = [12, 0, 0]$ as required.\r\n\r\nIn the second example, we will never be able to shift spoons from the second pile to the first. So, we print $-1$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/85yhHWHch9A","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":"","date_added":"1-01-2021","tags":{"0":"easy","1":"greedy","2":"jtnydv25","3":"ltime92"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SHSPOONS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SHSPOONS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME92/hindi/SHSPOONS.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME92/bengali/SHSPOONS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME92/mandarin/SHSPOONS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME92/russian/SHSPOONS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME92/vietnamese/SHSPOONS.pdf) as well.

You have $N$ piles of spoons numbered $1, 2, \ldots, N$. Initially the $i$-th pile contains $A_i$ spoons. 

In a single operation, you can do the following:
- Choose three integers $p, q, x$ satisfying $1 \leq p, q \leq n$, $p \neq q$, $1 \leq x \leq A_p \leq A_q$. Shift $x$ spoons from pile $p$ to pile $q$, that is, add $x$ to $A_q$ and subtract $x$ from $A_p$.

You want to shift all spoons to pile $1$. It can be proved that, if it is possible to shift all spoons to pile $1$, then there exists a sequence of $ \leq 2n$ operations which achieves this objective. Either find such a sequence of $ \leq 2n$ operations , or claim that no such sequence exists.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- The first line of each testcase contains a single integer, $N$.
- The second line contains $N$ space separated integers, $A_1, A_2, \ldots, A_N$.

###Output:
For each testcase:
- If it is impossible to shift all spoons to the first pile, print $-1$.
- Else, first print the number of operations (say $k$, which must be $\leq 2n$) on a new line.Then, print $k$ lines. The $i$-th line should contain the $p, q$ and $x$ you chose in the $i$-th operation. If the triple $(p, q, x)$ doesn't satisfy $1 \leq p, q \leq n, p \neq q, 1 \leq x \leq A_p \leq A_q$, you get a wrong answer verdict.

###Constraints 
- $1 \leq T \leq 10^5$
- $2 \leq N \leq 10^5$
- The sum of $N$ over all testcases doesn't exceed $10^5$.
- $1 \leq A_i \leq 10^{18}$
- The total number of spoons doesn't exceed $10^{18}$

### Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input:
    2
    3
    4 3 5
    2
    1 2

###Sample Output:
    2
    2 1 3
    3 1 5
    -1

	
###Explanation:
In the first example, $A = [4, 3, 5]$.
- First, choose $p= 2, q =1, x = 3$. After this operation, $A = [7, 0, 5]$.
- Now, choose $p = 3, q = 1, x = 5$. Now, $A = [12, 0, 0]$ as required.

In the second example, we will never be able to shift spoons from the second pile to the first. So, we print $-1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>