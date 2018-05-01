---
category_name: easy
problem_code: KIRLAB
problem_name: 'Kirito in labyrinth'
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
problem_author: maestr0
problem_tester: kevinsogo
date_added: 2-11-2016
tags:
    - maestr0
time:
    view_start_date: 1481535000
    submit_start_date: 1481535000
    visible_start_date: 1481535000
    end_date: 1735669800
    current: 1493558156
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC16/mandarin/KIRLAB.pdf), [Russian](http://www.codechef.com/download/translated/DEC16/russian/KIRLAB.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC16/vietnamese/KIRLAB.pdf) as well.

Kirito faced a dangerous labyrinth, and now he requires your help.

He's in a tunnel which contains **N** different rooms. Each room contains **Ai** monsters inside it. He starts from room **1**. Every time he stays near a room **X**, he may go in and clear it from monsters, or just leave the room locked and move to the room **X+1**. However, if he clears a room with **K** monsters, and the next room he clears consists of **L** monsters, then the greatest common divisor of **K** and **L** must be greater than **1**, otherwise he will die (awful curse). Formally, let us say that the order of rooms he visited is **i1**, **i2**, , ..., **it**. Then gcd(**Aij**, **Aij + 1**) **> 1** for all **j . Help him cross all the rooms by clearing the maximum number of rooms.**

### Input

The first line of input contains an integer **T** denoting the number of test cases.

The first line of each test case contains one integer **N** denoting the number elements in sequence.

The second line of each test case contains **N** integers where **i-th** integer is number of monsters in room **Ai**.

### Output

For each test case, output the maximum number of rooms he could clear. (Kirito should survive.)

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **105**
- **1** ≤ **ai** ≤ **107**

### Subtasks

- **Subtask 1:** **1** ≤ **N** ≤ **103** - **30 points**
- **Subtask 2:** **Original constraints** - **70 points**

### Example

<pre><b>Input:</b>
<tt>2
7
13 2 8 6 3 1 9
6
1 2 2 3 3 1</tt>
<b>Output:</b>
<tt>5
2</tt>
</pre>### Explanation

**Example 1**. Kirito can clear the monsters in the rooms 2, 3, 4, 5, 7 in that order. These rooms consist of 2, 8, 6, 3, and 9 monsters, respectively. You can check that gcd(2, 8), gcd(8, 6), gcd(6, 3) and gcd(3, 9), all are greater than 1.

**Example 2**. Kirito can clear the monsters in the rooms numbered 2, 3. Each of these two rooms contains two monsters. And we know that gcd(2, 2) = 2 > 1.

There is one more possible solution: Kirito can clear the monsters in the rooms numbered 4, 5. These rooms contains 3 monsters each, and he can clear these rooms as gcd(3, 3) = 3 > 1.
