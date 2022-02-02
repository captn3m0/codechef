---
{"category_name":"medium","problem_code":"PERMLIST","problem_name":"Create Permutation","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"22-02-2019","tags":{"0":"dsu","1":"kingofnumbers","2":"ltime69"},"editorial_url":"https://discuss.codechef.com/problems/PERMLIST","time":{"view_start_date":1550941202,"submit_start_date":1550941202,"visible_start_date":1550941202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME69/mandarin/PERMLIST.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME69/bengali/PERMLIST.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME69/hindi/PERMLIST.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME69/russian/PERMLIST.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME69/vietnamese/PERMLIST.pdf) as well.

Consider a list $L$ of permutations, where a *permutation with length* $x$ denotes a permutation of integers $1$ through $x$ and the elements of this list are indexed starting from $1$. Initially, the list contains a single permutation with length $1$ (i.e. $L_1 = (1)$).

You may create new permutations and append them to $L$ using operations with the following form:
- Choose two (not necessarily distinct) valid indices $i$ and $j$.
- Let's denote the permutations $L_i$ and $L_j$ by $(A_1, A_2, \ldots, A_S)$ and $(B_1, B_2, \ldots, B_R)$ respectively.
- Create a new permutation in one of the following ways (note that the permutations $L_i$ and $L_j$ in the list $L$ are not actually changed):
    1. Add $S$ to each element of $L_j$, then concatenate $L_i$ and $L_j$, i.e. the resulting permutation is $C = (A_1, A_2, \ldots, A_S, B_1 + S, B_2 + S, \ldots, B_R + S)$. For example, if $L_i = (1, 4, 2, 3)$ and $L_j = (2, 1)$, then $C = (1, 4, 2, 3, 6, 5)$.
    2. Add $R$ to each element of $L_i$, then concatenate $L_i$ and $L_j$, i.e. the resulting permutation is $C = (A_1 + R, A_2 + R, \ldots, A_S + R, B_1, B_2, \ldots, B_R)$. For example, if $L_i = (1, 4, 2, 3)$ and $L_j = (2, 1)$, then $C = (3, 6, 4, 5, 2, 1)$.
- Append $C$ to $L$, i.e. if $L$ contained $p$ permutations before this operation, then $C$ becomes permutation $L_{p+1}$.

You are given a permutation $P = (P_1, P_2, \ldots, P_N)$. You should create this permutation using at most $2N$ operations (the last of these operations must append $P$ to $L$) or determine that it is impossible. It is not required to use the minimum number of operations.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.

### Output
For each test case, if it is impossible to create the given permutation, print a single line containing the string `"NO"` (without quotes). Otherwise:
- Print a line containing the string `"YES"` (without quotes).
- Then, print a line containing a single integer $K$ — the number of operations you want to perform ($1 \le K \le 2N$).
- Then, print $K$ lines. Each of these lines should contain three space-separated integers $i$, $j$ and $w$ describing one operation ($1 \le w \le 2$), where $w=1$ or $w=2$ denotes that you want to create the new permutation in the first way or the second way (described above), respectively.

Your solution will be considered incorrect if either $i$ or $j$ is invalid for any of your operations or if at the end, the last permutation in the list is not equal to $P$.

### Constraints
- $1 \le T \le 1,000$
- $2 \le N \le 10^6$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $N \le 1,000$
- the sum of $N$ over all test cases does not exceed $5,000$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
3
3 1 2
4
3 1 4 2
```

### Example Output
```
YES
2
1 1 1
1 2 2
NO
```
