---
category_name: easy
problem_code: BOUQUET
problem_name: 'The Largest Bouquet'
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
problem_author: xcwgf666
problem_tester: mgch
date_added: 14-10-2016
tags:
    - cakewalk
    - ltime41
    - xcwgf666
time:
    view_start_date: 1477760400
    submit_start_date: 1477760400
    visible_start_date: 1477760400
    end_date: 1735669800
    current: 1493558111
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME41/mandarin/BOUQUET.pdf), [Russian](http://www.codechef.com/download/translated/LTIME41/russian/BOUQUET.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME41/vietnamese/BOUQUET.pdf) as well.

It's autumn now, the time of the leaf fall.

Sergey likes to collect fallen leaves in autumn. In his city, he can find fallen leaves of maple, oak and poplar. These leaves can be of three different colors: green, yellow or red.

Sergey has collected some leaves of each type and color. Now he wants to create the biggest _nice_ bouquet from them. He considers the bouquet _nice_ iff all the leaves in it are either from the same type of tree or of the same color (or both). Moreover, he doesn't want to create a bouquet with even number of leaves in it, since this kind of bouquets are considered to attract bad luck. However, if it's impossible to make any nice bouquet, he won't do anything, thus, obtaining a bouquet with zero leaves.

Please help Sergey to find the maximal number of leaves he can have in a _nice_ bouquet, which satisfies all the above mentioned requirements.

Please note that Sergey _doesn't have to_ use all the leaves of the same color or of the same type. For example, if he has **20** maple leaves, he can still create a bouquet of **19** leaves.

### Input

IThe first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows."

The first line of each test case contains three space-separated integers **MG MY MR** denoting the number of green, yellow and red maple leaves respectively.

The second line contains three space-separated integers **OG OY OR** denoting the number of green, yellow and red oak leaves respectively.

The third line of each test case contains three space-separated integers **PG PY PR** denoting the number of green, yellow and red poplar leaves respectively.

### Output

For each test case, output a single line containing the maximal amount of flowers in _nice_ bouquet, satisfying all conditions or  if it's impossible to create any bouquet, satisfying the conditions.

### Constraints

- **1** ≤ **T** ≤ **10000**
- Subtask 1 (50 points): **0 ≤ MG, MY, MR, OG, OY, OR, PG, PY, PR ≤ 5**
- Subtask 2 (50 points): **0 ≤ MG, MY, MR, OG, OY, OR, PG, PY, PR ≤ 109**

### Example

```
<b>Input:</b>
<tt>1
1 2 3
3 2 1
1 3 4</tt>

<b>Output:</b>
<tt>7</tt>

```
### Explanation

**Example case 1.** We can create a bouquet with **7** leaves, for example, by collecting all yellow leaves. This is not the only way to create the nice bouquet with **7** leaves (for example, Sergey can use all but one red leaves), but it is impossible to create a nice bouquet with more than **7** leaves.