---
category_name: medium
problem_code: CBARS
problem_name: 'A Wonderful Chocolate'
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
problem_author: 'witalij_hq '
problem_tester: laycurse
date_added: 2-08-2012
tags:
    - matrix
    - nov12
    - simple
    - witalij_hq
editorial_url: 'http://discuss.codechef.com/problems/CBARS'
time:
    view_start_date: 1352712600
    submit_start_date: 1352712600
    visible_start_date: 1352712600
    end_date: 1735669800
    current: 1493557506
layout: problem
---
All submissions for this problem are available.A few days ago Chef decided to cook a new dish – chocolate. This must be something amazing. The idea is that chocolate bar will be divided into cells. It must be long, but narrow. To interest customers every bar must be unique. Bar will consist of cells of black or white chocolate. In addition every bar must be good looking. It means that the bar must not contain any totally white or totally black rectangle, whose width **and** length are more than 1 (Note that a bar is good if **(width > 1 and length = 1)** or **(length > 1 and width = 1)**). Now, Chef wants to know how many bars can he cook? He’s not good in computer programming, so this task is for you.
 By the way, it's not permitted to rorate bars. It means that WBB and BBW are different bars.

### Input

Input contains two integers: width *a (1 ≤ a ≤ 6)* and length *b (1 ≤ b < 263)*.

### Output

Print in output a single integer which is the answer. Answer can be a very big number, so print it modulo *109+7 (1000000007)*.

### Example

<pre>
<b>Input:</b>
2 2

<b>Output:</b>
14

<b>Input:</b>
3 3

<b>Output:</b>
322
</pre>
### Explanation

In the first sample, there are 2^(2\*2) = 16 ways coloring the chocolate in total, and the only following 2 chocolates are not good

<pre>
<b>WW</b>
<b>WW</b>
</pre>
The bar contains a totally white rectangle of length = 2 and width = 2.

<pre>
<b>BB</b>
<b>BB</b>
</pre>
The bar contains a totally black rectangle of length = 2 and width = 2.
