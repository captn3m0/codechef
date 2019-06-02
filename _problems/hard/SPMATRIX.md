---
category_name: hard
problem_code: SPMATRIX
problem_name: 'Count Special Matrices'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '0.666'
source_sizelimit: '50000'
problem_author: anton_lunyov
problem_tester: tuananh93
date_added: 21-04-2013
tags:
    - anton_lunyov
    - combinatorics
    - hard
    - june13
editorial_url: 'http://discuss.codechef.com/problems/SPMATRIX'
time:
    view_start_date: 1371462303
    submit_start_date: 1371462303
    visible_start_date: 1371460885
    end_date: 1735669800
    current: 1493556988
layout: problem
---
All submissions for this problem are available.Let **N ≥ 3** be a fixed positive integer.
 Further, let **A\[1..N\]\[1..N\]** be **N × N** integer matrix.
 The **y**-th element in the **x**-th row will be denoted as **A\[x\]\[y\]**.
 This matrix is called ***special*** if it satisfies the following conditions:/>/>/>

- **A\[x\]\[x\] = 0** for **1 ≤ x ≤ N**.
- **A\[x\]\[y\] = A\[y\]\[x\] > 0** for **1 ≤ x < y ≤ N**.
- **A\[x\]\[y\] ≤ max(A\[x\]\[z\], A\[z\]\[y\])** for **1 ≤ x, y, z ≤ N**.
- **A\[x\]\[y\] ∈ {1, 2, ..., N − 2}** for **1 ≤ x < y ≤ N**.
- For each **k ∈ {1, 2, ..., N − 2}** there exist **x, y ∈ {1, 2, ..., N}** such that **A\[x\]\[y\] = k**.

For example,

<pre>0 1 1
1 0 1
1 1 0

</pre>
is the only special matrix of order **3**.

The following matrices of order 3 are not special:

<pre>1 1 1    0 1 0    0 1 2
1 0 1    1 0 1    1 0 1
1 1 0    1 1 0    2 1 0

</pre>
The first one violates the first condition, the second one - the second condition, the third one - the third condition (as well as the fourth condition).

It can be verified that there are **13** special matrices of order **4** in all.
 The full list of special matrices of order **4** looks as follows:/>

<pre>0 1 2 2    0 2 1 2    0 2 2 2    0 1 1 2    0 2 2 1    0 2 2 1    0 2 2 2
1 0 2 2    2 0 2 2    2 0 1 2    1 0 1 2    2 0 2 2    2 0 1 2    2 0 2 1
2 2 0 2    1 2 0 2    2 1 0 2    1 1 0 2    2 2 0 2    2 1 0 2    2 2 0 2
2 2 2 0    2 2 2 0    2 2 2 0    2 2 2 0    1 2 2 0    1 2 2 0    2 1 2 0

0 2 1 2    0 1 2 1    0 2 2 2    0 1 2 2    0 2 1 1    0 2 2 2
2 0 2 1    1 0 2 1    2 0 2 2    1 0 2 2    2 0 2 2    2 0 1 1
1 2 0 2    2 2 0 2    2 2 0 1    2 2 0 1    1 2 0 1    2 1 0 1
2 1 2 0    1 1 2 0    2 2 1 0    2 2 1 0    1 2 1 0    2 1 1 0

</pre>
Your task is simple. For the given **N** count overall number of special matrices of order **N**.
 Since the answer could be extremely large output it modulo **109 + 7 = 1000000007**./>

### Input

The first line of the input contains an integer **T**, denoting the number of test cases.
 The description of **T** test cases follows.
 The only line of each test case contains a single integer **N**./>/>

### Output

For each test case output the overall number of special matrices of order **N** modulo **1000000007** on the separate line.

### Constraints

- **1** ≤ **T** ≤ **100000** (**105**)
- **3** ≤ **N** ≤ **10000000** (**107**)

### Example

<pre>
<b>Input:</b>
3
3
4
10

<b>Output:</b>
1
13
719666144
</pre>
### Explanation

Example cases 1 and 2 are explained above.
