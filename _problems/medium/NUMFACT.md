---
category_name: medium
problem_code: NUMFACT
problem_name: 'Number of Factors'
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
problem_author: vamsi_kavala
problem_tester: Rubanenko
date_added: 7-06-2013
tags:
    - factorization
    - ltime01
    - simple
    - vamsi_kavala
editorial_url: 'http://discuss.codechef.com/problems/NUMFACT'
time:
    view_start_date: 1372581299
    submit_start_date: 1372581299
    visible_start_date: 1372581299
    end_date: 1735669800
    current: 1493557822
layout: problem
---
All submissions for this problem are available.Alice has learnt factorization recently. Bob doesn't think she has learnt it properly and hence he has decided to quiz her. Bob gives Alice a very large number and asks her to find out the number of factors of that number. To make it a little easier for her, he represents the number as a product of **N** numbers. Alice is frightened of big numbers and hence is asking you for help. Your task is simple. Given **N** numbers, you need to tell the number of distinct factors of the product of these **N** numbers.

### Input:

First line of input contains a single integer **T**, the number of test cases.

Each test starts with a line containing a single integer **N**.
 The next line consists of **N** space separated integers (**Ai**).
/>/>/>

### Output:

For each test case, output on a separate line the total number of factors of the product of given numbers.
/>

### Constraints:

<pre>
1 ≤ <b>T</b> ≤ 100
1 ≤ <b>N</b> ≤ 10
2 ≤ <b>A<sub>i</sub></b> ≤ 1000000


</pre>### Example:
**Input:**

<pre>
3
3
3 5 7
3
2 4 6
2
5 5


</pre>**Output:**
<pre>
8
10
3


</pre>### Scoring:
You will be awarded **40** points for correctly solving for **Ai** ≤ 100.

You will be awarded another **30** points for correctly solving for **Ai** ≤ 10000.

The remaining **30** points will be awarded for correctly solving for **Ai** ≤ 1000000.
/>/>/>
