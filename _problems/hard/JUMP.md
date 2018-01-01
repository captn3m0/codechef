---
category_name: hard
problem_code: JUMP
problem_name: 'Jump mission'
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
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 7-09-2015
tags:
    - convex
    - dynamic
    - hard
    - kingofnumbers
    - oct15
editorial_url: 'http://discuss.codechef.com/problems/JUMP'
time:
    view_start_date: 1444642200
    submit_start_date: 1444642200
    visible_start_date: 1444642200
    end_date: 1735669800
    current: 1493556738
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT15/mandarin/JUMP.pdf) and [Russian](http://www.codechef.com/download/translated/OCT15/russian/JUMP.pdf) 

Chef the chief is participating in a hill jumping competition.

There are N hills arranged in a row, and each of them is assigned a unique index from 1 to **N** — the **i**th hill has an index **Pi** on it. The height of the **i**th hill is **Hi**.
Chef starts at the first hill with a goal to reach the **Nth** hill by jumping over hills from left to right (he is not allowed to jump in the other direction), jumping from **i**th hill to **j**th costs (**Hj** - **Hi**)2 energy.

When chief is on the **i**th hill, he has to prepare a special dish for the community of that hill as a thanks for letting him use their resources. This will cost him **Ai** energy (some dishes are chief's favorites and preparing it refreshes chef that why **Ai** may be negative). To make things more challenging for Chef the chief, he is allowed to jump from **i**th hill to **j**th if and only if **i < j** and **Pi < Pj**.

Help Chef choose the sequence of jumps that consume the minimum energy possible. (Note that it's possible at any moment that energy consumed is negative.)

### Input

The first line of input contains a single integer **N**.
The second line contains **N** space-separated integers **P1**, **P2**, ... , **PN**.

The third line contains **N** space-separated integers **A1**, **A2**, ... , **AN**.

The fourth line contains **N** space-separated integers **H1**, **H2**, ... , **HN**.
/>/>/>

### Output

Output a single line containing the answer to the problem i.e. the minimal possible amount of **consumed** energy.

### Constraints

- **2** ≤ **N** ≤ **3 × 105**
- **P** is a permutation of the first **N** integer numbers
- **P1=1** and **PN=N**
- **-109** ≤ **Ai** ≤ **109**
- **1** ≤ **Hi** ≤ **6 × 105**

### Subtasks

- **Subtask 1** (5 points) : **2** ≤ **N** ≤ **20**
- **Subtask 2** (15 points) : **2** ≤ **N** ≤ **5000**
- **Subtask 3** (20 points) : **2** ≤ **N** ≤ **3 × 105**, **Pi** = **Hi** = **i**
- **Subtask 4** (30 points) : **2** ≤ **N** ≤ **3 × 105**, **Hi** = **i**
- **Subtask 5** (30 points) : original constraints

### Example

<pre><b>Input:</b>
<tt>5
1 4 3 2 5
0 1 3 0 0
1 2 3 4 5</tt>

<b>Output:</b>
<tt>10</tt>


</pre>### Explanation
**Example case 1.** jumping from first hill to 4th one then to 5th; the answer will be 0 + 0 + 0 + (4-1)^2 + (5-4)^2 = 10
