---
{"category_name":"medium","problem_code":"TREESORT","problem_name":"Sort the Leaves","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"isaf27","problem_tester":null,"date_added":"23-06-2018","tags":{"0":"bottom","1":"dfs","2":"easy","3":"greedy","4":"isaf27","5":"isaf27","6":"likecs","7":"ltime61"},"editorial_url":"https://discuss.codechef.com/problems/TREESORT","time":{"view_start_date":1530378005,"submit_start_date":1530378005,"visible_start_date":1530378005,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME61/mandarin/TREESORT.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME61/russian/TREESORT.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME61/vietnamese/TREESORT.pdf">Vietnamese</a> as well.</h3>


You are given a binary tree with $N$ vertices numbered $1$ through $N$. The root of the tree is vertex $1$. There are two types of vertices:
- non-leaf: has exactly two sons — a left son and a right son
- leaf: doesn't have sons, but it has an integer *value*

Let's denote the number of leaves by $L$. It is guaranteed that the values of all leaves are pairwise distinct numbers between $1$ and $L$ inclusive.

To each leaf, we can assign a string in the following way:
- consider the simple path $1=v_1, v_2, \dots, v_l$ from the root to leaf $v_l$
- the string $S_{v_l}$ assigned to leaf $v_l$ has length $l-1$; for each valid $i$, $S_i$ is 'L' if $v_{i+1}$ is the left son of $v_i$ or 'R' if it's the right son of $v_i$

It's clear that these strings are all pairwise distinct. Let's call the tree *leaf-sorted* if the following property holds for every pair of different leaves $a, b$: $S_a$ is lexicographically smaller than $S_b$ if and only if the value of $a$ is smaller than the value of $b$.

You are allowed to perform the following operation an arbitrary number of times (including zero): choose a non-leaf vertex and swap the edges to its left and right son. That is, the original left son of this vertex becomes the right son and the original right son becomes the left son (along with their whole subtrees).

Find the minimum number of operations needed to make the tree leaf-sorted, or determine that it's impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains two space-separated integers $l$ and $r$. If $l = -1$, vertex $i$ is a leaf with value $r$. Otherwise, $l$ and $r$ respectively denote the left and right son of vertex $i$.

### Output
For each test case, print a single line containing one integer — the minimum required number of operations or $-1$ if it's impossible to make the tree leaf-sorted.

### Constraints
- $1 \le T \le 1,000$
- $2 \le N \le 10^5$
- $1 \le r \le L$ for each leaf ($l = -1$)
- $1 \le l, r \le N$ for each non-leaf
- the values of all leaves are pairwise distinct
- the graph described on the input is a binary tree rooted at vertex $1$
- the sum of $N$ for all test cases does not exceed $2 \cdot 10^5$

### Subtasks

**Subtask #1 (30 points):**
- $1 \le T \le 100$
- $2 \le N \le 30$

**Subtask #2 (20 points):**
- $1 \le T \le 100$
- $2 \le N \le 1,000$
- the sum of $N$ for all test cases does not exceed $2,000$

**Subtask #3 (50 points):** original constraints

### Example Input
```
2
5
3 5
-1 2
2 4
-1 3
-1 1
7
2 3
4 5
6 7
-1 1
-1 4
-1 3
-1 2
```

### Example Output
```
1
-1
```

### Explanation
**Example case 1:** The leaves of this tree are vertices $2, 4, 5$, the strings assigned to them are "LL", "LR", "R" and their values are $2, 3, 1$. The strings are in increasing order and the corresponding values are not, so the tree isn't leaf-sorted. However, if we swap the left and right son of the root (vertex $1$), the strings assigned to the vertices become "RL, "RR", "L", so the tree becomes leaf-sorted.
