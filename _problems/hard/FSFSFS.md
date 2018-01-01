---
category_name: hard
problem_code: FSFSFS
problem_name: 'Factorial to Square'
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
problem_author: shangjingbo
problem_tester: null
date_added: 9-10-2015
tags:
    - cook63
    - dp
    - medium
    - shangjingbo
editorial_url: 'http://discuss.codechef.com/problems/FSFSFS'
time:
    view_start_date: 1445193000
    submit_start_date: 1445193000
    visible_start_date: 1445193000
    end_date: 1735669800
    current: 1493556973
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK63/mandarin/FSFSFS.pdf) and [Russian](http://www.codechef.com/download/translated/COOK63/russian/FSFSFS.pdf) as well.

Given a positive integer **n**, we want to remove some values between **1** and **n** such that the product of the remaining ones is a perfect square number (i.e. the product = **x** \* **x**, for some integer **x**). Meanwhile, we also want to maximize the product. Therefore, we are interested in the number of ways to remove some values to achieve the maximum perfect square product. The answer may be very large, and therefore, you just need to output its remainder by dividing **m**.

We define the product of an **empty set** as **1**.

### Input

The first line contains an integer **T** denoting the total number of test cases.

In each test case, there are two positive integers **n** and **m** in a line separated by a single space.

### Output

For each test case, output the answer per line.

### Constraints

- **1** <= **T** <= **10**
- **1** <= **n** <= **3,000**
- **1** <= **m** <= **109 + 7**

### Example

<pre><b>Input:</b>
2
2 10
5 10
<b>Output:</b>
2
2


</pre>### Explanation
In the first case, you can either remove 2 or remove both 1 and 2. In the second case, you can either remove 2, 3, 5 or remove 1, 2, 3, 5.
