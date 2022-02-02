---
{"category_name":"hard","problem_code":"PDELIV","problem_name":"Pizza Delivery","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"qoo2p5","problem_tester":null,"date_added":"8-06-2018","tags":{"0":"july18","1":"medium","2":"qoo2p5"},"editorial_url":"https://discuss.codechef.com/problems/PDELIV","time":{"view_start_date":1531733410,"submit_start_date":1531733410,"visible_start_date":1531733410,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/mandarin/PDELIV.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/russian/PDELIV.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/vietnamese/PDELIV.pdf">Vietnamese</a> as well.</h3>

Flatland is a 1D country — all points in Flatland lie on one line. Everybody in Flatland loves pizza (because it's flat enough).

There are $n$ pizzerias numbered $1$ through $n$, which serve $m$ consumers numbered $1$ through $m$. Let's denote the position of the $i$-th pizzeria by $s_i$ and the position of the $i$-th consumer's home by $c_i$. No two pizzerias are located at the same position, but the position of any consumer can coincide with the position of any pizzeria or consumer.

Every consumer wants to order one pizza, spending as little money as possible. The $i$-th pizzeria sells each pizza at a certain baseline price $p_i$; delivering pizza from point $x_1$ to point $x_2$ costs an additional $(x_1 - x_2) ^ 2$. These prices are independent — even if multiple pizzas can be delivered at once, each consumer needs to pay the full price for their delivery.

Unfortunately, some consumers don't like some pizzerias, so they won't order pizza from them. Specifically, for each consumer, you are given a list of pizzerias this consumer won't order from no matter what.

For each consumer, find the amount of money they will spend for the pizza with delivery.

### Input
- The first line of the input contains two space-separated integers $n$ and $m$ denoting the number of pizzerias and the number of consumers.
- For each $i$ ($1 \le i \le n$), the $i$-th of the following $n$ lines contains two space-separated integers $s_i$ and $p_i$.
- For each $i$ ($1 \le i \le m$), the $i$-th of the following $m$ lines contains two space-separated integers $c_i$ and $k_i$, followed by a space (if $k_i \gt 0$) and $k_i$ space-separated integers $d_{i, 1}, d_{i, 2}, \dots, d_{i, k_i}$ denoting the list of pizzerias the $i$-th consumer won't order from.

### Output
Print $m$ lines. For each $i$ ($1 \le i \le m$), the $i$-th of these lines should contain a single integer — the amount of money the $i$-th consumer will spend.

### Constraints 
- $1 \le n, m \le 200,000$
- $0 \le s_i, c_i \le 10^9$ for each valid $i$
- $1 \le p_i \le 10^9$ for each valid $i$
- $0 \le k_i \le n-1$ for each valid $i$
- $0 \le \sum_{i=1}^m k_i \le 400,000$
- $1 \le d_{i, j} \le n$ for each valid $i, j$
- $s_1, s_2, \dots, s_n$ are pairwise distinct

### Subtasks
**Subtask #1 (15 points):** $n, m \le 1,000$

**Subtask #2 (35 points):** $k_i = 0$ for each valid $i$

**Subtask #3 (50 points):** original constraints 

### Example Input
```
3 3
1 7
10 5
8 9
3 0
3 1 1
6 2 1 2
```

### Example Output
```
11
34
13
```

### Explanation
The first consumer likes all the pizzerias, so they order a pizza from the first pizzeria, since it will cost the least, $7 + (3 - 1)^2 = 11$.

The second consumer doesn't like the first pizzeria, so they won't order from there, even though it's the cheapest option. Therefore, they order a pizza from the third pizzeria. It costs $9 + (8 - 3)^2 = 34$.

The third consumer likes only the third pizzeria, so they order from there. It costs $9 + (8 - 6)^2 = 13$.
