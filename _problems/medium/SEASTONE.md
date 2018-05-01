---
category_name: medium
problem_code: SEASTONE
problem_name: 'Sereja and Stones'
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
problem_author: sereja
problem_tester: alex_2oo8
date_added: 10-09-2014
tags:
    - dynamic
    - medium
    - oct16
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEASTONE'
time:
    view_start_date: 1476696600
    submit_start_date: 1476696600
    visible_start_date: 1476696600
    end_date: 1735669800
    current: 1493557928
layout: problem
---
All submissions for this problem are available.Sereja has **N** boxes and **M** stones. There is a parameter _energy_ associated with each empty box, denoted by **Ei**. He wants to move each stone into some box. After moving all the stones into the boxes, he wants to compute the total energy of box/stone system. For that he believes that a contribution of box into energy of the system can be computed as follows. If box **i** contains **s** stones and there are total **k** boxes out there containing more than **s** stones, then contribution of box **i** into the system of energy will be given by **Ei** × **k**.

Sereja wants the box/stone system to be most stable, i.e. it should have least possible energy. Find out minimum possible energy of this system.

### Input

First line of the input contains an integer **T** denoting the number of test cases. **T** tests follow.

First line of each test case contains two space separated integers **N** and **M**.

Next line contains **N** space separated integers denoting the array **E**.

### Output

For each test case output a single integer corresponding to the answer of the problem.

### Constraints

- **1** ≤ **T** ≤ **7**
- **7** ≤ **N, M** ≤ **77777**
- **7** ≤ **E\[i\]** ≤ **77**

### Subtasks

- Subtask #1: (20 points) **7** ≤ **N** ≤ **77**, **7** ≤  **M** ≤ **777**
- Subtask #2: (30 points) **7** ≤ **N, M** ≤ **777**
- Subtask #3: (50 points) **original constraints**

### Example

<pre><b>Input:</b>
2
2 4
7 8
4 6
7 7 10 10

<b>Output:</b>
0
21
</pre>### Explanation

**In test case 1**, there are 2 boxes and 4 stones. The energy of two empty boxes are 7 and 8 respectively. You can put 2 stones into each of the box. Contribution of both the boxes into the energy of the system will be zero. So, the answer will be zero.

**In test case 2**, there are 4 boxes and 6 stones. You can distribute the stones into boxes as follows, \[0, 2, 2, 2\]. Contribution of the first box into total energy will be equal to 7 \* 3 and that of rest of the boxes will be zero. So, overall energy will be 21. You can enumerate all possible distributions of the stones into boxes and see that you can't obtain a system with less energy than this.
