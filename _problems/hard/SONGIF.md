---
{"category_name":"hard","problem_code":"SONGIF","problem_name":"Sonya and Gifts","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"smelskiy","problem_tester":null,"date_added":"27-04-2019","tags":{"0":"smelskiy"},"time":{"view_start_date":1557739980,"submit_start_date":1557739980,"visible_start_date":1557739980,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/MAY19/hindi/SONGIF.pdf), [Bengali](http://www.codechef.com/download/translated/MAY19/bengali/SONGIF.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/MAY19/mandarin/SONGIF.pdf), [Russian](http://www.codechef.com/download/translated/MAY19/russian/SONGIF.pdf), and [Vietnamese](http://www.codechef.com/download/translated/MAY19/vietnamese/SONGIF.pdf) as well.

Sonya lives in a magical land which consists of $N$ cities (numbered $1$ through $N$) and $N - 1$ roads connecting them. In other words, the country where Sonya lives is a tree.

The country is magical because toys of an infinite number of types are made there. The types of toys are labeled by all integers and in each city, there is a toy store which sells an infinite number of toys of each type.

Some stores make better toys of some types than other stores. For each valid $i$ and each integer $j$, the *quality* of any toy with type $j$ in the store in city $i$ is $K_i \cdot j + B_i$, where $K_i$ and $B_i$ are parameters of this store.

Sonya loves to buy toys from the magical land as gifts for her friends. She knows what types of toys her friends like. Therefore, she sometimes decides that she wants to buy a toy with some type $z$, travels along the shortest path between some cities $u$ and $v$ and buys one toy with the chosen type $z$. Obviously, she wants this toy to have the maximum possible quality among all toys with this type found in stores on this path (including stores in cities $u$ and $v$), so she needs to know this maximum quality.

Also, sometimes, there are new reforms in the magical land, which change the parameters of some stores. In each reform, the shortest path between two cities $u$ and $v$ is chosen, along with two parameters $x$ and $y$. Then, for each city $c$ on this path (including $u$ and $v$), $K_c$ is increased by $x$ and $B_c$ is increased by $y$.

Your task is to process $Q$ queries of two types:
1. $u$, $v$, $x$, $y$: There is a new reform.
2. $u$, $v$, $z$: Sonya wants to know the maximum of qualities of toys with type $z$ sold on the simple path between cities $u$ and $v$.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers — the initial values of $K_1, K_2, \ldots, K_N$.
- The third line contains $N$ space-separated integers — the initial values of $B_1, B_2, \ldots, B_N$.
- Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that cities $u$ and $v$ are connected by a road.
- The next $Q$ lines describe queries.
    - Each of these lines starts with three space-separated integers $t$, $u$ and $v$, where $t$ denotes the type of the current query.
    - If $t = 1$, this is followed by a space and two space-separated integers $x$ and $y$.
    - If $t = 2$, this is followed by a space and one integer $z$.

### Output
For each query of the second type, print a single line containing one integer — the maximum possible quality of a toy Sonya can buy.

### Constraints 
- $1 \le N, Q \le 10^5$
- $1 \le u, v \le N$
- $|K_i| \le 10^8$ for each valid $i$
- $|B_i| \le 10^{16}$ for each valid $i$
- $|x| \le 10^4$
- $|y|, |z| \le 10^9$
- $1 \le t \le 2$
- the graph described on the input is a tree

### Subtasks
**Subtask #1 (11 points):** $1 \le N, Q \le 5,000$

**Subtask #2 (36 points):** each city is directly connected to at most two other cities

**Subtask #3 (53 points):** original constraints

### Example Input
```
6 6
1 2 1 3 3 -1
-1 -5 -4 6 8 -14
3 4
2 1
2 3
6 4
3 5
2 1 5 -20
1 4 5 -7 4
2 3 6 -5
2 1 3 3
1 2 4 -1 20
2 6 2 8
```

### Example Output
```
-21
30
2
23
```
