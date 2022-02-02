---
{"category_name":"easy","problem_code":"THOUSES","problem_name":"Tree House","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4 1\r\n1 2\r\n1 3\r\n1 4\r\n8 1\r\n1 2\r\n1 3\r\n2 4\r\n2 5\r\n5 6\r\n5 7\r\n7 8","output":"7\r\n11","explanation":"In test case $1$, we will give values $1$, $2$, $3$ to the nodes $2$, $3$ and $4$ respectively.\r\nSo, the total sum will be $1 + 1 + 2 + 3 = 7$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/8A113_2d7cU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"zankanotachi","problem_tester":"","date_added":"14-04-2021","tags":{"0":"easy","1":"greedy","2":"may21","3":"zankanotachi"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/THOUSES","time":{"view_start_date":1621243802,"submit_start_date":1621243802,"visible_start_date":1621243802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=THOUSES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MAY21/bengali/THOUSES.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY21/mandarin/THOUSES.pdf), [Russian](https://www.codechef.com/download/translated/MAY21/russian/THOUSES.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY21/vietnamese/THOUSES.pdf) as well.

There is a large tree house in an unknown world. It is ruled by the great emperor KZS. It consists of $N$ nodes numbered from $1$ to $N$ in which the people of that world reside. The nodes are organized in a tree structure rooted at node $1$. You need to assign values to the nodes according to the wishes of emperor KZS which are as follows :-

- The value of node $1$ is $X$.
- All immediate children of any node have pairwise distinct values.                                   
- For every node with at least one immediate child, the $\gcd$ of the values of all immediate children is equal to the value of the node.                                                                                                                                           
- The total sum of the values of all nodes should be minimum.

The greatest common divisor $\gcd(a,b)$ of two positive integers $a$ and $b$ is equal to the largest integer $d$ such that both integers $a$ and $b$ are divisible by $d$.

Print the sum of all values, modulo $10^{9} + 7$.

###Input

- The first line contains an integer $T$, the number of test cases. $T$ testcases follow.  
- The first line of each test contains two integers $N$ and $X$.
- Each of the following $N-1$ lines contains two integers $u$ and $v$, denoting an edge between nodes $u$ and $v$.                               

###Output

- For each test case, print the sum of values, modulo $10^{9} + 7$.

###Constraints

- $1 \leq T \leq 15$                                     
- $2 \leq N \leq 3 \cdot 10^{5}$                                            
- $1 \leq X \leq 10^{9}$                                    
- $1 \leq u, v \leq N$ and $u \neq v$  
- The given edges form a tree
- The sum of $N$ over all test cases doesn't exceed $3 \cdot 10^{5}$.          

###Subtasks
**Subtask #1 (100 points):** Original Constraints          

###Sample Input
```
2
4 1
1 2
1 3
1 4
8 1
1 2
1 3
2 4
2 5
5 6
5 7
7 8
```

###Sample Output
```
7
11
```

###Explanation

In test case $1$, we will give values $1$, $2$, $3$ to the nodes $2$, $3$ and $4$ respectively.
So, the total sum will be $1 + 1 + 2 + 3 = 7$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>