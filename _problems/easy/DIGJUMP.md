---
category_name: easy
problem_code: DIGJUMP
problem_name: 'Chef and Digit Jumps'
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
problem_tester: shiplu
date_added: 12-03-2014
tags:
    - berezin
    - bfs
    - dijkstra
    - easy
    - june14
editorial_url: 'http://discuss.codechef.com/problems/DIGJUMP'
time:
    view_start_date: 1402911000
    submit_start_date: 1402911000
    visible_start_date: 1402911000
    end_date: 1735669800
    current: 1493558137
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE14/mandarin/DIGJUMP.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE14/russian/DIGJUMP.pdf).

Chef loves games! But he likes to invent his own. Now he plays game "Digit Jump". Chef has sequence of digits **S1, S2,..., SN,**. He is staying in the first digit (**S1**) and want to reach the last digit (**SN**) in the minimal number of jumps.

While staying in some digit **x** with index **i** (digit **Si**) Chef can jump into digits with indices **i - 1** (**Si-1**) and **i + 1** (**Si+1**) but he can't jump out from sequence. Or he can jump into any digit with the same value **x**.

Help Chef to find the minimal number of jumps he need to reach digit **SN** from digit **S1**.

### Input

Input contains a single line consist of string **S** of length **N**- the sequence of digits.

### Output

In a single line print single integer - the minimal number of jumps he needs.

### Constraints

- **1** ≤ **N** ≤ **10^5**
- Each symbol of **S** is a digit from 0 to **9**.

### Example

<pre><b>Input:</b>
01234567890

<b>Output:</b>
1

<b>Input:</b>
012134444444443

<b>Output:</b>
4
</pre><pre>
<p> </p>
<h3>Explanation</h3>
<p>In the first case Chef can directly jump from the first digit (it is <b>0</b>) to the last (as it is also <b>0</b>).</p>
<p>In the second case Chef should jump in such sequence (the number of digits from <b>1</b>: <b>1-2-4-5-15</b>). </p>
</pre>