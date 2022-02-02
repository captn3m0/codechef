---
{"category_name":"easy","problem_code":"SPTREE","problem_name":"A Special Tree","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/3K1rmX7XaaY","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"losmi247","problem_tester":"","date_added":"2-03-2021","tags":{"0":"binary","1":"easy","2":"losmi247","3":"ltime95"},"problem_difficulty_level":"Easy","best_tag":"Binary Lifting","editorial_url":"https://discuss.codechef.com/problems/SPTREE","time":{"view_start_date":1619802000,"submit_start_date":1619802000,"visible_start_date":1619802000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SPTREE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a tree with $N$ nodes (numbered $1$ through $N$). There are $K$ special nodes $f_1,f_2,\ldots,f_K$ in this tree.

We define $d(p,q)$ to be the number of edges on the unique path from node $p$ to node $q$.

You are given a node $a$. For each node $b$ from $1$ to $N$, find the maximum value of $d(a,u)-d(b,u)$ where $u$ is a special node, as well as any special node $u$ for which that maximum value is attained.

###Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $K$, $a$.
- The second line contains $K$ space-separated integers $f_1,f_2,\ldots,f_K$.
- $N-1$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $u_i$ and $v_i$ denoting an edge of the tree.

###Output
For each test case, print two lines.

In the first line print $N$ space-separated integers. For each valid $i$, the $i$-th integer should be the maximum value of $d(a,u)-d(i,u)$ where $u$ is a special node.

In the second line print $N$ space-separated integers. For each valid $i$, the $i$-th integer should be any special node $u$ for which the maximum of $d(a,u)-d(i,u)$ is attained.

###Constraints 
- $1 \le T \le 200$
- $1 \le K \le N \le 2 \cdot 10^5$
- $1 \le a \le N$
- $1 \le f_i \le N$ for each valid $i$
- $f_i \neq f_j$ for each valid $i$ and $j$ such that $i \neq j$
- $1 \le u_i,v_i \le N$ for each valid $i$
- the graph described on the input is a tree 
- the sum of $N$ over all test cases does not exceed $4 \cdot 10^5$


###Subtasks

**Subtask #1 (10 points):**
- $T \le 11$
- $N \le 200$
- the sum of $N$ over all test cases does not exceed $400$

**Subtask #2 (20 points):**
- $T \le 51$
- $N \le 2000$
- the sum of $N$ over all test cases does not exceed $4000$

**Subtask #3 (30 points):** 
- It holds that $u_i=i$, $v_i=i+1$ for each valid $i$.

**Subtask #4 (40 points):** original constraints

###Sample Input
```
2
5 1 3
2
1 2
1 3
2 4
2 5
8 3 2
6 5 8
1 2
2 3
2 4
2 5
4 6
5 7
5 8
```

###Sample Output
```
1 2 0 1 1
2 2 2 2 2
-1 0 -1 1 1 2 0 2
5 5 5 6 5 6 5 8
```
	
###Explanation
**Example case 1:**  The following picture shows the tree in the first example case with special nodes in bold:

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/LTIME95/SPTREE/SPTREE_1.png">

The only special node is the node $2$ and $a=3$. Therefore, the desired maximum is $d(a,2)-d(b,2)=d(3,2)-d(b,2)=2-d(b,2)$ for each node $b$ and it is always attained for the special node $u=2$.

**Example case 2:** The following picture shows the tree in the second example case with special nodes bolded:

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/LTIME95/SPTREE/SPTREE_2.png">

The special nodes are $6$, $5$ and $8$, and $a=2$. The maximum values of $d(a,u)-d(b,u)$ ($u$ being a special node) for each $b$ are as follows:

- $b=1$: The maximum value of $d(2,u)-d(1,u)$ is $-1$ and it is achieved for $u=5$ since $d(2,5)-d(1,5)=1-2=-1$.

- $b=2$: The maximum value of $d(2,u)-d(2,u)$ is $0$ and it is achieved for $u=5$ since $d(2,5)-d(2,5)=1-1=0$.

- $b=3$: The maximum value of $d(2,u)-d(3,u)$ is $-1$ and it is achieved for $u=5$ since $d(2,5)-d(3,5)=1-2=-1$.

- $b=4$: The maximum value of $d(2,u)-d(4,u)$ is $1$ and it is achieved for $u=6$ since $d(2,6)-d(4,6)=2-1=1$.

- $b=5$: The maximum value of $d(2,u)-d(5,u)$ is $1$ and it is achieved for $u=5$ since $d(2,5)-d(5,5)=1-0=1$.

- $b=6$: The maximum value of $d(2,u)-d(6,u)$ is $2$ and it is achieved for $u=6$ since $d(2,6)-d(6,6)=2-0=2$.

- $b=7$: The maximum value of $d(2,u)-d(7,u)$ is $0$ and it is achieved for $u=5$ since $d(2,5)-d(7,5)=1-1=0$.

- $b=8$: The maximum value of $d(2,u)-d(8,u)$ is $2$ and it is achieved for $u=8$ since $d(2,8)-d(8,8)=2-0=2$.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>