---
category_name: hard
problem_code: SEAEQ
problem_name: 'Sereja and Equality'
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
date_added: 16-03-2014
tags:
    - dynamic
    - hard
    - july14
    - maths
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEAEQ'
time:
    view_start_date: 1405330200
    submit_start_date: 1405330200
    visible_start_date: 1405330200
    end_date: 1735669800
    current: 1493556988
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/JULY14/mandarin/SEAEQ.pdf) and [Russian](http://www.codechef.com/download/translated/JULY14/russian/SEAEQ.pdf).

Sereja call two arrays **A** and **B** with length **n** almost equal if for every **i (1 &lt;= i &lt;= n) CA(A\[i\]) = CB(B\[i\])**. **CX\[x\]** equal to number of index **j (1 &lt;=j &lt;= n)** such that **X\[j\] &lt; x**.

For two permutations **P1** and **P2** Sereja found new function **F(P1, P2)** that is equal to number of pairs **(l,r) (1 &lt;= l &lt;= r &lt;= n)** such that **P1\[l..r\]** is almost equal to **P2\[l..r\]** and array **P1\[l..r\]** contain not more then **E** inversions.

Now Sereja is insterested in next question: what is the sum **F(P1,P2)** by all possible permutations **P1, P2** from **n** elements.

### Input

First line contain integer **T** - number of testcases. **T** tests follow. The only line of each testcase contain integers **n, E**.

### Output

For each testcase output answer modulo **1000000007 (10^9+7)**.

### Constraints

- **1** ≤ **T** ≤ **10000**
- **1** ≤ **n** ≤ **500**
- **1** ≤ **E** ≤ **1000000**

### Example

<pre><b>Input:</b>
4
2 2
2 1
2 0
1 1

<b>Output:</b>
10
10
9
1

</pre>