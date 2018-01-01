---
category_name: medium
problem_code: CAKECUT
problem_name: 'Cutting Cake'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: mgch
date_added: 2-06-2016
tags:
    - bitwise
    - cook71
    - easy
    - kingofnumbers
editorial_url: 'http://discuss.codechef.com/problems/CAKECUT'
time:
    view_start_date: 1466965800
    submit_start_date: 1466965800
    visible_start_date: 1466965800
    end_date: 1735669800
    current: 1493557912
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK71/mandarin/CAKECUT.pdf), [Russian](http://www.codechef.com/download/translated/COOK71/russian/CAKECUT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK71/vietnamese/CAKECUT.pdf) as well.

Chef recently cooked a big cake that can be represented as a grid of **N** rows and **M** columns, each cell can be either empty or contain a currant, Chef wants to cut out a sub-rectangle from the cake which contains even number of currants. Before cutting such a sub-rectangle, he is interested in knowing how many sub-rectangles are there which contains even number of currants.

### Input

There is a single test case.

First line of the input contains two integers **N** and **M**.

Each of the next **N** lines contains a string of length **M**, **j**-th character of **i**-th string is **1** if the corresponding cell contains a currant otherwise it's 0.

### Output

Output a single integer, the number of sub rectangles which contains even number of currants.

### Constraints

- **1** ≤ **N, M** ≤ **1500**

### Example 1

<pre><b>Input:</b>
<tt>2 2
01
10
</tt>
<b>Output:</b>
<tt>3</tt>

</pre>### Example 2
<pre>
<b>Input:</b>
<tt>3 4
1010
0101
1110
</tt>
<b>Output:</b>
<tt>26</tt>

</pre>