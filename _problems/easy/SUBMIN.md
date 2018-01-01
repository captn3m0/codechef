---
category_name: easy
problem_code: SUBMIN
problem_name: 'Little Elephant and Subarrays'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: darkshadows
problem_tester: gerald
date_added: 3-01-2014
tags:
    - darkshadows
editorial_url: 'http://discuss.codechef.com/problems/SUBMIN'
time:
    view_start_date: 1392629400
    submit_start_date: 1392629400
    visible_start_date: 1392629400
    end_date: 1735669800
    current: 1493558192
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB14/mandarin/SUBMIN.pdf) and [Russian](http://www.codechef.com/download/translated/FEB14/russian/SUBMIN.pdf).

Little Elephant is playing a game with arrays. He is given an array **A0, A1, ..., AN−1** of **N** integers. And then **Q** queries are given, each containing an integer **K**. He has to tell how many subarrays satisfy the condition: the function **_foo_** returns **K** when it is applied to the subarray.
In this problem, a subarray is defined as a sequence of continuous elements **Ai, Ai+1, ..., Aj**  where **0 ≤ i ≤ j ≤ N−1**. The function **_foo_**, when applied to an array, returns the minimum of all the elements in the array.
For example, **_foo_** returns **5** when it is applied to the array **\[7, 5, 10, 7, 5, 8\]**. Please note that the subarrays **Ai, Ai+1, ..., Aj** and **Ak, Ak+1, ..., Al** are different if and only if **i ≠ k** or **j ≠ l** in this problem.

### Input

The first line of input contains **N**, denoting the size of the array. The next line contains **N** space separated integers **A0, A1, ..., AN−1**, denoting the array. Then the next line contains **Q**, denoting the number of queries. Each query consists of one integer per line, denoting **K**.

### Output

For each query, print the required number of subarrays.

### Constraints

- **1 ≤ N ≤ 50**
- **1 ≤ Ai ≤ 1000000 (106)**
- **1 ≤ Q ≤ 10**
- **1 ≤ K ≤ 1000000 (106)**

### Example

<pre><b>Input:</b>
5
4 1 2 3 4
4
3
4
6
1

<b>Output:</b>
2
2
0
8

</pre>### Explanation
**Query 1.** Only the two subarrays **\[3, 4\]** and **\[3\]** satisfy.

**Query 2.** Again only the two subarrays **\[4\]** and **\[4\]** satisfy. Please note that these subarrays (**A0** and **A4**) are considered different.

**Query 3.** No subarray satisfies.

**Query 4.** The eight subarrays **\[4, 1\]**, **\[4, 1, 2\]**, **\[4, 1, 2, 3\]**, **\[4, 1, 2, 3, 4\]**, **\[1\]**, **\[1, 2\]**, **\[1, 2, 3\]** and **\[1, 2, 3, 4\]** satisfy.
