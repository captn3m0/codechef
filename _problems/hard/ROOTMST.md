---
{"category_name":"hard","problem_code":"ROOTMST","problem_name":"Rooted Minimum Spanning Tree","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4 5  \n    1 2 1  \n    1 3 1  \n    1 4 1  \n    2 3 2  \n    3 4 2","output":"5 4 3","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"26-09-2020","tags":{"0":"ildar_adm","1":"kruskal","2":"medium","3":"oct20","4":"union"},"problem_difficulty_level":"Medium-Hard","best_tag":"Union Find","editorial_url":"https://discuss.codechef.com/problems/ROOTMST","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ROOTMST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT20/hindi/ROOTMST.pdf), [Bengali](https://www.codechef.com/download/translated/OCT20/bengali/ROOTMST.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT20/mandarin/ROOTMST.pdf), [Russian](https://www.codechef.com/download/translated/OCT20/russian/ROOTMST.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT20/vietnamese/ROOTMST.pdf) as well.

You are given a weighted simple undirected graph with $N$ vertices, which are numbered from $1$ to $N$. You are guaranteed that vertex $1$ is not an articulation point (which means that even after removing the vertex $1$, the remaining graph is connected) and has an edge connecting it to each of the other $N-1$ vertices.

For each $K \in \{1, 2, \ldots, N-1\}$ you need to find the minimum weight of a spanning tree where the degree of vertex $1$ is equal to $K$.

###Input:

- The first line of input contains two integers $N, M$: the number of vertices and edges in the graph.
- Each of the next $M$ lines contains three integers $U_i, V_i, W_i$, denoting an edge between vertices $U_i$ and $V_i$ with weight $W_i$.

###Output:
Print $N-1$ integers in a single line -  the minimum weight of a spanning tree where the degree of vertex $1$ is equal to $1, 2, \ldots, N-1$.

###Constraints 
-  $2 \leq N \leq 100\,000$
- $2N - 3 \leq M \leq 200\,000$
- $1 \leq W_i \leq 200\,000$
- $1 \leq U_i < V_i \leq N$
- It is guaranteed that the graph contains no multiple edges and vertex $1$ is not an articulation point and its degree is equal to $N-1$.

###Subtasks

- 10 points : $2 \leq N \leq 5$
- 10 points : $2 \leq N \leq 500$
- 10 points : $2 \leq N \leq 10\,000$
- 70 points : $2 \leq N \leq 100\,000$

###Sample Input:
    4 5  
    1 2 1  
    1 3 1  
    1 4 1  
    2 3 2  
    3 4 2  

###Sample Output:
    5 4 3
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>