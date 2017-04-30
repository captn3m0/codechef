---
category_name: hard
problem_code: SEAPERM3
problem_name: 'Sereja and Permutations 3'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: xcwgf666
date_added: 7-10-2016
tags:
    - dynamic
    - hard
    - matrix
    - nov16
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEAPERM3'
time:
    view_start_date: 1479115800
    submit_start_date: 1479115800
    visible_start_date: 1479115800
    end_date: 1735669800
    current: 1493556839
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV16/mandarin/SEAPERM3.pdf), [Russian](http://www.codechef.com/download/translated/NOV16/russian/SEAPERM3.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV16/vietnamese/SEAPERM3.pdf) as well.

Let **p** be a permutation of integers **1, ..., N**. Lets call **p** _good_ if there is at least one pair of indices **(i,j)** such that **i and **p\[i\] > j, p\[j\] > i**.** Sereja is interested in the number of permutations **p** of **1, ..., N** that are good. This might seem easy at first, but Sereja is only interested in permutations that obey a list of **M** additional rules. Rule number **i (1 ≤ i ≤ M)** in Sereja's list says **p(Xi)** should equal **Vi**. Help Sereja count number of good permutations that obey the **M** additional constraints. As this number can be quite large, you should only output its value modulo **2000000011**. ### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. Each test case starts with line that contains two numbers **N, M**. The rest of the test cases consists of **M** lines describing Sereja's additional rules. The **i**'th such line gives the integers **Xi** and **Vi**. ### Output

Output one line per test case that gives the number of good permutations obeying Sereja's constraints modulo 2000000011. ### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **10^9**
- ≤ **M** ≤ **10^4**
- **1** ≤ **Xi, Vi** ≤ **N**

### Example

```
<b>Input:</b>
<tt>2
3 0
3 2
3 1
1 2</tt>

<b>Output:</b>
<tt>1
0</tt>

```
### Explanation

**Example case 1.** The only good permutation is **3,2,1** (i = 1, j = 2).

### Sub tasks

- **Subtask #1:** **1** ≤ **N** ≤ **8** (5 points)
- **Subtask #2:** **1** ≤ **N** ≤ **20** (10 points)
- **Subtask #3:** **1** ≤ **N** ≤ **1000** (15 points)
- **Subtask #4:** **1** ≤ **N** ≤ **10000** (15 points)
- **Subtask #5:** **1** ≤ **N** ≤ **100000000** (20 points)
- **Subtask #6:** **original** (35 points)