---
category_name: school
problem_code: SNAPE
problem_name: 'Snape and Ladder'
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
problem_author: 'vinayak garg'
problem_tester: gerald
date_added: 24-01-2013
tags:
    - cakewalk
    - cook45
    - geometry
    - implementation
    - vinayak
editorial_url: 'http://discuss.codechef.com/problems/SNAPE'
time:
    view_start_date: 1398018600
    submit_start_date: 1398018600
    visible_start_date: 1398018600
    end_date: 1735669800
    current: 1492507635
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK45/mandarin/SNAPE.pdf) and [Russian](http://www.codechef.com/download/translated/COOK45/russian/SNAPE.pdf) as well.

Professor Snape has lots of potions. Bottles containing all types of potions are stacked on shelves which cover the entire wall from floor to ceiling. Professor Snape has broken his bones several times while climbing the top shelf for retrieving a potion. He decided to get a ladder for him. But he has no time to visit Diagon Alley. So he instructed Ron Weasley to make a ladder for him. Professor Snape specifically wants a step ladder which looks like an inverted 'V' from side view.
![](http://www.codechef.com/download/XxAtE7i.png)

Professor just mentioned two things before vanishing-

- **B** - separation between left side (LS) and right side (RS) on the ground
- **LS** - the length of left side

What should be the length of **RS**? At one extreme **LS** can be vertical and at other **RS** can be vertical. Ron is angry and confused. Since Harry is busy battling Voldemort, its your duty to help him find the minimum and maximum length of **RS**.

### Input

First line contains single integer **T**, the number of test cases. Then **T** lines follow each containing 2 integers - **B** and **LS**.

### Output

Output **T** lines, each containing minimum value of **RS** and maximum value of **RS**, separated by space. The answer (**RS**) will be considered correct if it has relative and absolute error less than 10-2.

### Constraints

1 ≤ **T** ≤ 1000
1 ≤ **B** < **LS** ≤ 1000

### Example

<pre>
<b>Input:</b>
3
4 5
10 12
10 20

<b>Output:</b>
3.0 6.40312
6.63325 15.6205
17.3205 22.3607

</pre>