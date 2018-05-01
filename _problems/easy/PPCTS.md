---
category_name: easy
problem_code: PPCTS
problem_name: 'Puppy and Catchers'
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
problem_author: pavel1996
problem_tester: kostya_by
date_added: 24-01-2016
tags:
    - cook67
    - geometry
    - implementation
    - maths
    - pavel1996
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/PPCTS'
time:
    view_start_date: 1456081200
    submit_start_date: 1456081200
    visible_start_date: 1456081200
    end_date: 1735669800
    current: 1493558174
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK67/mandarin/PPCTS.pdf), [Russian](http://www.codechef.com/download/translated/COOK67/russian/PPCTS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK67/vietnamese/PPCTS.pdf) as well.

Today, puppy Tuzik is going to a new dog cinema. He has already left his home and just realised that he forgot his dog-collar! This is a real problem because the city is filled with catchers looking for stray dogs.

A city where Tuzik lives in can be considered as an infinite grid, where each cell has exactly **four** neighbouring cells: those sharing a common side with the cell. Such a property of the city leads to the fact, that the distance between cells **(xA, yA)** and **(xB, yB)** equals **|xA - xB| + |yA - yB|**.

Initially, the puppy started at the cell with coordinates **(0, 0)**. There are **N** dog-catchers located at the cells with the coordinates **(xi, yi)**, where **1 ≤ i ≤ N**. Tuzik's path can be described as a string **S** of **M** characters, each of which belongs to the set **{'D', 'U', 'L', 'R'}** (corresponding to it moving down, up, left, and right, respectively). To estimate his level of safety, Tuzik wants to know the sum of the distances from each cell on his path to all the dog-catchers. You don't need to output this sum for the staring cell of the path (i.e. the cell with the coordinates **(0, 0)**).

### Input

The first line of the input contains two integers **N** and **M**.

The following **N** lines contain two integers **xi and yi** each, describing coordinates of the dog-catchers.

The last line of the input contains string **S** of **M** characters on the set **{'D', 'U', 'L', 'R'}**.

- 'D' - decrease **y** by 1
- 'U' - increase **y** by 1
- 'L' - decrease **x** by 1
- 'R' - increase **x** by 1

### Output

Output **M** lines: for each cell of the path (**except the starting cell**), output the required sum of the distances.

### Constraints

- **1** ≤ **N** ≤ **3 ✕ 105**
- **1** ≤ **M** ≤ **3 ✕ 105**
- **-106** ≤ **xi, yi** ≤ **106**

### Example

<pre><b>Input:</b>
2 3
1 2
0 1
RDL

<b>Output:</b>
4
6
6
</pre>### Explanation

Initially Tuzik stays at cell **(0, 0)**. Let's consider his path:

- Move **'R'** to the cell (1, 0). Distance to the catcher **(1, 2)** equals 2, distance to the catcher **(0, 1)** equals 2, so the total distance equals 4
- Move **'D'** to the cell (1, -1). Distance to the catcher **(1, 2)** equals 3, distance to the catcher **(0, 1)** equals 3, so the total distance equals 6
- Move **'L'** to the cell (0, -1). Distance to the catcher **(1, 2)** equals 4, distance to the catcher **(0, 1)** equals 2, so the total distance equals 6
