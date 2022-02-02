---
{"category_name":"medium","problem_code":"MATPER","problem_name":"Matchable Permutations","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"triplem5ds","problem_tester":null,"date_added":"26-02-2019","tags":{"0":"kmp","1":"march19","2":"medium","3":"meet","4":"partial","5":"taran_1407","6":"triplem5ds"},"editorial_url":"https://discuss.codechef.com/problems/MATPER","time":{"view_start_date":1552469402,"submit_start_date":1552469402,"visible_start_date":1552469402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/MAR19TST/hindi/MATPER.pdf), [Bengali](http://www.codechef.com/download/translated/MAR19TST/bengali/MATPER.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/MAR19TST/mandarin/MATPER.pdf), [Russian](http://www.codechef.com/download/translated/MAR19TST/russian/MATPER.pdf), and [Vietnamese](http://www.codechef.com/download/translated/MAR19TST/vietnamese/MATPER.pdf) as well.

Chef has a string $S$ with length $N$. He also has $M$ other strings $P_1, P_2, \ldots, P_M$, which are called *patterns*. The characters in the strings are indexed from $1$.

Chef was wondering if he could find the $M$ patterns in the string $S$ in the given order. That is, he wanted to know whether it is possible to choose $M$ ranges, denoted by $[l_i, r_i]$ for each $i$ ($1 \le i \le M$), such that $1 \le l_1 \le r_1 \lt l_2 \le r_2 \lt \ldots \lt l_M \le r_M \le N$ and for each valid $i$, the substring $S_{l_i}, S_{l_i + 1}, \ldots, S_{r_i}$ equals $P_i$.

As this problem was too easy for Chef, he decided to make a harder one. A permutation $p = (p_1, p_2, \ldots, p_M)$ of integers $1$ through $M$ is called a *matchable permutation* if Chef can reorder the $M$ patterns into $P_{p_1}, P_{p_2}, \ldots, P_{p_M}$ and then find them in $S$, in this order (in the same way as described above).

Can you help Chef find the number of matchable permutations?

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- The second line contains a single string $S$.
- $M$ lines follow. For each $i$ ($1 \le i \le M)$, the $i$-th of these lines contains a single string $P_i$. 

### Output
Print a single line containing one integer - the number of matchable permutations.

### Constraints 
- $1 \le N \le 10^5$
- $1 \le M \le 14$
- $1 \le |P_i| \le 10^5$ for each valid $i$
- $S, P_1, P_2, \ldots, P_M$ contain only lowercase English letters

### Subtasks
**Subtask #1 (10 points):** $1 \le M \le 3$

**Subtask #2 (30 points):** $1 \le N \le 1,000$

**Subtask #3 (60 points):** original constraints

### Example Input 1
```
10 3
abbabacbac
ab
ac
b
```

### Example Output 1
```
3
```

### Explanation 1
Among the $3! = 6$ possible permutations of $(1, 2, 3)$, the matchable permutations are $(1, 2, 3)$, $(3, 1, 2)$ and $(1, 3, 2)$. These correspond to permutations of patterns ("ab", "ac", "b"), ("b", "ab", "ac") and ("ab", "b", "ac") respectively. Each of them can be found in $S$ in the given order.

### Example Input 2
```
3 2
aaa
aa
aa
```

### Example Output 2
```
0
```	

### Explanation 2
We cannot match the two patterns in such a way that their ranges do not intersect.

### Example Input 3
```
4 2
aaaa
aa
aa
```

### Example Output 3
```
2
```	

### Explanation 3
The matchable permutations are $(1, 2)$ and $(2, 1)$.
