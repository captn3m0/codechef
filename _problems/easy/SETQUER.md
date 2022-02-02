---
{"category_name":"easy","problem_code":"SETQUER","problem_name":"Set Queries","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/bhRFoRBYi58","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shaanknight","problem_tester":"","date_added":"21-11-2020","tags":{"0":"cook124","1":"easy","2":"shaanknight"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SETQUER","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SETQUER","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK124/hindi/SETQUER.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK124/mandarin/SETQUER.pdf), [Russian](https://www.codechef.com/download/translated/COOK124/russian/SETQUER.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK124/vietnamese/SETQUER.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK124/bengali/SETQUER.pdf) as well.

**This is an interactive problem.** After printing a query do not forget to output the end of the line and flush the output. You can read more about it [here](https://codeforces.com/blog/entry/63707).

L was unhappy after losing a tennis match against Light. Being super competitive, he has been looking for ways to get back at him ever since. L knows that Light is weak in graph theory, so he decided to challenge Light to solve a graph problem.

L has a hidden connected [triangle-free graph](https://en.wikipedia.org/wiki/Triangle-free_graph) with $N$ vertices (numbered $1$ through $N$). The graph does not have any [self-loops](https://en.wikipedia.org/wiki/Loop_(graph_theory)) or [parallel edges](https://en.wikipedia.org/wiki/Multiple_edges). L gives Light the degrees of all vertices and an integer $K$; for each valid $i$, let's denote the degree of the $i$-th vertex by $d_i$.

Light has to divide the vertices of the graph into two disjoint sets $S$ and $R$ such that:
- Each vertex belongs to exactly one of the sets.
- The size of the set $S$ is at least $K$.
- For each two distinct vertices $u, v \in S$, the shortest distance between $u$ and $v$ is greater than $1$.
- For each vertex $v \in R$, there is a vertex $u \in S$ such that the shortest distance between $u$ and $v$ is $1$.

To do so, Light may give L zero or more requests. There are two types of requests:
- `1 u`: Light asks L to add vertex $u$ to the set $S$. L does that and then provides Light with the list of all vertices which are neighbours of $u$.
- `2 u`: L simply provides Light with the list of all vertices which are neighbours of $u$, without adding $u$ to $S$.

Light may not give L the same request more than once, i.e. he may not add any vertex to $S$ more than once and he may only give L a request of type $2$ at most once. After Light finishes making his requests, all the vertices that Light did not ask to add to $S$ are considered to be in $R$.

L does not know that Light has been secretly practising graph theory for a year, more than eager to beat him again. Light thinks to himself: "In all things, one cannot win with thinking alone. To win, you must program." and starts laughing like an evil madman. 

You are acting as Light. The grader is acting as L. Construct a valid set $S$ (and $R$) using these requests. It is guaranteed to be always possible.

### Interaction
- First, you should read a line containing two space-separated integers $N$ and $K$.
- Next, you should read a line containing $N$ space-separated integers $d_1, d_2, \ldots, d_N$.
- Then, you may make your requests which the grader processes. To make a request:
    - Print a line containing two space-separated integers $t$ and $u$ ($1 \le t \le 2$, $1 \le u \le N$), where $t$ is the type of the request.
    - Read a line containing a single integer. If the format is invalid or you have made the same request before, this integer is $-1$; otherwise, it is $d_u$.
    - Read another line containing $d_u$ space-separated integers — the neighbours of the vertex $u$.
- Finally, when you have constructed your set $S$, print a single line containing the integer $3$.

If you read $-1$, you must immediately terminate your program to receive a Wrong Answer verdict. Otherwise, you may receive any verdict. Don't forget to flush the output after printing each line!

### Constraints
- $2 \le N \le 10^5$
- $1 \le K^2 \le N$
- $1 \le d_i \lt N$ for each valid $i$
- $d_1 + d_2 + \ldots + d_N \le 2 \cdot 10^6$
- the graph is connected

### Example
```
L (grader)      Light (you)
4 2
2 2 2 2
                1 1
2
2 3
                2 2
2
1 4
                1 4
2
2 3
                3
```

### Explanation
- L informs Light that the hidden graph has $4$ vertices, each with degree $2$, and the final size of the set $S$ must be at least $2$.
- Light asks L to add vertex $1$ to $S$. L does so and reports that vertex $1$ has two neighbours: vertices $2$ and $3$. 
- Light asks L about the neighbours of vertex $2$. L reports that this vertex has two neighbours: vertices $1$ and $4$. 
- Light asks L to add vertex $4$ to $S$. L does so and reports that vertex $4$ has two neighbours: vertices $2$ and $3$.
- Light informs L that he is done adding vertices to the set $S$.

The figure below describes L's hidden graph:

![](https://codechef_shared.s3.amazonaws.com/download/Images/COOK124/c0X3TCl.png)

Light puts vertices $1$ and $4$ in the set $S$, so vertices $2$ and $3$ are put in the set $R$. We can see that the size of set $S$ is $2 \ge K$, the distance between vertices $1$ and $4$ is $2 \gt 1$ and both vertices $2$ and $3$ are at distance $1$ from vertex $1$. Thus, Light successfully created a valid set $S$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>