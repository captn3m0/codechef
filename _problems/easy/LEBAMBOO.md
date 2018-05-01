---
category_name: easy
problem_code: LEBAMBOO
problem_name: 'Little Elephant and Bamboo'
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
problem_tester: shangjingbo
date_added: 6-04-2012
tags:
    - ad
    - oct13
    - simple
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LEBAMBOO'
time:
    view_start_date: 1381743000
    submit_start_date: 1381743000
    visible_start_date: 1381743000
    end_date: 1735669800
    current: 1493558159
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Mandarin Chinese [here](http://www.codechef.com/download/translated/OCT13/mandarin/LEBAMBOO.pdf)

### Problem Statement

Little Elephant from Zoo of Lviv likes bamboo very much. He currently has **n** stems of bamboo, **Hi** - height of **i-th** stem of bamboo (0-based numeration).

Today inspector Andrii from World Bamboo Association is visiting the plantation. He doesn't like current situation. He wants the height of **i-th** stem to be **Di**, for each **i** from 0 to **n-1**, inclusive.

Little Elephant is going to buy some special substance. One bottle of such substance he can use to single stem of bamboo. After using substance for stem **i**, the height of **i-th** stem is decrased by **1** and the height of **j-th** stem is increased by **1** for each **j** not equal to **i**. Note that it is possible for some of the stems to have negative height, but after all transformations all stems should have positive height.

Substance is very expensive. Help Little Elephant and find the minimal number of bottles of substance required for changing current plantation to one that inspector wants. If it's impossible, print **-1**.

### Input

First line contain single integer **T** - the number of test cases. **T** test cases follow. First line of each test case contains single integer **n** - the number of stems in the plantation. Second line contains **n** integers separated by single space - starting plantation. Next line of each test case contains **n** integers - plantation that inspector Andrii requires.

### Output

In **T** lines print **T** integers - the answers for the corresponding test cases.

### Constraints

1 <= **T** <= 50

1 <= **n** <= 50

1 <= **Hi, Di** <= 50

### Example

<pre>
<b>Input:</b>
3
1
1
2
2
1 2
2 1
3
3 2 2
4 5 3


<b>Output:</b>
-1
1
5

</pre>