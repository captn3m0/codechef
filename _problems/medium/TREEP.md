---
category_name: medium
problem_code: TREEP
problem_name: 'Period on tree'
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
max_timelimit: '1 - 4'
source_sizelimit: '50000'
problem_author: tehnar
problem_tester: iscsi
date_added: 22-09-2015
tags:
    - bit
    - decomposition
    - fenwick
    - hashing
    - lca
    - medium
    - nov15
    - tehnar
editorial_url: 'http://discuss.codechef.com/problems/TREEP'
time:
    view_start_date: 1447666200
    submit_start_date: 1447666200
    visible_start_date: 1447666200
    end_date: 1735669800
    current: 1493557949
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV15/mandarin/TREEP.pdf), [Russian](http://www.codechef.com/download/translated/NOV15/russian/TREEP.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV15/vietnamese/TREEP.pdf) as well.

You are given an undirected tree of **N** vertices, each of which edges is marked with some lowercase Latin letter between **a** and **z**.

It's easy to notice that, if you select some distinct vertices **u** and **v** and write down a sequence of characters on the shortest path from **u** to **v**, you will get a lowercase string corresponding to this path.

Let's call any string **t** a period of some string **s** if **s** can be obtained by concatenating the string **t** to itself one or more times.

Your task is to process, on a given tree, the following two types of queries:

- **1 u v** - output the length of the **shortest** period of the string corresponding to the path from **u** to **v**.
- **2 u v c** - replace the character marked on the edge between **u** and **v** with the character **c**.

### Input

The first line of each test case contains a single integer **T** denoting the number of tests in input. The description of **T** test cases follows.
The first line of a test case contains an integer **N** — the number of vertices in the tree.
The next **N - 1** lines contains 2 space-separated entities: integer **ui, integer vi** and a character ci denoting the edge between **ui** and **vi** marked with character **ci** on it.
The next line contains one integer **M** denoting the number of queries.
Each of the next **M** lines contains three space-separated integers **typei, vi, ui**.
If **typei=2**, then character **ci** follows these integers.

### Output

For each query of type 1 you should output minimal period of string corresponding to this query.

### Constraints

- **1** ≤ **T** ≤ **10**
- **2** ≤ **N, M** ≤ **105**
- **ui ≠ vi**, 1 ≤ vi, ui,≤ **N**
- For each query of second type, it is guaranteed that **ui** is adjacent to **vi**
- Sum of N over all test cases in a single file will not be greater then **5\*105**
- Sum of M over all test cases in a single file will not be greater then **5\*105**

### Subtasks

_Subtask 1 (15 points):_ **N, M** ≤ **1\*104**, sum of **N ≤ 5\*104**, sum of **M ≤ 5\*104** in a single file.
_Subtask 2 (25 points):_ **N, M** ≤ **5\*104**, sum of **N ≤ 105**, sum of **M ≤ 105** in a single file.
All the queries in this subtask have the first type
_Subtask 3 (60 points):_ Original constraints

### Example

```
<b>Input:</b>
2
3
1 2 a
1 3 b
4
1 1 2
1 2 3
2 1 3 a
1 2 3
4
1 2 a
2 3 b
3 4 a
3
1 1 4
2 2 3 a
1 1 4
<b>Output:</b>
1
2
1
3
1

```
### Explanation

In first test case, period of strings "a", "aa" is "a", and period of "ab" is "ab". 
In second test case, the only period of string "aba" is "aba" itself. Note that not "ab" is not a period, as "aba" is a prefix of "abab", but is not the same.

**Since input file can be fairly large (about 15 MB), it's recommended to use fast I/O (for example, in C++, use scanf/printf instead of cin/cout).**