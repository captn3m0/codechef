---
category_name: school
problem_code: GIT01
problem_name: 'Chef And his Cake'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
    - 'CPP 4.3.2'
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: gitesh18
problem_tester: null
date_added: 23-11-2017
tags:
    - cakewalk
    - dec17
    - gitesh18
editorial_url: 'https://discuss.codechef.com/problems/GIT01'
time:
    view_start_date: 1512984600
    submit_start_date: 1512984600
    visible_start_date: 1512984600
    end_date: 1735669800
    current: 1514815984
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/DEC17/mandarin/GIT01.pdf), [Russian](http://www.codechef.com/download/translated/DEC17/russian/GIT01.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC17/vietnamese/GIT01.pdf) as well.

Chef’s girlfriend's birthday is near, so he wants to surprise her by making a special cake for her. Chef knows that his girlfriend likes cherries on the cake, so he puts cherries on the top of the cake, but he was not satisfied. Therefore, he decided to replace some of the cherries to make a beautiful pattern. However, Chef has a lot of other work to do so he decided to ask for your help.

The cherries are of two colors **red** and **green**. Now Chef wants the cherries to be placed in such a way that each cherry of one color must be adjacent to only cherries of the other color, two cherries are adjacent if they share a side. Now Chef has asked for your help in making that pattern on the cake.

You can replace any cherry of given color with the other color. But there is a cost for each replacement: if you replace a red cherry with a green one, the cost is **5** units and if you replace a green cherry with a red one, the cost is **3** units.

Help your friend Chef by making the cake special with minimum cost.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **M**, where **N** × **M** are the dimensions of the cake.
- Each of the next **N** lines contains a string of length **M**.

### Output

For each test case, output the minimum cost required to make the cake special.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **N, M** ≤ 100
- each string consists only of letters 'R' and 'G' denoting red and green cherries respectively

### Example

<pre><b>Input:</b>

2
4 5
RGRGR
GRGRG
RGRGR
GRGRG
2 3
RRG
GGR

<b>Output:</b>

0
8
</pre>