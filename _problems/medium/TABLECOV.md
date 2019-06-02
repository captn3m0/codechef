---
category_name: medium
problem_code: TABLECOV
problem_name: 'Table Covering'
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
max_timelimit: '2 - 3'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: pavel1996
date_added: 27-12-2015
tags:
    - dilworth
    - dynamic
    - kostya_by
    - ltime32
    - maxflow
    - partial
editorial_url: 'http://discuss.codechef.com/problems/TABLECOV'
time:
    view_start_date: 1454229000
    submit_start_date: 1454229000
    visible_start_date: 1454229000
    end_date: 1735669800
    current: 1493557938
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME32/mandarin/TABLECOV.pdf), [Russian](http://www.codechef.com/download/translated/LTIME32/russian/TABLECOV.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME32/vietnamese/TABLECOV.pdf) as well.

Chef's friend Aayan loves Ghariyals (those long-mouthed crocodile like creatures). Chef's other friend, Mr. KG, knows about this love of Aayan's. So one day, he gives Aayan an interesting problem:

Mr. KG gives Aayan a table **A** of **N** rows and **M** columns filled with non-negative integers. The rows and colums of the table are indexed starting from 1. **A\[i\]\[j\]** denotes the **j**'th integer in the **i**'th row of **A**.

Let's consider some sequence (**i1**, **j1**), (**i2**, **j2**), ..., (**iK**, **jK**)(1 ≤ **K**) of the table cells.

A sequence of table cells is said to be a *valid Ghariyal-path* if all of the following conditions holds:

- (**i1**, **j1**) equals to (1, 1) - the top-left cell of the table
- (**iK**, **jK**) equals to (N, M) - the bottom-right cell of the table
- **it** ≤ **it + 1** for each integer **1 ≤ t < K**
- **jt** ≤ **jt + 1** for each integer **1 ≤ t < K**
- |**it + 1** - **it**| + |**jt + 1** - **jt**| = 1 for each integer **1 ≤ t < K**

One can easily prove that the length of any valid Ghariyal-path is exactly **N + M - 1** cells. It's also easy to prove that any valid Ghariyal-path contains any of the table cells at most once.

Mr. KG asked Aayan to cover the given table with valid Ghariyal-paths. To be precise, his task is to find the minimal number of valid Ghariyal-paths such that for any table cell with coordinates (**i**, **j**) the following condition is satisfied: at least **A\[i\]\[j\]** valid Ghariyal-paths contain the (**i**, **j**)-cell.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two integers **N** and **M**. The next **N** lines contain **M** non-negative integers each denoting the given table **A**.

### Output

For each test case, output a single line containing the minimal number of valid Ghariyal-paths to cover the table as described above.

### Constraints

- 1 ≤ **T** ≤ 10
- 0 ≤ **A\[i\]\[j\]** ≤ 1000
- Subtask 1(20 points): 1 ≤ **N** ≤ 20
- Subtask 2(30 points): 1 ≤ **N** ≤ 100
- Subtask 3(50 points): 1 ≤ **N** ≤ 1000

### Note

The first test of the first subtask is the example test. It's made for you to make sure, that your solution produces the same verdict both on your machine and our server.

### Time Limits

Time limit for the first subtask is 2 s. Time limit for the second and the third subtasks is 3 s.

### Example

<pre>
<b>Input:</b>
2
5 4
1 1 1 1
1 2 1 1
1 1 3 1
1 1 1 4
1 1 1 1
2 3
1 2 3
4 5 6

<b>Output:</b>
6
8

</pre>
### Explanation of the example test

In the first case, the following set of valid Ghariyal-paths is one of the optimal ones:

25. (1, 1), (1, 2), (1, 3), (1, 4), (2, 4), (3, 4), (4, 4), (5, 4)
26. (1, 1), (2, 1), (2, 2), (2, 3), (3, 3), (4, 3), (4, 4), (5, 4)
27. (1, 1), (2, 1), (2, 2), (2, 3), (3, 3), (4, 3), (4, 4), (5, 4)
28. (1, 1), (2, 1), (3, 1), (3, 2), (3, 3), (4, 3), (4, 4), (5, 4)
29. (1, 1), (2, 1), (3, 1), (4, 1), (4, 2), (5, 2), (5, 3), (5, 4)
30. (1, 1), (2, 1), (3, 1), (4, 1), (5, 1), (5, 2), (5, 3), (5, 4)
  In the second case, the following set of valid Ghariyal-paths is one of the optimal ones:
31. (1, 1), (1, 2), (1, 3), (2, 3)
32. (1, 1), (1, 2), (1, 3), (2, 3)
33. (1, 1), (1, 2), (1, 3), (2, 3)
34. (1, 1), (2, 1), (2, 2), (2, 3)
35. (1, 1), (2, 1), (2, 2), (2, 3)
36. (1, 1), (2, 1), (2, 2), (2, 3)
37. (1, 1), (2, 1), (2, 2), (2, 3)
38. (1, 1), (2, 1), (2, 2), (2, 3)
