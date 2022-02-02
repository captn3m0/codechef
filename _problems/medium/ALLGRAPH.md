---
{"category_name":"medium","problem_code":"ALLGRAPH","problem_name":"Weird full graph","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3\r\n2 4 1\r\n0\r\n4\r\n1 2 3 4\r\n2\r\n1 2 1\r\n3 4 2\r\n5\r\n2 6 5 1 7\r\n5\r\n1 3 4\r\n2 4 3\r\n3 5 4\r\n4 1 2\r\n5 2 3","output":"14\r\n29\r\n72","explanation":"**Example case 1:** The lengths of the shortest paths between vertices $u$ and $v$ are $A_u$ and the answer is $2 \\cdot (2 + 4 + 1) = 14$.\r\n\r\n**Example case 2:** The lengths of the shortest paths between the vertices $u$ and $v$ are equal to $A_u$ except for the pair of vertices $(3, 4)$ for which the distance is $2$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"1 - 4.5","source_sizelimit":50000,"problem_author":"karpovich","problem_tester":"","date_added":"28-04-2021","tags":{"0":"dijkstra","1":"karpovich","2":"ltime95","3":"medium","4":"segment"},"problem_difficulty_level":"Medium-Hard","best_tag":"Dijkstra Algorithm","editorial_url":"https://discuss.codechef.com/problems/ALLGRAPH","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ALLGRAPH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a weighted directed graph of $N$ vertices and $N^2$ edges, and an array $A$ of length $N$. Initially, every ordered pair of vertices $(u, v)$ is connected by a directed edge $u \to v$ of cost $A_u$ (this also includes self-loops). 

Then there were $M$ changes in edges' weights such that the weight of the directed edge $u\to v$ is now equal to $c$. You are asked to find the sum of the lengths of the shortest paths over all ordered pairs of **distinct** vertices.

###Input
- The first line contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line of each test case contains a single integer $M$.
- The next $M$ lines contain information about the changed edges in the $u$ $v$ $c$ format.

###Output
For each test case, output the sum of the lengths of the shortest paths over all ordered pairs of vertices.

###Constraints 
- $1 \leq N \leq 10^6$
- $0 \leq M \leq 2000$
- $0\le A_i, c\le 10^6$
- $1\le u, v\le N$
- The sum of $N$ over all tests does not exceed $10^6$.
- The sum of $M$ over all tests does not exceed $2000$.
- It is guaranteed that the weight of the edge $u\to v$ was changed at most once.

###Subtasks
**Subtask #1 (8 points, time limit 1 second):** The sum $N$ for all tests does not exceed $500$.

**Subtask #2 (22 points, time limit 1 second):** Each vertex belongs to at most one changed edge (in other words, the edges do not overlap).

**Subtask #3 (30 points, time limit 1 second):** The sum $M$ for all tests does not exceed $500$.

**Subtask #4 (40 points, time limit 4.5 seconds):** original constraints.

###Sample Input
```
3
3
2 4 1
0
4
1 2 3 4
2
1 2 1
3 4 2
5
2 6 5 1 7
5
1 3 4
2 4 3
3 5 4
4 1 2
5 2 3
```

###Sample Output
```
14
29
72
```
	
###Explanation
**Example case 1:** The lengths of the shortest paths between vertices $u$ and $v$ are $A_u$ and the answer is $2 \cdot (2 + 4 + 1) = 14$.

**Example case 2:** The lengths of the shortest paths between the vertices $u$ and $v$ are equal to $A_u$ except for the pair of vertices $(3, 4)$ for which the distance is $2$. 
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>