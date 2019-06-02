---
category_name: hard
problem_code: WRDSUM
problem_name: 'Weird Sum'
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
max_timelimit: '1 - 7'
source_sizelimit: '50000'
problem_author: alex_2oo8
problem_tester: iscsi
date_added: 4-08-2015
tags:
    - alex_2oo8
    - biginteger
    - bignum
    - dynamic
    - feb16
    - hard
    - interpolation
editorial_url: 'http://discuss.codechef.com/problems/WRDSUM'
time:
    view_start_date: 1455528600
    submit_start_date: 1455528600
    visible_start_date: 1455528600
    end_date: 1735669800
    current: 1493556901
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB16/mandarin/WRDSUM.pdf), [Russian](http://www.codechef.com/download/translated/FEB16/russian/WRDSUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB16/vietnamese/WRDSUM.pdf) as well.

Recently, Chef Alex invented a weird function **F**.

Give an integer **n** (**n** ≥ **2**), consider the prime factorization **n = p1k1 · p2k2 · … · prkr**.
Let **g = gcd(k1, k2, … kr)** and **mi = ki / g**.
The function **F** is defined as: **F(n) = p1m1 · p2m2 · … · prmr**.

Now, Alex is interested in summing up the value of this function for the first **N** natural numbers (other than **1**, since its prime factorization is undefined). That is, he wants to evaluate the following expression for a given value of **N**: **F(2) + F(3) + … + F(N)**.

As the above sum can be extremely large, output it modulo **998244353**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. 
For each test case, the only line of input contains a single integer **N**. ### Output

For each test case, output a single line containing one integer — the above sum modulo **998244353**. ### Subtasks

- Subtask #1: **T = 103**; **100** ≤ **N** ≤ **107** (8 points)
- Subtask #2: **T = 600**; **100** ≤ **N** ≤ **109** (12 points)
- Subtask #3: **T = 1**; **100** ≤ **N** ≤ **1018** (16 points)
- Subtask #4: **T = 103**; **100** ≤ **N** ≤ **1018** (18 points)
- Subtask #5: **T = 1**; **100** ≤ **N** ≤ **10500** (20 points)
- Subtask #6: **T = 1**; **100** ≤ **N** ≤ **102016** (26 points)

### Example

<pre><b>Input:</b>
6
120
121
124
125
44761
31415926535897932384626433832795

<b>Output:</b>
6855
6866
7235
7240
2741
382417086
</pre>
### Explanation

**Example case 2.** **F(121) = 11**, thus the answer for this case is by eleven more than for the previous one. **Example case 3.** **F(122) = 122; F(123) = 123; F(124) = 124**, thus the answer for this case is **6866 + 122 + 123 + 124 = 7235**. **Example case 4.** **F(125) = 5**, thus the answer for this case is by five more than for the previous one. **Example case 5.** Here the actual sum is **998247094** that is equal to **2741** modulo **998244353**. **Example case 6.** This case corresponds to the last two subtasks, where the value of **N** doesn't fit into 64-bit integer.
