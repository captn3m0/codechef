---
{"category_name":"medium","problem_code":"CHEFOFR","problem_name":"Offer for Chef","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"utkarsh97","problem_tester":null,"date_added":"23-01-2019","tags":{"0":"april19","1":"binary","2":"bitmasking","3":"bitwise","4":"medium","5":"utkarsh97"},"editorial_url":"https://discuss.codechef.com/problems/CHEFOFR","time":{"view_start_date":1555320602,"submit_start_date":1555320602,"visible_start_date":1555320602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/APRIL19/hindi/CHEFOFR.pdf), [Bengali](http://www.codechef.com/download/translated/APRIL19/bengali/CHEFOFR.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL19/mandarin/CHEFOFR.pdf), [Russian](http://www.codechef.com/download/translated/APRIL19/russian/CHEFOFR.pdf), and [Vietnamese](http://www.codechef.com/download/translated/APRIL19/vietnamese/CHEFOFR.pdf) as well.

Chef is very happy today because he got an offer from Gordon Ramsay himself to work for him in London. Chef wants to prepare a delicious cake for Gordon to impress him, but he does not know that Gordon Ramsay is not easy to impress.

Gordon cut Chef's cake into $N$ small slices (numbered $1$ through $N$), placed in a row in such a way that for each valid $i$, slices $i$ and $i+1$ are adjacent. Note that slices $N$ and $1$ are **not** adjacent. For each valid $i$, the $i$-th slice has *taste* $A_i$. Gordon wants to put special toppings on some slices and then ask Chef to group all slices into $K$ clusters in such a way that the slices in each cluster form a contiguous sequence and the *sweetness* of the cake is maximum possible.

For each valid $i$, let's denote the topping on the $i$-th slice by $t_i$ ($t_i = 0$ if there is no topping on this slice); the *sweetness* of this slice is $t_i \cdot A_i$, so the sweetness of a slice without any special topping is $0$.

The sweetness of a cluster is the total (summed up) sweetness of all slices in this cluster. Let's denote the sweetnesses of all clusters by $S_1, S_2, \ldots, S_K$. The sweetness of the whole cake is computed as $S_1 * S_2 * \ldots * S_K$, where the operation $*$ is defined in the following way: for any non-negative integers $x$ and $y$ such that $x \ge y$,
$$x * y = y * x = \sum_{n=0}^{\lfloor\log_2(x)\rfloor} 2^n\left(\left\lfloor\frac{x}{2^n}\right\rfloor \bmod 2\right)\left(\left\lfloor\frac{y}{2^n}\right\rfloor \bmod 2\right) \,.$$
It can be proven that this operation is associative, i.e. $(x * y) * z = x * (y * z)$.

You should answer $Q$ queries. In each query, you are given the toppings on all slices and the number of clusters $K$. Tell Chef the maximum possible sweetness of the cake!

### Input
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The next line contains a single integer $Q$.
- For each query, two lines follow. The first of these lines contains a single integer $K$. The second line contains $N$ space-separated integers $t_1, t_2, \ldots, t_N$.

### Output
Print a single line containing one integer — the maximum sweetness.

### Constraints
- $1 \le Q \le 10$
- $1 \le N \le 10^5$
- $1 \le K \le 10^5$
- $1 \le A_i \le 10^{15}$ for each valid $i$
- $0 \le t_i \le 10$ for each valid $i$
- in each query, the number of slices with toppings does not exceed $50$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
10
15 5 26 4 3 13 5 5 27 11
2
3
2 3 1 4 7 1 5 1 1 1
1
0 0 0 0 0 0 0 1 0 0
```

### Example Output
```
33
5
```

### Explanation
For the first query, Chef can choose clusters in the following way: cluster $1$ contains slices $1$ and $2$, cluster $2$ contains slices $3$ through $7$ and cluster $3$ contains slices $8$ through $10$. The sweetness of the cake is $(15 \cdot 2 + 5 \cdot 3) * (26 \cdot 1 + 4 \cdot 4 + 3 \cdot 7 + 13 \cdot 1 + 5 \cdot 5) * (5 \cdot 1 + 27 \cdot 1 + 11 \cdot 1) = 33$.
