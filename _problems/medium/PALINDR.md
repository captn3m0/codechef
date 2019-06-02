---
category_name: medium
problem_code: PALINDR
problem_name: 'Lucy and Palindromes'
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
max_timelimit: '1 - 2'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: Rubanenko
date_added: 14-10-2013
tags:
    - combinatorics
    - easy
    - ltime06
    - treap
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/PALINDR'
time:
    view_start_date: 1385283849
    submit_start_date: 1385283849
    visible_start_date: 1385283849
    end_date: 1735669800
    current: 1493557837
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/LTIME06/russian/PALINDR.pdf)

Lucy had recently learnt about palindromes. As you may probably know, palindrome is a string that reads the same way in the both directions, that is left-to-right or right-to-left. For example, strings "radar" and "level" are palindromes, at the same time, strings "hello" and "world" are not.

There is a string of **N** latin letters. Lucy asks you to answer the following queries:

1 **L** **R** - reverse the substring from the **L**-th to the **R**-th character (1-indexed), inclusive.

2 **L** **R** - calculate the number of distinct palindromes that can be obtained by permutting characters from the **L**-th to the **R**-th in the arbitrary order (ignoring all other characters of the string).

### Input

The first line of input consists of two space separated integers **N** and **M** - the length of the string and the number of queries.
The second line consists of **N** characters from the set {'**a**', '**b**', '**c**', '**d**', '**e**', '**f**', '**g**', '**h**', '**i**', '**j**'}, describing the string. Then, **M** queries follow. Each query is given in one of the following forms:

1 **L** **R** - reverse the substring from the **L**-th to the **R**-th character.

2 **L** **R** - calculate the number of distinct palindromes that can be obtained by permutting characters from the **L**-th to the **R**-th in the arbitrary order, modulo **109+7** (ignoring all other characters).

### Output

For every query of the type **2** output the answer on the separate line.

### Example

<pre><b>Input:</b>
7 4
abacaba
2 1 7
2 2 3
1 1 2
2 2 3

<b>Output:</b>
3
0
1
</pre>
### Scoring

In all the subtasks, 1 <= **L** <= **R** <= **N**.

Subtask 1 (33 points): 1 <= **N** <= 10, 1 <= **M** <= 1000

Subtask 2 (17 points): 1 <= **N** <= 1000, 1 <= **M** <= 1000

Subtask 3 (23 points): 1 <= **N** <= 4\*104, 1 <= **M** <= 4\*104

Subtask 4 (27 points): 1 <= **N** <= 105, 1 <= **M** <= 105

Time limit for subtasks 1 and 2 is 1 sec, and for the subtasks 3 and 4 it's equal to 2 sec.
