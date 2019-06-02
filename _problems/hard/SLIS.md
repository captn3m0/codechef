---
category_name: hard
problem_code: SLIS
problem_name: 'Second LIS'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: shangjingbo
problem_tester: null
date_added: 9-10-2015
tags:
    - cook63
    - medium
    - segment
    - shangjingbo
editorial_url: 'http://discuss.codechef.com/problems/SLIS'
time:
    view_start_date: 1445193000
    submit_start_date: 1445193000
    visible_start_date: 1445193000
    end_date: 1735669800
    current: 1493556846
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK63/mandarin/SLIS.pdf) and [Russian](http://www.codechef.com/download/translated/COOK63/russian/SLIS.pdf) as well.

Given a sequence of **n** numbers **A**\[**1**..**n**\], a length-**k** increasing subsequence (IS) is **A**\[**i**1\], **A**\[**i**2\], ..., **A**\[**i**k\] such that both the indices **i** and values are strictly increasing. Among all possible IS's, denote the maximum length as **L**. Now we are interested in finding how many length-**(L-1)** IS's are there.

Two IS's are different if and only if their indices are different.

Since the answer could be very large, you are just required to output its remainder with **10^9 + 7**.

### Input

The first line contains an integer **T** denoting the total number of test cases.

For each test case, the first line contains a single integer **n**, and the second line contains the space-separated sequence **A**\[**1**..**n**\].

### Output

For each test case, output the answer per line.

### Constraints

- **1** <= **T** <= **10**
- **1** <= **n** <= **10^5**
- **1** <= **A**\[**i**\] <= **10^9**
- **1** < **L**

### Example

<pre><b>Input:</b>
3
3
1 1 2
5
6 8 1 2 3
5
2 3 1 6 8
<b>Output:</b>
3
4
5
</pre>
### Explanation

**Example case 1.** **L** = 2. There are 3 different length-1 IS's.
