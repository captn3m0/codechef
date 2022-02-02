---
{"category_name":"medium","problem_code":"COMPLEXG","problem_name":"A Complex Graph Problem","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":null,"date_added":"25-12-2019","tags":{"0":"kevinsogo"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1577730600,"submit_start_date":1577730600,"visible_start_date":1577730600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COMPLEXG","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
A **weighted directed graph** consists of a set $V$ of **vertices** and a collection $E$ of **edges**. Each edge $e \in E$ is an ordered triple $e = (x, y, w)$ where $x \in V$ and $y \in V$ are vertices, called the **start** and **end** vertices of $e$, respectively, and $w$ is a number called the **weight** of $e$.  

A **walk** from vertex $s$ to vertex $t$ is an *alternating* sequence of vertices and edges $(v_1, e_1, v_2, e_2, \ldots, e_{k-1}, v_k)$ (there are $k$ vertices and $k - 1$ edges in this sequence) satisfying the following:

- $k \ge 1$;
- $v_1 = s$;  
- $v_k = t$;  
- The start vertex of $e_i$ is $v_i$ (for each $i$ from $1$ to $k - 1$);  
- The end vertex of $e_i$ is $v_{i+1}$ (for each $i$ from $1$ to $k - 1$).  

You are given a special weighted directed graph $(V, E)$. The weights of the edges in this graph are **complex numbers**, that is, numbers of the form $a + bi$. Each complex weight $a + bi$ satisfies the following:

- $a$ and $b$ are integers;
- $a^2 + b^2 < 5$.  

We say that a walk from $s$ to $t$ is **real** if the **product** of the weights of the edges in it is a real number. We call this product the **cost** of the walk.  

Given two vertices $s$ and $t$, is there a **real** walk from $s$ to $t$? If so, what is the minimum possible cost of any real walk from $s$ to $t$? Note that:

- It may be possible for the costs of the real walks to be arbitrarily small; you must also detect if this is the case.  
- If $a$ and $b$ are integers for every edge weight $a + bi$, then it can be shown that the cost of any real walk is an integer. In particular, the minimum possible cost is an integer.
- The minimum possible cost may be very large, so only output it modulo $998244353$.  

The product of two complex numbers $a + bi$ and $a' + b'i$ is defined by multiplying them via the distributive property and then reducing $i^2 = -1$. For example:

$$\begin{align*}
(3 + 4i)\cdot (4 - 7i)
&= 3\cdot 4 - 3\cdot 7i + 4i\cdot 4 - 4i\cdot 7i \\
&= 12 - 21i + 16i - 28i^2 \\
&= 12 - 21i + 16i - 28(-1) \\
&= 40 - 5i. 
\end{align*}$$

We say that a complex number $a + bi$ is *real* if $b = 0$. In this case, we consider $a + bi$ equal to the real number $a$.  

For real numbers $m > 0$ and $a$, we define $(a \bmod m)$ as the unique real number $a'$ such that $0 \le a' < m$ and $a - a'$ is divisible by $m$.


### Input

The first line contains $T$, the number of test cases. The following lines describe the test cases.  

The first line of each test case contains two space-separated integers $|V|$ and $|E|$, where $|V|$ denotes the number of vertices in $V$ and $|E|$ denotes the number of edges in $E$. For simplicity, the vertices are numbered $1$ to $|V|$. 

The second line contains two space-separated integers $s$ and $t$ representing two vertices (which may be equal).

The next $|E|$ lines describe the edges. Each of the next $|E|$ lines contains four space-separated integers $x$, $y$, $a$ and $b$ denoting that $(x, y, a + bi)$ is an edge.  


### Output

For each test case, output a single line containing:

- An integer denoting the minimum possible cost of any real walk from $s$ to $t$. (This number must be reduced modulo $998244353$.)
- The string `NEGATIVE INFINITY` if the costs of the real walks are arbitrarily small.
- The string `NEGATIVE` if there is no real walk from $s$ to $t$. 


### Constraints 

- $1 \leq T \leq 10^4$  
- $1 \le |V| \le 10^5$  
- $0 \le |E| \le 10^5$  
- The sum of the $|V|$ in a single file is $\le 3\cdot 10^5$  
- The sum of the $|E|$ in a single file is $\le 3\cdot 10^5$  
- $1 \le s, t, x, y \le |V|$  
- $a^2 + b^2 < 5$  








- There may be edges with equal start and end vertices.
- There may be multiple edges between the same pair of vertices.

### Sample Input

    4
    2 2
    2 1
    1 2 1 0
    2 1 2 0
    5 5
    1 2
    1 3 1 1
    3 4 1 0
    4 5 0 1
    5 3 -1 0
    3 2 1 1
    2 2
    1 2
    1 2 -2 0
    2 1 0 -2
    4 6
    1 3
    1 2 -1 1
    1 3 1 -1
    1 4 1 1
    2 2 -1 0
    2 3 0 -1
    3 4 1 1


### Sample Output

    2
    998244351
    NEGATIVE INFINITY
    NEGATIVE


### Explanation

In the second test case, the answer is $-2$, and $-2$ reduced modulo $998244353$ is $998244351$.  

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>