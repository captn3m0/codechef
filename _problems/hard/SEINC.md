---
category_name: hard
problem_code: SEINC
problem_name: 'Sereja and Subsegment Increasings'
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
problem_tester: xcwgf666
date_added: 11-03-2014
tags:
    - greedy
    - may14
    - medium
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEINC'
time:
    view_start_date: 1399887000
    submit_start_date: 1399887000
    visible_start_date: 1399887000
    end_date: 1735669800
    current: 1493556839
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/MAY14/mandarin/SEINC.pdf) and [Russian](http://www.codechef.com/download/translated/MAY14/russian/SEINC.pdf).

Sereja has an array **A** that contains **n** integers: **A1, A2, ..., An**.
Sereja also has an array **B** that contains **n** integers **B1, B2, ..., Bn**.
In a single step Sereja can choose two indexes **i** and **j** **(1 &lt;= i &lt;= j &lt;= n)** , and increase all the elements of **A** with indices between **i** and **j** inclusively by one, modulo 4.
In other words, we make **Ap** equal to **(Ap + 1) modulo 4** if **p** is an integer from the range \[**i**; **j**\].

Now Sereja is interested in the following question: what is the mininal number of steps necessary in order to make the array **A** equal to the array **B**.

### Input

The first line contains an integer **T** - the number of the testcases. Then, **T** tests follow. 

The first line of each testcase contains the integer **n**. 

The next line conatins **n** single space separated integers - **A1, A2, ..., An**. 

The next line conatin **n** single space separated integers - **B1, B2, ..., Bn**.

### Output

For each testcase output an answer - the mininal number of steps necessary.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **n** ≤ **105**
- 0 ≤ **Ai, Bi** ≤ **3**

### Example

<pre><b>Input:</b>
1
5
2 1 3 0 3
2 2 0 1 0

<b>Output:</b>
1

</pre>