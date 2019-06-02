---
category_name: easy
problem_code: MAXPR
problem_name: 'Maxim and Progressions'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: null
date_added: 25-05-2013
tags:
    - combinatorics
    - dynamic
    - easy
    - june14
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/MAXPR'
time:
    view_start_date: 1402911000
    submit_start_date: 1402911000
    visible_start_date: 1402911000
    end_date: 1735669800
    current: 1493558167
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/JUNE14/mandarin/MAXPR.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE14/russian/MAXPR.pdf).

Maxim likes arithmetic progressions and does not like sequences which are not arithmetic progressions.

Now he is interested in the question: how many subsequences of his sequence **a**, consisting of **n** elements, are not arithmetic progressions.

Sequence **s\[1\], s\[2\], ..., s\[k\]** is called a subsequence of sequence **a\[1\], a\[2\], ..., a\[n\]**, if there will be such increasing sequence of indices **i\[1\], i\[2\], ..., i\[k\] (1 ≤ i\[1\] < i\[2\] < ... < i\[k\] ≤ n)**, that **a\[i\[j\]\]** = **s\[j\]**. In other words, sequence **s** can be obtained from the **a** by deleting some elements.

Sequence **s\[1\], s\[2\], ..., s\[k\]** is called an arithmetic progression, if it can be represented as :

7. **s\[1\]** = **p**, where **p** — some integer;
8. **s\[i\]** = **p + (i - 1)·q (i > 1)**, where **q** — some integer.
In particular, the empty sequence or a sequence of one element is an arithmetic progression.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains an integer **n** — the number of elements in the sequence. The next line of the test case contains **n** integer, **a\[1\], a\[2\], ..., a\[n\]** — elements of the sequence.

### Output

For each test case print the remainder of the division the answer on **1000000007 (10^9 + 7)**. All answers print on different lines.

### Constraints

 **1 ≤ T ≤ 10**

 1 ≤ n ≤ 200000

 1 ≤ a\[i\] ≤ 100

### Example

<pre><b>Input:</b>
2
1
1
3
1 2 1

<b>Output:</b>
0
1

</pre>