---
category_name: easy
problem_code: LEEXAMS
problem_name: 'Little Elephant and Exams'
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
problem_author: witua
problem_tester: xcwgf666
date_added: 10-04-2012
tags:
    - brute
    - easy
    - probability
    - sept13
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LEEXAMS'
time:
    view_start_date: 1379323800
    submit_start_date: 1379323800
    visible_start_date: 1379323800
    end_date: 1735669800
    current: 1493558162
layout: problem
---
All submissions for this problem are available.Little Elephant from the Zoo of Lviv hates exams. Since Little Elephant lives in Ukraine, he is going to take exams called 'ZNO'. Help him.

There will be **n** tickets on the table. Each ticket has a number written on it. The **i**-th ticket can be numbered **Ai** with probability **Pi** percent and with probability **100-Pi** percent it can be numbered **Bi**. It can not have any other number. A numbering of tickets on the table is correct if and only if all tickets have distinct ticket numbers.

Help Little Elephant find the probability that the numbering will be correct.

### Input

The first line of the input contains a single integer **T** - the number of test cases. **T** test cases follow. The first line of each test case contains a single integer **n** - the number of tickets on the table. **n** lines will follow. Each of these lines contains three integers: **Pi**, **Ai** and **Bi**.

### Output

Output **T** lines, each containing a single real number - answer for the corresponding test case. Rounding errors less than **10-6** will be ignored.

### Constraints

1 <= **T** <= 10

1 <= **n** <= 50

1 <= **Ai, Bi** <= 16

0 <= **Pi** <= 100

### Example

<pre>
<b>Input:</b>
2
2
50 1 2
50 2 1
3
100 1 3
47 2 1
74 3 2

<b>Output:</b>
0.500000000
0.347800000


</pre>