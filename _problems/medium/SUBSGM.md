---
category_name: medium
problem_code: SUBSGM
problem_name: 'Nice SubSegments'
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
problem_author: xcwgf666
problem_tester: Rubanenko‎
date_added: 7-03-2014
tags:
    - easy
    - greedy
    - ltime10
    - segment
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/SUBSGM'
time:
    view_start_date: 1396168200
    submit_start_date: 1396168200
    visible_start_date: 1396168200
    end_date: 1735669800
    current: 1493557937
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME10/mandarin/SUBSGM.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME10/russian/SUBSGM.pdf).

Let's call arrays of the form **x** **x+1** ... **x+k** nice. In other words nice arrays are arrays that form increasing arithmetic progression with the difference of one.

You are given an array of **N** integers. Let's denote it's numbers by **a1**, **a2**, ..., **aN**. You are also given **M** change queries. Every change query is a query of the form "**X** **Y**" with the meaning that the **X**-th number in it becomes equal to **Y**. We perform these queries one after another, strictly in this order. Please, calculate the length of the longest nice subarray of this array, i.e. the length of the longest segment \[**L**; **R**\] that (**aL**, **aL+1**, ... **aR**) is a nice array before all the queries and after every query.

### Input

The first line of input consists of two integers **N** and **M**, separated by a single space - the length of the array and the number of queries.

The second line of input consists of **N** integers, the **i**-th equals to **ai** - namely the **i**-th number in the array.

The following **M** lines contains the queries in the form "**X** **Y**", where **X** and **Y** are natural numbers with the meaning that the **X**-th number becomes equal to **Y**.

### Output

Output the length of the longest nice subarray of the initial array at the first line of output. Then, output **M** integers at separate lines. The **i**-th such line should contain the length of the longest nice subarray after the **i**-th changing query.

Anytime **ai** <= 2 \* **N** holds.

### Example

<pre><b>Input:</b>
5 5
1 4 3 5 2
2 2
4 4
5 5
3 7
4 8

<b>Output:</b>
1
3
4
5
2
2
</pre>
### Scoring

1 <= **N** <= 100, 1 <= **M** <= 1000 : 20 points. 

1 <= **N**, **M** <= 5000 : 26 points. 

1 <= **N**, **M** <= 105 : 54 points.
