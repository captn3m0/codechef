---
category_name: easy
problem_code: SANSKAR
problem_name: 'Alok-nath and His Sanskars'
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
problem_author: jay_adm
problem_tester: shiplu
date_added: 21-02-2014
tags:
    - bit
    - dec14
    - dynamic
    - easy
    - jay_adm
editorial_url: 'http://discuss.codechef.com/problems/SANSKAR'
time:
    view_start_date: 1418643259
    submit_start_date: 1418643259
    visible_start_date: 1418643259
    end_date: 1735669800
    current: 1493558185
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC14/mandarin/SANSKAR.pdf) and [Russian](http://www.codechef.com/download/translated/DEC14/russian/SANSKAR.pdf).

Alok-nath is man of equality. He needs your help to divide his “sanskars” evenly amongst all his followers. By doing this, Alok-nath can create equality amongst his followers and he'll be called a true “sanskari”.

Alok-nath has **N** sanskars, and **K** followers. Each sanskar is given a numerical value which shows its intensity.

Your task is to determine whether it is possible to allocate all the sanskars to followers in such a way that the sum of intensities of the sanskars allocated to each follower is equal. **Note :** A sanskar can be allocated to only one of the followers.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. Then **T** test cases follow. The first line of each case contains two integers **N** and **K**, with **N** denoting the number of sanskars and **K** denoting the number of followers. In the next line are **N** space separated integers denoting the intensities of each sanskar.

### Output

For each test case, output "yes" if it is possible to divide his sanskars equally amongst his followers; otherwise output "no" (without quotes).

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **21**
- **1** ≤ **K** ≤ **8**
- Subtask #1 (20 points) :  ≤ **intensity of sanskar** ≤ **10^5**
- Subtask #2 (80 points) :  ≤ **intensity of sanskar** ≤ **10^10**

### Example

<pre><b>Input:</b>
2
5 3
1 2 4 5 6
5 3
1 2 4 5 7

<b>Output:</b>
yes
no

</pre>### Explanation
In the first case, sanskars can be allocated as follows, each follower receiving a total intensity of 6: {1,5}, {2,4}, {6}.
