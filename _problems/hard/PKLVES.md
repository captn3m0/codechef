---
{"category_name":"hard","problem_code":"PKLVES","problem_name":"Chef and Elephant Tree","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wxs02wxs0103","problem_tester":null,"date_added":"25-04-2019","tags":{"0":"wxs02wxs0103"},"time":{"view_start_date":1557739980,"submit_start_date":1557739980,"visible_start_date":1557739980,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/MAY19/hindi/PKLVES.pdf), [Bengali](http://www.codechef.com/download/translated/MAY19/bengali/PKLVES.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/MAY19/mandarin/PKLVES.pdf), [Russian](http://www.codechef.com/download/translated/MAY19/russian/PKLVES.pdf), and [Vietnamese](http://www.codechef.com/download/translated/MAY19/vietnamese/PKLVES.pdf) as well.

Let's define an *elephant tree* with size $N$ as a rooted tree with $N$ vertices (numbered $1$ through $N$) such that:
- vertex $1$ is the root
- for any three vertices $u$, $v$ and $w$ such that $u \lt v \lt w$, if $w$ is a (direct or indirect) descendant of $u$, then $v$ is also a descendant of $u$

Little Chef has an elephant tree with size $N$. Today, he wants to use the leaves of this tree to decorate $Q$ dishes (a leaf is a vertex with no children). For each dish, he picks some range $[L, R]$ and he wants to uniformly randomly choose a pair of distinct leaves with labels between $L$ and $R$ inclusive. These leaves are removed and used to decorate the dish; since the tree is magical, the removed leaves grow back immediately.

You should answer $Q$ queries. In each query, Chef is decorating one dish and wants to know the expected value of the distance between the chosen leaves. It can be proved that if at least one pair of leaves can be chosen, this expected value can be expressed as a fraction $P/D$, where $P$ and $D$ are coprime positive integers and $D$ is coprime to $998,244,353$.

The answer to a query is $0$ if there is at most one leaf in the given range (no pair of leaves can be chosen) or $P \cdot D^{-1}$ modulo $998,244,353$ otherwise, where $D^{-1}$ denotes the multiplicative inverse of $D$ modulo $998,244,353$.

Little Chef is very unpredictable, so you have to answer each query immediately after he gives it to you.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The second line contains $N-1$ space-separated integers $f_2, f_3, \ldots, f_N$. For each valid $i$, $f_i$ denotes the parent of vertex $i$.
- The following $Q$ lines describe queries. Each of these lines contains two space-separated integers $x$ and $y$. Let's denote the answer to the previous query by $ans$ (if this is the first query, $ans = 0$). Then, the parameters $L$ and $R$ can be computed as $L = x \oplus ans$ and $R = y \oplus ans$.

### Output
For each query, print a single line containing one integer ― the answer to the query.

### Constraints
- $2 \le N, Q \le 300,000$
- $i \gt f_i$ for each valid $i$
- $1 \le L \le R \le N$

### Subtasks
**Subtask #1 (10 points):** $2 \le N, Q \le 300$

**Subtask #2 (10 points):** $2 \le N, Q \le 3,000$

**Subtask #3 (30 points):** the tree is a binary tree

**Subtask #4 (50 points):** original constraints

### Example Input
```
10 3
1 2 2 4 5 5 1 8 1 
2 10
598946617 598946610
598946618 598946609
```

### Example Output
```
598946616
598946616
332748122
```

### Explanation
The leaves are vertices $3$, $6$, $7$, $9$ and $10$.
- In the first query, $L = 2$, $R = 10$ and the expected value is $21/5$.
- In the second query, $L = 1$, $R = 10$ and the expected value is $21/5$ again.
- In the third query, $L = 2$, $R = 9$ and the expected value is $13/3$.
