---
category_name: easy
problem_code: LELEMON
problem_name: 'Little Elephant and Lemonade'
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
problem_author: witua
problem_tester: white_king
date_added: 25-04-2012
tags:
    - ad
    - aug13
    - simple
    - sorting
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LELEMON'
time:
    view_start_date: 1376299800
    submit_start_date: 1376299800
    visible_start_date: 1376299800
    end_date: 1735669800
    current: 1493558162
layout: problem
---
All submissions for this problem are available.Little Elephant likes lemonade.

When Little Elephant visits any room, he finds the bottle of the lemonade in that room that contains the greatest number of litres of lemonade and drinks it all.

There are **n** rooms (numbered from  to **n-1**), each contains **Ci** bottles. Each bottle has a volume (in litres). The first room visited by Little Elephant was **P0-th**, the second - **P1-th**, ..., the **m-th** - **Pm-1-th** room. Note that Little Elephant may visit a room more than once.

Find for Little Elephant the total volume of lemonade he has drunk.

### Input

First line of the input contains single integer **T** - the number of test cases. **T** test cases follow. First line of each test case contains pair of integers **n** and **m**. Second line contains **m** integers separated by a single space - array **P**. Next **n** lines describe bottles in each room in such format: **Ci V0 V1 ... VCi-1**, where **V** is the list of volumes (in liters) of all bottles in **i-th** room.

### Output

In **T** lines print **T** integers - the answers for the corresponding test cases.

### Constraints

1 <= **T** <= 10

1 <= **n, Ci** <= 100

1 <= **m** <= 10^4

0 <= **Pi** < n

1 <= **Vi** <= 10^5

### Example

<pre>
<b>Input:</b>
2
3 3
0 2 1
3 1 2 3
1 7
2 4 7
4 7
0 1 3 0 1 0 0
1 7
3 9 4 5
7 1 2 3 4 5 6 7
1 1

<b>Output:</b>
17
22


</pre>