---
{"category_name":"medium","problem_code":"CHAQOT","problem_name":"Chef and Queries on a Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"kefaa","problem_tester":null,"date_added":"20-07-2018","tags":{"0":"cook86","1":"dynamic","2":"hard","3":"kefaa","4":"lca","5":"persistence","6":"segment"},"editorial_url":"https://discuss.codechef.com/problems/CHAQOT","time":{"view_start_date":1532284205,"submit_start_date":1532284205,"visible_start_date":1532284205,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK96/mandarin/CHAQOT.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK96/russian/CHAQOT.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK96/vietnamese/CHAQOT.pdf" target="_blank">Vietnamese</a> as well.</h3>

Chef has a tree with $N$ nodes numbered $1$ through $N$. Each node of the tree has a weight; let's denote the weight of node $v$ by $a_v$.

Chef should answer $Q$ queries. Each query is described by an integer $r$ and a list of $k$ nodes $u_1, u_2, \dots, u_k$. In each query, let $S$ be the connected subgraph of the tree (i.e. a subtree) which contains the nodes $u_1, u_2, \dots, u_k$ and has the minimum possible size (it can be proven that these conditions uniquely define $S$). The answer to a query is $\mathrm{min}_{u \in S}(|a_u - r|)$.

Help Chef and answer all the queries. Note the special format of the input, which is intended to ensure you can only know each query (except the first) after answering the previous query.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $a_1, a_2, \dots, a_N$.
- Each of the following $N-1$ lines contains two space-separated integers $x$ and $y$ denoting an edge between nodes $x$ and $y$.
- The following $Q$ lines describe queries. Each of these lines contains two space-separated integers $r'$ and $k$, followed by a space and $k$ space-separated integers $u_1', u_2', \dots, u_k'$. Let's denote the answer to the previous query by $ans$ ($ans=0$ if this is the first query). The values of $r$ and $u_1, u_2, \dots, u_k$ for this query can be computed as follows:
    - $r = r' \oplus ans$
    - $u_i = u_i' \oplus ans$ for each valid $i$

### Output
For each query, print a single line containing one integer — the answer to this query.

### Constraints 
- $1 \le T \le 5$
- $2 \le N, Q \le 10^5$
- $1 \le a_i \le 10^9$ for each valid $i$
- $1 \le r \le 10^9$
- $1 \le x, y \le N$
- the graph described on the input is a tree
- in each query, $u_1, u_2, \dots, u_k$ are pairwise distinct
- the sum of $k$ for each test case does not exceed $3 \cdot 10^5$

### Example Input
```
1
5 7
1 2 3 4 5
1 2
2 3
2 4
1 5
1 2 4 5
2 2 4 5
3 2 4 5
5 2 5 4
5 2 4 5
5 1 2
103 3 2 1 6
```

### Example Output
```
0
0
1
0
0
3
95
```

### Explanation
**Example case 1:** The decoded queries are
```
1 2 4 5
2 2 4 5
3 2 4 5
4 2 4 5
5 2 4 5
5 1 2
100 3 1 2 5
```
