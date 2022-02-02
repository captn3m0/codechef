---
category_name: medium
problem_code: LFEB14A
problem_name: 'Sereja and Two Arrays'
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
problem_author: sereja
problem_tester: null
date_added: 9-02-2014
tags:
    - fenwick
    - inversions
    - ltime09
    - maths
    - medium
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/LFEB14A'
time:
    view_start_date: 1393146000
    submit_start_date: 1393146000
    visible_start_date: 1393146000
    end_date: 1735669800
    current: 1493557747
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME09/mandarin/LFEB14A.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME09/russian/LFEB14A.pdf).

Sereja and Arrays

Sereja have an array that consist of **n** integers **a\[1\], a\[2\], ..., a\[n\]**. Also Sereja have an array that consist of m integers **b\[1\], b\[2\], ..., b\[m\]**. Sereja make next operations:

\- **random\_shuffle(b)** — shuffle elements of **b**

\- **random\_merge(a, b)** — merge array **a** and **b** to array **a**. From all possible merges Sereja chooses a random one. For better understanding you can imagine, that merged array is sequence **q** of **n+m** elements, each element if either zero or one. It contains exactly **n** zeroes and **m** ones. Then zeroes are replaced with elements of **a**, and ones are replaced with elements of **b** (without changing their relative order inside initial sequences).

Now Sereja want to know expected number of inversions in array a after described operations. Inversion is a pair **(i, j) (1 ≤ i &lt; j ≤ n + m)** such that **a\[i\] &gt; a\[j\]**.

### Input

First line contain number **T** — number of testcases. **T** tests follow. First line of each testcase contain two integers **n** and **m**. Next line contain **n** integers **a\[1\], a\[2\], ..., a\[n\]**. Next line contain **m** integers **b\[1\], b\[2\], ..., b\[m\]**.

### Output

For each testcase print expected number of inversions.

### Constraints

- **1** ≤ **T** ≤ **7**
- **1** ≤ **n,m** ≤ **10^5**
- **1** ≤ **a\[i\], b\[i\]** ≤ **10^5**

### Example

<pre><b>Input:</b>
2
5 3
1 5 4 3 2
2 6 3
10 9
10 3 6 4 8 4 1 9 7 2
9 8 3 3 10 8 2 9 2
<b>Output:</b>
13.833333333
87.818181818
</pre>
### Note

**Test #0-1 (25 points): n,m ≤ 10**

**Test #2 (25 points): n,m ≤ 1000**

**Test #3-4 (50 points): n,m ≤ 100000**
