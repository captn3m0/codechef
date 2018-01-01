---
category_name: easy
problem_code: ALEXNUMB
problem_name: 'Magic Pairs'
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
problem_author: ballon_ziq
problem_tester: gerald
date_added: 5-11-2013
tags:
    - ballon_ziq
editorial_url: 'http://discuss.codechef.com/problems/ALEXNUMB'
time:
    view_start_date: 1387186200
    submit_start_date: 1387186200
    visible_start_date: 1387186200
    end_date: 1735669800
    current: 1493558104
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC13/mandarin/ALEXNUMB.pdf) and [Russian](http://www.codechef.com/download/translated/DEC13/russian/ALEXNUMB.pdf).

Alexandra has some distinct integer numbers **a1,a2...an**.
Count number of pairs **(i,j)** such that:

4. **1≤ i ≤ n**
5. **1≤ j ≤ n**
6. **ai < aj**
### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.The first line of each test case contains a single integer **n** denoting the number of numbers Alexandra has. The second line contains **n** space-separated distinct integers **a1**, **a2**, ..., **an** denoting these numbers.

### Output

For each test case, output a single line containing number of pairs for corresponding test case.

### Constraints

- **1** ≤ **T** ≤ **4**
- **1** ≤ **n** ≤ **100000**
- ≤ **ai** ≤ **109**
- All the ai are distinct

### Example

<pre>
2
2
2 1
3
3 1 2

</pre>**Output:**
<pre>
1
3

</pre>### Explanation
Case 1: Only one such pair: (2,1)

Case 2: 3 possible pairs: (2,1), (2,3), (3,1)

.
