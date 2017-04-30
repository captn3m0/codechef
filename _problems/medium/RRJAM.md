---
category_name: medium
problem_code: RRJAM
problem_name: Jam
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
problem_author: Rubanenko
problem_tester: tuananh93
date_added: 7-09-2014
tags:
    - Rubanenko
    - cook53
    - hard
    - sqrt
editorial_url: 'http://discuss.codechef.com/problems/RRJAM'
time:
    view_start_date: 1419186758
    submit_start_date: 1419186758
    visible_start_date: 1419186758
    end_date: 1735669800
    current: 1493557891
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK53/mandarin/RRJAM.pdf) and [Russian](http://www.codechef.com/download/translated/COOK53/russian/RRJAM.pdf) as well.

Carlson has **N** jars of jam. They are numbered from **1** to **N** while **ith** jar contains **Ai**
units of jam. Carslon believes that **ith** jar should contain at least **Bi** units of jam. Unfourtunetly, it happens that **Ai** is less than **Bi**. To fix this issue Carlson adds jam by doing **M** operations. Each operation is defined by four numbers **l**, **r**, **x** and **y**. It means that Carlson adds **x** units of jam to the **lth**, **x + y** units of jam to the **(l + 1)th** jar, **x + 2y** units of jam to the **(l + 2)th** jar,..., **x + (r - l)y** units of jam to the **rth** jar. After it, Carlson would like to know for each jar **i** when it starts to contain at least **Bi** units of jam, i.e. the minimal number of adding operation that **ith** jar contained less than **Bi** units of jam before it, but then started to contain at least **Bi** units of jam after the operation was applied. Have a look at the examples for better understanding.

### Input

The first line of input contains single integer number **N**. Following line contains **N** numbers **Ai** — initial amount of jam in each jar. The next line contains integer number **M** — number of adding operations. Then **M** lines follow describing adding operations in chronological order. Every operation is defined by four numbers **l**, **r**, **x** and **y**.

### Output

You should output the answer for each jar separated by space. If it already contains enough jam you should output  as the answer, in case it doesn't even after all the operations output **-1** instead.

### Constraints

**1 ≤ N ≤ 105**
**1 ≤ M ≤ 105**
**0 ≤ Ai ≤ 2\*109**
**0 ≤ Bi ≤ 2\*109**
**0 ≤ x, y ≤ 105**
**0 ≤ l ≤ r ≤ N**

### Example

```
<b>Input:</b>
5
5 4 4 2 1
7 7 4 7 7
3
1 2 2 0
2 5 1 1
3 4 2 2

<b>Output:</b>
1 2 0 3 -1



```