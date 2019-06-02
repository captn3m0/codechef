---
category_name: easy
problem_code: CHBLLNS
problem_name: 'Chef and Ballons'
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
problem_author: antoniuk1
problem_tester: xcwgf666
date_added: 13-02-2016
tags:
    - antoniuk1
    - april16
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CHBLLNS'
time:
    view_start_date: 1460374200
    submit_start_date: 1460374200
    visible_start_date: 1460374200
    end_date: 1735669800
    current: 1493558113
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL16/mandarin/CHBLLNS.pdf), [Russian](http://www.codechef.com/download/translated/APRIL16/russian/CHBLLNS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL16/vietnamese/CHBLLNS.pdf) as well.

Today a plane was hijacked by a maniac. All the passengers of the flight are taken as hostage. Chef is also one of them.

He invited one of the passengers to play a game with him. If he loses the game, he will release all the passengers, otherwise he will kill all of them. A high risk affair it is.

Chef volunteered for this tough task. He was blindfolded by Hijacker. Hijacker brought a big black bag from his pockets. The contents of the bag is not visible. He tells Chef that the bag contains **R** red, **G** green and **B** blue colored balloons.

Hijacker now asked Chef to take out some balloons from the box such that there are at least **K** balloons of the same color and hand him over. If the taken out balloons does not contain at least **K** balloons of the same color, then the hijacker will shoot everybody. Chef is very scared and wants to leave this game as soon as possible, so he will draw the minimum number of balloons so as to save the passengers. Can you please help scared Chef to find out the minimum number of balloons he should take out.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. 
The first line of each test case contains a three space-separated integers **R**, **G** and **B**. 
The second line contains only one integer **K**.

### Output

For each test case, output a single line containing one integer - the minimum number of balloons Chef need to take out from the bag.

### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **R, G, B** ≤ **109**
- **1** ≤ **K** ≤ **max{**R**, **G**, **B**}**

### Subtasks

- **Subtask 1 (44 points):** **1 ≤ **R**, **G**, **B** ≤ 10**
- **Subtask 2 (56 points):**  No additional constraints

### Example

<pre><b>Input:</b>
2
3 3 3
1
3 3 3
2

<b>Output:</b>
1
4
</pre>
### Explanation

**Example case 2.** In the worst-case scenario first three balloons will be of the three different colors and only after fourth balloon Chef will have two balloons of the same color. So, Chef might need to fetch 4 balloons
