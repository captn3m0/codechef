---
category_name: medium
problem_code: QUEHEA
problem_name: 'Queen of Hearts'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: alei
problem_tester: kingofnumbers
date_added: 25-07-2016
tags:
    - alei
    - cook73
    - data
    - medium
    - qeahea
    - segment
editorial_url: 'https://discuss.codechef.com/questions/84223/qeahea-editorial'
time:
    view_start_date: 1471804200
    submit_start_date: 1471804200
    visible_start_date: 1471804200
    end_date: 1735669800
    current: 1493557875
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK73/mandarin/QUEHEA.pdf), [Russian](http://www.codechef.com/download/translated/COOK73/russian/QUEHEA.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK73/vietnamese/QUEHEA.pdf) as well.

Wonderland is a wonderful world inhabited by **N** strange creatures, for simplicity all creatures are numbered from **1** to **N**. Every creature has exactly one best friend (it could be himself too). Note that, the friendship relationship is not bidirectional, meaning that it might be the case person x is best friend of y, but y is not best friend of x. Besides that, there is a very intricate admiration relationship among the creatures. Every creature admires himself and to all the creatures admired by his best friend.

Wonderland is divided in many guilds, each creature belonging to exactly one guild, also each guild contains at least one creature. A guild is defined as the largest set of creatures in which if we take any two creatures **i**, **j**, then there exists a creature **k** such that both **i** and **j** admire **k**. For given best friend relationship for all persons, the guilds formed will be uniquely defined.

The queen of hearts is very angry because someone stole her tarts, so she is going to perform many executions. After the executions some of the creatures will lose his best friend, and will stop admiring all the creatures admired by his best friend, in consequence the number of guilds could change.

Alice have **Q** queries of the form **L, R**, and she asks you to determine the number of guilds after the executions if the only survivors are the creatures numbered from **L** to **R**.

### Input

The first line of the input contains two integers **N** and **Q**.

In the next line there are **N** space separated integers, the i-th integer **ai** represents the best friend of the i-th creature.

Then follows **Q** lines each one with two integers **L, R** representing one query.

### Output

For each query, output the number of guilds after the execution.

### Constraints

- **1** ≤ **N, Q** ≤ **105**
- **1** ≤ **L** ≤ **R** ≤ **N**
- **1** ≤ **ai** ≤ **N**

### Example

<pre><b>Input:</b><tt>
9 3
2 8 4 3 9 9 8 3 3
1 6
7 9
3 6
</tt>
<b>Output:</b><tt>
4
2
3</tt>
</pre>### Explanation

Initially there is just one guild.

After the executions of the first query the guilds will be **{ {1, 2}, {3, 4}, {5},{6} }**.

After the executions of the second query the guilds will be **{ {7, 8}, {9} }**.

After the executions of the third query the guilds will be **{ {3,4}, {5},{6} }**.
