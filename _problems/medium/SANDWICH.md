---
category_name: medium
problem_code: SANDWICH
problem_name: 'Long Sandwich '
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 17-03-2017
tags:
    - kingofnumbers
time:
    view_start_date: 1495099800
    submit_start_date: 1495099800
    visible_start_date: 1495099800
    end_date: 1735669800
    current: 1497284442
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/MAY17/mandarin/SANDWICH.pdf), [russian](http://www.codechef.com/download/translated/MAY17/russian/SANDWICH.pdf) and [vietnamese](http://www.codechef.com/download/translated/MAY17/vietnamese/SANDWICH.pdf) as well.

Chef has finally entered Guinness world records as a maker of longest sandwich in the world by breaking the previous record by making a sandwich of length **N** meters.

Celebrating this achievement, Chef decided to have a sandwich party with his friends, and of course no need to make more sandwiches, he will just cut his sandwich of length **N** meters into parts such that each part has positive integer length, and that too of at most **K** meters, otherwise it will be too long and it will be hard to be finished.

Help Chef by telling him what's the minimum number of sandwiches (since he does not have many friends) the big sandwich has to be cut into, and in how many ways this can be done. Since the number of ways can be large output it modulo **M**

Two ways are said to be different if the positions of the cuts of first way is different from the positions of cuts of the second way.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follow.

Each line of the next **T** describes a test-case and contains three integers **N**, **K** and **M**.

### Output

For each test case, output a single line containing two space separated integers, minimum number of sandwiches and number of ways to cut the large sandwich into minimum number of sandwiches modulo **M**.

### Constraints

- 1 ≤ **T** ≤ 5
- 1 ≤ **N** ≤ 1018
- 1 ≤ **K** ≤ 1018
- 2 ≤ **M** ≤ 106

### Subtasks

- **Subtask #1 (10 points)** 1 ≤ **N, K** ≤ 50
- **Subtask #2 (20 points)** 1 ≤ **N, K** ≤ 1,000,000
- **Subtask #3 (20 points)** **M** is prime
- **Subtask #4 (50 points)** original constraints

### Example

<pre><b>Input:</b>
2
7 3 500
10 2 1000

<b>Output:</b>
3 6
5 1

</pre>### Explanation
**Example case 1.** The minimum number of sandwiches is 3, and there are 6 ways to make 2 cuts:

1. positions: 1 4
2. positions: 3 4
3. positions: 3 6
4. positions: 2 4
5. positions: 2 5
6. positions: 3 5

**Example case 2.** The minimum number of sandwiches is 5, and the only way is to make all the 5 sandwiches have length 2
