---
{"category_name":"medium","problem_code":"RECIPES","problem_name":"Chef and Recipes","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"bciobanu","problem_tester":null,"date_added":"26-07-2018","tags":{"0":"bciobanu","1":"gauss","2":"linear","3":"medium","4":"nov18","5":"randomized","6":"taran_1407"},"time":{"view_start_date":1542015002,"submit_start_date":1542015002,"visible_start_date":1542015002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/NOV18/hindi/RECIPES.pdf) , [Vietnamese](http://www.codechef.com/download/translated/NOV18/vietnamese/RECIPES.pdf) , [Mandarin Chinese](http://www.codechef.com/download/translated/NOV18/mandarin/RECIPES.pdf) , [Russian](http://www.codechef.com/download/translated/NOV18/russian/RECIPES.pdf) and [Bengali](http://www.codechef.com/download/translated/NOV18/bengali/RECIPES.pdf) as well.

Chef is making $N$ atomic soups numbered $1$ through $N$. Each soup is either a *base* atomic soup or a composition of other atomic soups. For each valid $i$, if soup $i$ is not a base soup, one unit of this soup is made by mixing together one unit of soup $c_{i, 1}$, one unit of soup $c_{i, 2}$, and so on to one unit of soup $c_{i, P_i}$. Note that these $P_i$ soup units are not necessarily from distinct soups and that we obtain only $1$ unit of soup by mixing $P_i$ units.

Due to their structure, two units of the same base atomic soup always cancel out and vanish when mixed together. Therefore, we define the *base decomposition* of a soup as the set of all base atomic soups that need to be used an odd number of times when making the resulting soup (i.e. a base soup $b$ belongs to the base decomposition if we need to use an odd number of units of soup $b$ in total). The base decomposition of a sequence of atomic soups is the base decomposition of the soup created by mixing together one unit of each of these soups.

You should answer $Q$ queries. In each query, you are given a sequence of Chef's soups $s_1, s_2, \dots, s_K$; you must decide whether it is possible to choose two disjoint subsequences (one of which may be empty) of this sequence which have the same base decomposition. Two subsequences are disjoint if there is no index $i$ such that each subsequence contains soup $s_i$.

### Input
- The first line of the input contains a single integer $N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains an integer $P_i$; if $P_i \neq 0$, it is followed by a space and $P_i$ space-separated integers $c_{i, 1}, c_{i, 2}, \ldots, c_{i, P_i}$.
- The next line contains a single integer $Q$.
- The following $Q$ lines describe queries. Each of these lines contains an integer $K$ followed by a space and $K$ space-separated integers $s_1, s_2, \dots, s_K$.

### Output
Print a single line containing a string with length $Q$. For each valid $i$, the $i$-th character of this string should be '1' if it is possible to choose required subsequences in the $i$-th query or '0' otherwise.

### Constraints 
- $1 \le N, Q \le 2 \cdot 10^4$
- $1 \le K \le 30$
- $1 \le c_{i, j} \lt i$ for each valid $i, j$
- $1 \le s_i \le N$ for each valid $i$
- $P_1 + P_2 + \ldots + P_N \leq 5 \cdot 10^5$

### Subtasks
**Subtask #1 (13 points):**
- $1 \le N \le 100$
- $1 \le K \le 6$

**Subtask #2 (22 points):** $1 \le N \le 500$

**Subtask #3 (65 points):** original constraints

### Example Input
```
8
0
0
2 1 2
0
3 1 2 4
3 2 2 3
2 2 4
2 1 4
5
3 3 4 5
4 2 4 1 5
3 1 2 4
4 2 4 3 1
4 6 7 8 5
```

### Example Output
```
11011
```

### Explanation
Soups $1$, $2$ and $4$ are base atomic soups. The base decompositions of the other soups are:
- soup $3$: $\{1, 2\}$
- soup $5$: $\{1, 2, 4\}$
- soup $6$: $\{1, 2\}$ (two units of soup $2$ cancel out)
- soup $7$: $\{2, 4\}$
- soup $8$: $\{1, 4\}$

For the first query, we can choose subsequences $[3, 4]$ and $[5]$. The base decomposition of subsequence $\{3, 4\}$ is $\{1, 2, 4\}$, which is the same as the base decomposition of soup $5$.

For the last query, we can choose subsequences $[6, 8]$ and $[7]$. The base decomposition of each subsequence is $\{2, 4\}$, because two units of soup $1$ cancel out. You may notice that the chosen subsequences do not form a partition of all $K$ given soups, since soup $5$ was not used at all. 
