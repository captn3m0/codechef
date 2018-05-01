---
category_name: easy
problem_code: CAPIMOVE
problem_name: 'Capital Movement'
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
problem_author: cenadar
problem_tester: iscsi
date_added: 8-08-2015
tags:
    - cenadar
    - data
    - heap
    - jan17
    - sets
    - simple
    - sorting
    - tree
editorial_url: 'https://discuss.codechef.com/problems/CAPIMOVE'
time:
    view_start_date: 1484731800
    submit_start_date: 1484731800
    visible_start_date: 1484731800
    end_date: 1735669800
    current: 1493558113
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN17/mandarin/CAPIMOVE.pdf), [Russian](http://www.codechef.com/download/translated/JAN17/russian/CAPIMOVE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN17/vietnamese/CAPIMOVE.pdf) as well.

Chef is playing a video game. In a video game, there's a advanced civilization that has a total of **N** planets under control. All of those planets are connected with **N-1** teleports in such a way, that it's possible to travel between any two planets using those teleports.

There's a chance that some planet gets infected. In this case it takes 24 hours for civilization to find out infection and prevent it from spreading. During this time infection uses teleport one time and infect all the planets that can be achieved in one teleport jump. So, once infection is detected at planet **V**, scientists already know that all planets connected to **V** via teleport are also infected. All the neccessary teleports are disabled right away and medics start working on eliminating the infection.

Each planet has population. Planets are numbered from **1** to **N** and their populations are **P1**, **P2**, ..., **PN**. It is known that all the **Pi** are distinct.

There's a capital among all those planets. The capital is known to have the biggest population.

Once infection is detected at planet **V**, after disabling teleports on planet **V** and all connected to them, government has to establish a new capital if needed in the remaining not-infected planets. So, they list all the planets that are not connected to **V** and are not **V**. Then they pick the planet with biggest population. Your task is to find the number of this planet for every possible **V**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains one integer **N**.

Next line contains **N** space-separated integers **P1**, **P2**, ..., **PN** denoting the population of each planet.

Next **N-1** lines contain two space-separated integers each **V** and **U** denoting that there's a teleport between planet **V** and **U**.

### Output

For each test case, output a single line containing **N** integers **A1**, **A2**, ..., **AN** separated by a space. Here **Ai** denotes the number of the planet picked to be new capital in case infection starts spreading from the planet **i**. In case infection affects all the planets output 0.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N** ≤ **50000**
- **1** ≤ **Pi** ≤ **109**
- All **Pi** are distinct
- **1** ≤ **V** ≤ **N**
- **1** ≤ **U** ≤ **N**

### Subtasks

- **Subtask #1 (20 points): N ≤ 100**
- **Subtask #2 (30 points): N ≤ 10000**
- **Subtask #3 (50 points): No additional constraints**

### Example

<pre><b>Input:</b>
1
6
5 10 15 20 25 30
1 3
2 3
3 4
4 5
4 6

<b>Output:</b>
6 6 6 2 6 5
</pre>