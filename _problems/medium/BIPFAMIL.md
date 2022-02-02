---
{"category_name":"medium","problem_code":"BIPFAMIL","problem_name":"A Family of Bipartite Graphs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY"},"max_timelimit":3,"source_sizelimit":10000,"problem_author":"admin2","problem_tester":null,"date_added":"18-10-2018","tags":{"0":"admin2"},"time":{"view_start_date":1540314000,"submit_start_date":1540314000,"visible_start_date":1540314000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>In this problem, we study about Range Graphs - a special family of bipartite graphs. A bipartite graph with $n$ vertices on the left part (numbered from 1 to $n$) and $m$ on the right part (numbered from $n+1$ to $n + m$), is said to be a Range Graph, if each vertex on the left satisfies the following property - the numbers of its set of neighbors should form a consecutive range/segment on the right.

For example, suppose $n$ = 10 and $m$ = 13. Then the vertices on the left are {1, 2, ..., 10} and the ones on the right are {11, 12, ..., 23}. Now, suppose the neighbors of vertex 7 were {12, 14, 15, 19}, then this would not be a Range Graph, because they aren't consecutive numbers. So for it to be a Range Graph, the neighbors could potentially be, say, {12, 13, 14, 15}.

Your task is to find the total number of **connected** Range Graphs which have $n$ vertices on left and $m$ on the right. Output your answer modulo $10^9 + 7$. 

Note that two Range Graphs are considered to be different if there are two vertices i and j such that one of the graphs has an edge between them, but the other graph doesn't. In other words, the edge set should be different. A graph is said to be connected if every vertex is reachable from every other vertex through some sequence of edges.

**Note: The source limit (ie. the size of your program file) for this problem is lower than usual. It is 10 KB.**

###Input
- The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows.
- The only line of each test case contains two space-separated integers $n, m$. 

###Output:
For each test case, output an integer corresponding to the answer of the problem. 

###Constraints
- $1 \leq T \leq 10^5$
- $1 \leq n, m \leq 2500$
- $1 \leq n * m \leq 2500$

###Sample Input:
```
2
1 2
2 2
```

###Sample Output:
```
1
5
```

###Explanation
**Example 1**: There is only one possible connected Range Graph with one vertex on the left and two vertices on the right. It will have an edge between vertices 1 and 2, and also between vertices 1 and 3.

**Example 2** Here are the five possible connected Range Graphs with 2 vertices on left and right:

<img height="350" src="https://codechef_shared.s3.amazonaws.com/download/ACMINO18/BIPFAMIL/1.png"/>