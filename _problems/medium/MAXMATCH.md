---
category_name: medium
problem_code: MAXMATCH
problem_name: 'Maximum Matching'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: amitpandeykgp
problem_tester: xcwgf666
date_added: 20-04-2015
tags:
    - amitpandeykgp
    - combinatorics
    - dynamic
    - ltime24
    - medium
editorial_url: 'http://discuss.codechef.com/problems/MAXMATCH'
time:
    view_start_date: 1433061000
    submit_start_date: 1433061000
    visible_start_date: 1433061000
    end_date: 1735669800
    current: 1493557785
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME24/mandarin/MAXMATCH.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME24/russian/MAXMATCH.pdf).

Devu is very frustrated with the following problem. So, he wants your help in solving it.

Given a set:  **S = {1,2,3,....,N}**

Make a bipartite graph having partites **X** and **Y**. Partite **X** will contain all permutations of Set **S**. Partite **Y** will contain all strings of length **(N-1)** having characters **‘I’** and **‘D’** only. Note that number of vertices in partite **X** will be **N!** and **2(N-1)** in partite **Y**.

 Consider a vertex **x** in partite **X** and a vertex **y** in partite **Y**.

string **y** will be signature of permutation **x** if :

 **y\[i\] = ‘I’ => x\[i\] < x\[i+1\] && y\[i\] = ‘D’ => x\[i\] > x\[i+1\] …. for all i from 0 to N-2.**

There will be an edge between permutation **x** and string **y** if string **y** is the signature of the permutation **x** and weight of the edge will be the square of the inversion count in permutation **x**.

You need to find the maximum weighted matching in the given bipartite graph. As the answer can be very large, print it modulo **M**.

### Input

- First line of the input contains integers **T**, denoting the number of test cases and **M**.
- Next **T** lines will be containing the value of **N**

### Output

For each test case, print a single integer representing the answer of that test case.

### Constraints

- **2 ≤ M ≤ 109**

**Subtask #1: 8 points**

- **1 ≤ T ≤ 20, 2 ≤ N ≤8.**

**Subtask #2: 22 points**

- **1 ≤ T ≤ 20, 2 ≤ N ≤ 15.**

**Subtask #3: 70 points**

- **1 ≤ T ≤ 20, 2 ≤ N ≤ 2000**

### Example

<pre><b>Input:</b>
2 1007
2
3

<b>Output:</b>
1
17
</pre>### Explanation

**For N=3, graph can be shown as below:**

![Mountain View](/download/extimages/e0e32ec8077fe8a8e8a759c8d8f5d9eb.jpg)
