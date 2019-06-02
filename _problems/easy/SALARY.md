---
category_name: easy
problem_code: SALARY
problem_name: 'The Minimum Number Of Moves'
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
problem_author: ballon_ziq
problem_tester: anton_lunyov
date_added: 24-10-2012
tags:
    - ad
    - ballon_ziq
    - cakewalk
    - jan13
editorial_url: 'http://discuss.codechef.com/problems/SALARY'
time:
    view_start_date: 1358242651
    submit_start_date: 1358242651
    visible_start_date: 1358242651
    end_date: 1735669800
    current: 1493558185
layout: problem
---
All submissions for this problem are available.Little chief has his own restaurant in the city. There are **N** workers there. Each worker has his own salary. The salary of the **i**-th worker equals to **Wi** (**i** = **1**, **2**, ..., **N**). Once, chief decided to equalize all workers, that is, he wants to make salaries of all workers to be equal. But for this goal he can use only one operation: choose some worker and increase by 1 salary of each worker, except the salary of the chosen worker. In other words, the chosen worker is the loser, who will be the only worker, whose salary will be not increased during this particular operation. But loser-worker can be different for different operations, of course. Chief can use this operation as many times as he wants. But he is a busy man. That's why he wants to minimize the total number of operations needed to equalize all workers. Your task is to find this number.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains a single integer **N** denoting the number of workers. The second line contains **N** space-separated integers  **W1**, **W2**, ..., **WN** denoting the salaries of the workers.

### Output

For each test case, output a single line containing the minimum number of operations needed to equalize all workers.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **100**
- 0 ≤ **Wi** ≤ **10000** (**104**)

### Example

<pre>
<b>Input:</b>
2
3
1 2 3
2
42 42

<b>Output:</b>
3
0
</pre>
### Explanation

**Example Case 1.** Chief can equalize all salaries in 3 turns:

Turn IDIDs of involved workersSalaries after the move1 1 2 2 3 32 1 2 3 4 33 1 3 4 4 4**Example Case 2.** All salaries are already equal. He doesn't need to do anything.
