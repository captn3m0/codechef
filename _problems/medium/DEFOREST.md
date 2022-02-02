---
category_name: medium
problem_code: DEFOREST
problem_name: 'Chef and Deforestation'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: usaxena95
problem_tester: null
date_added: 13-11-2017
tags:
    - acm17chn
    - chn17rol
    - data
    - med
    - usaxena95
editorial_url: 'https://discuss.codechef.com/problems/DEFOREST'
time:
    view_start_date: 1515357000
    submit_start_date: 1515357000
    visible_start_date: 1515357000
    end_date: 1735669800
    current: 1525454398
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.The Chef has come to a forest. He sees **N** trees in a line. He wants to tie a rope from the top of one tree to the top of another. To successfully tie this rope, he needs to cut the trees that get in the way of the rope. However, he does not like this kind of deforestation and wants your help to choose the best pair of trees between which to tie the rope.

Formally, you are given **N** trees on the X-axis. Tree **Ti** has height **Hi** and is planted at **x = xi**.

You need to choose two trees **Ti** and **Tj** (where **xi** &lt; **xj** and **Hi** &lt; **Hj**) and connect the **tops** of these trees with a rope such that the following conditions are satisfied:

- The angle between the rope and the X-axis is equal to **45** degrees.
- The rope **does not pass** through any other trees.

In order to satisfy the second condition, you are allowed to reduce the height of any trees except **Ti** and **Tj**. Formally, you should choose numbers **C1**, **C2**, ..., **CN**, such that **0 ≤ Ck ≤ Hk** for each **1 ≤ k ≤ N** and **Ci = Cj = 0**. Then decrease **Hk** by **Ck** for each **1 ≤ k ≤ N**.

Find the maximum value of **(length of the rope between the two tops)** - **(sum of Ck for each tree Tk)**.

Note that the rope can touch the top of some intermediate tree. Look at the examples given for such a scenario.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N** denoting the number of trees.
- Each of the following **N** lines contains two space-separated integers denoting **xi** and **Hi**.

### Output

For each test case, print a single line with the maximum value of the given expression. Your answer will be considered correct if the **absolute or relative error ≤** **10-6**. If it's impossible to find any valid pair of trees to tie the rope between, print **-1** instead.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **xi, Hi** ≤ 109
- 1 ≤ **N** ≤ 2.5 · 105
- all **xi** will be distinct
- sum of **N** over all test cases **≤ 5 · 105**

### Example

<pre><b>Input:</b>

2
3
1 1
2 2
3 3
3
1 1
2 5
3 3

<b>Output:</b>

2.82842712
-0.17157287
</pre>
### Explanation

**Example case 1:** Tie the rope from tree 1 (1,1) to tree 3 (3,3). You don't need to cut down any trees. Note that this rope would touch the top of tree 2, but that is fine. Answer = length of rope = 2 · sqrt(2) = 2.82842.

**Example case 2:** Tie the rope from tree 1 (1,1) to tree 3 (3,3). You need to cut down tree 2 from height 5 to height 2. Answer = length of rope - (height reduction of tree 2) = 2 · sqrt(2) - 3 = -0.17157287.
