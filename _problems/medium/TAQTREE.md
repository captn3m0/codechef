---
category_name: medium
problem_code: TAQTREE
problem_name: 'Queries On Tree'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: stzgd
date_added: 6-12-2014
tags:
    - dfs
    - hld
    - ltime19
    - medium
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TAQTREE'
time:
    view_start_date: 1419755400
    submit_start_date: 1419755400
    visible_start_date: 1419755400
    end_date: 1735669800
    current: 1493557976
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME19/mandarin/TAQTREE.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME19/russian/TAQTREE.pdf).

You are given a tree of **N** nodes numbered from **1** to **N**.
The **i**th edge connecting node **ui** and **vi** has a weight of **wi**.

Your target is to handle the queries of the following two types:

- **"1 i c"** : Update the weight of **i**th edge with the new weight **c**.
   (1 represents the query type).
- **"2 u v"** : Find the length of the path from node **u** to **v**. (2 represents the query type).

### Input

- The first line contains a single integer **N**.
- Each of the next **N - 1** lines contains three integers **u v w**, representing an edge
   between **u** and **v** with the weight of **w**.
- The next line contains a single integer **Q** representing the number of queries
- Each of the next **Q** lines contains three integers representing a query as described above.

### Output

- For each query of type 2, output the answer in a single line.

### Constraints

**All test:**

- **1** ≤ **i** < **N**
- **1** ≤ **u, v** ≤ **N**; **u** ≠ **v**
- **1** ≤ **w, c** ≤ **104**

**40 points:**

- **1** ≤ **N, Q** ≤ **103**

**60 points:**

- **1** ≤ **N, Q** ≤ **105**

### Example

<pre><b>Input:</b>
5
1 2 2
2 3 4
4 2 3
5 4 1
3
2 5 3
1 3 1
2 5 3

<b>Output:</b>
8
6

</pre>
### Explanation

The path from 5 to 3 is 5 -> 4 -> 2 -> 3. Initially this path has the length of 1 + 3 + 4 = 8.
After the weight of the edge connect 4 and 2 was changed to 1, the new length of the path is 1 + 1 + 4 = 6.
