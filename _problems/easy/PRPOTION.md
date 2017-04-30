---
category_name: easy
problem_code: PRPOTION
problem_name: 'Magical Girl and Colored Liquid Potions'
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
problem_author: dpraveen
problem_tester: shangjingbo
date_added: 10-09-2014
tags:
    - dpraveen
    - easy
    - greedy
    - oct14
editorial_url: 'http://discuss.codechef.com/problems/PRPOTION'
time:
    view_start_date: 1413192600
    submit_start_date: 1413192600
    visible_start_date: 1413192600
    end_date: 1735669800
    current: 1493558178
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT14/mandarin/PRPOTION.pdf) and [Russian](http://www.codechef.com/download/translated/OCT14/russian/PRPOTION.pdf).

Naturally, the magical girl is very good at performing magic. She recently met her master wizard Devu, who gifted her **R** potions of red liquid,
**B** potions of blue liquid, and **G** potions of green liquid.

- The red liquid potions have liquid amounts given by **r\[1\], ..., r\[R\]** liters.
- The green liquid potions have liquid amounts given by **g\[1\], ..., g\[G\]** liters.
- The blue liquid potions have liquid amounts given by **b\[1\], ..., b\[B\]** liters.

She want to play with the potions by applying magic tricks on them. In a single magic trick, she will choose a particular color. Then she will pick all the potions of the chosen color and decrease the amount of liquid in them to half (i.e. if initial amount
of liquid is **x**, then the amount after decrement will be **x / 2**  where division is integer division, e.g. 3 / 2 = 1 and 4 / 2 = 2).

Because she has to go out of station to meet her uncle Churu, a wannabe wizard, only **M** minutes are left for her. In a single minute, she can perform at most one magic trick. Hence, she can perform at most **M** magic tricks.

She would like to minimize the maximum amount of liquid among all of Red, Green and Blue colored potions. Formally Let v be the maximum value of amount of liquid in any potion. We want to minimize the value of v.
Please help her.

### Input

First line of the input contains an integer **T** denoting the number of test cases.
Then for each test case, we have four lines.

The first line contains four space separated integers **R**, **G**, **B**, **M**. The next 3 lines will describe the amount of different color liquids (**r, g, b**), which are separated by space.

### Output

For each test case, print a single integer denoting the answer of the problem.

### Constraints

- 1 ≤ T ≤ 1000
- 1 ≤ R, G, B, M ≤ 100
- 1 ≤ r\[i\], g\[i\], b\[i\] ≤ 10^9

### Example

```
<b>Input:</b>
3
1 1 1 1
1
2
3
1 1 1 1
2
4
6
3 2 2 2
1 2 3
2 4
6 8
<b>Output:</b>
2
4
4

```
### Explanation

**Example case 1.** Magical girl can pick the blue potion and make its liquid amount half. So the potions will now have amounts 1 2 1. Maximum of these values is 2. Hence answer is 2.