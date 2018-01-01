---
category_name: easy
problem_code: OJUMPS
problem_name: Chef-jumping
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
problem_author: berezin
problem_tester: xcwgf666
date_added: 19-02-2014
tags:
    - ad
    - berezin
    - cakewalk
    - may14
editorial_url: 'http://discuss.codechef.com/problems/OJUMPS'
time:
    view_start_date: 1399887000
    submit_start_date: 1399887000
    visible_start_date: 1399887000
    end_date: 1735669800
    current: 1493558217
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY14/mandarin/OJUMPS.pdf) and [Russian](http://www.codechef.com/download/translated/MAY14/russian/OJUMPS.pdf).

This morning Chef wants to jump a little. In a few minutes he will arrive at the point . Then he will perform a lot of jumps in such a sequence: **1**-jump, **2**-jump, **3**-jump, **1**-jump, **2**-jump, **3**-jump, **1**-jump, and so on.

**1**-jump means that if Chef is at the point **x**, he will jump to the point **x+1**.

**2**-jump means that if Chef is at the point **x**, he will jump to the point **x+2**.

**3**-jump means that if Chef is at the point **x**, he will jump to the point **x+3**.

Before the start Chef asks you: will he arrive at the point **a** after some number of jumps?

### Input

The first line contains a single integer **a** denoting the point Chef asks about.

### Output

Output "yes" without a quotes if Chef can arrive at point **a** or "no" without a quotes otherwise.

### Constraints

- ≤ **a** ≤ **1018**

### Example

<pre><b>Input:</b>
0

<b>Output:</b>
yes

<b>Input:</b>
1

<b>Output:</b>
yes

<b>Input:</b>
2

<b>Output:</b>
no

<b>Input:</b>
3

<b>Output:</b>
yes

<b>Input:</b>
6

<b>Output:</b>
yes

<b>Input:</b>
7

<b>Output:</b>
yes

<b>Input:</b>
10

<b>Output:</b>
no


</pre>### Explanation
 The first reached points are: 0 (+1) 1 (+2) 3 (+3) 6 (+1) 7, and so on.
