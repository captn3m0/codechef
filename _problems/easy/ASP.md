---
category_name: easy
problem_code: ASP
problem_name: 'Almost Sorted Permutation'
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
max_timelimit: '0.2'
source_sizelimit: '50000'
problem_author: shangjingbo
problem_tester: null
date_added: 10-10-2015
tags:
    - ad
    - cook63
    - shangjingbo
    - simple
editorial_url: 'http://discuss.codechef.com/problems/ASP'
time:
    view_start_date: 1445193000
    submit_start_date: 1445193000
    visible_start_date: 1445193000
    end_date: 1735669800
    current: 1493558107
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK63/mandarin/ASP.pdf) and [Russian](http://www.codechef.com/download/translated/COOK63/russian/ASP.pdf) as well.

Given a sequence of **n** **distinct** numbers **a**\[**1**..**n**\], we want to sort them in an ascending order.

An interesting property of some sequences is that all numbers are almost at their correct position! More formally, the distance between the current position of any value is at most 1 from its correct position in a sorted order.

Now, you want to verify whether the input sequence has such a property.

Note that the time limit for this problem is 0.2 seconds. Please try to write a very efficient algorithm and implementation.

### Input

The first line contains an integer **T** denoting the total number of test cases.

For each test case, the first line contains a single integer **n**, and the second line contains **a**\[**1**..**n**\] as a single space-separated list.

### Output

For each test case, output "YES" or "NO" (without quotes) to indicate whether the input sequence has such a property.

### Constraints

- **1** <= **T** <= **10**
- **1** <= **n** <= **10^6**
- **1** <= **a**\[**i**\] <= **10^9**

### Example

<pre><b>Input:</b>
2
3
1 2 3
5
2 4 1 3 5
<b>Output:</b>
YES
NO

</pre>