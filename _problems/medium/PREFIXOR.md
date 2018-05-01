---
category_name: medium
problem_code: PREFIXOR
problem_name: 'Prefix XOR'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: gomelfk
problem_tester: null
date_added: 26-05-2017
tags:
    - gomelfk
time:
    view_start_date: 1496516400
    submit_start_date: 1496516400
    visible_start_date: 1496516400
    end_date: 1735669800
    current: 1497284435
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKEL17/mandarin/PREFIXOR.pdf), [Russian](http://www.codechef.com/download/translated/SNCKEL17/russian/PREFIXOR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKEL17/vietnamese/PREFIXOR.pdf) as well.

Given an array **A** with **n** elements. There are **q** queries of the form **(l, r)**. For each query you need to find the number of pairs **(i, j)** such that **l ≤ i ≤ j ≤ r** and and which satisfies the following condition: **Ai ≤ Ai ^ Ai + 1 ≤ ... ≤ Ai ^ Ai + 1 ^ ... ^ Aj**, where ^ is **[XOR](https://en.wikipedia.org/wiki/Exclusive_or)**.

### Input

- The first line contains one integer **n**, denoting the number of elements.
- The second line contains **n** space-separated integers: **A1, A2, ... , An** .
- The third line contains one integer **q**, denoting the number of queries.
- The i-th of the next **q** lines contains two integers: **ai, bi**. This is explained below.

You need to find the answers to the queries online, and so, the queries are encoded. To decode the queries from the data given in input, you need to perform the following transformations:

li = (**ai** + ansi-1) mod **n** + 1

ri = (**bi** + ansi-1) mod **n** + 1

Where ansi-1 is the answer for the previous query. (li, ri) is the decoded i-th query, for which you need to find and output the answer. Assume that ans0 = 0. The first query is (l1, r1).

### Output

For each query print the answer on a single line.

### Constraints

- 1 ≤ **n, q** ≤ 4 \* 105
- 0 ≤ **Ai** ≤ 109
- 0 ≤ **ai, bi** n
- 1 ≤ li ≤ ri ≤ **n** after decoding

### Example

<pre><b>Input:</b>
4 
1 2 3 4
3
1 3
0 3
3 1

<b>Output:</b>
4
6
4
</pre>