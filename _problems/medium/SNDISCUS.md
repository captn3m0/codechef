---
category_name: medium
problem_code: SNDISCUS
problem_name: 'Snakes and their Discussions'
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
problem_author: admin2
problem_tester: kingofnumbers
date_added: 31-05-2017
tags:
    - admin2
    - basic
    - greedy
    - proof
    - snckpb17
editorial_url: 'https://discuss.codechef.com/problems/SNDISCUS'
time:
    view_start_date: 1496331000
    submit_start_date: 1496331000
    visible_start_date: 1496331000
    end_date: 1735669800
    current: 1497284442
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPB17/mandarin/SNDISCUS.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPB17/russian/SNDISCUS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKPB17/vietnamese/SNDISCUS.pdf) as well.

There are **n** snakes in Snakeland. Each snake can be denoted by either a horizontal or a vertical segment in the 2-D grid.

The snakes want to hold a discussion over the benefits and limitations of capitalism. Two snakes can share their ideas with each other if they have at least one cell in common with each other. You want the snakes to have a proper discussion, i.e. each snake should be able to share their ideas with every other snake. In one second, you can move a snake horizontally or vertically by one unit. Also, you can move as many snakes simultaneously as you wish. Find the minimum number of seconds required to make this discussion possible.

### Input

The first line of the input contains an integer **T** denoting number of test cases. The description of the **T** test cases follows.

The first line of each test case contains an integer **n**.

Each of the next **n** lines contains four space separated integers **x1**, **y1**, and **x2**, **y2**, denoting that the head of the snake is at (**x1**, **y1**) and the tail is at (**x2**, **y2**). It is guaranteed that snake will be denoted by either a horizontal or vertical segment.

### Output

For each test case output a single integer corresponding to the answer of the problem.

### Constraints

- 1 ≤ **T** ≤ 50
- 1 ≤ **n** ≤ 50
- 1 ≤ **x1**, **y1**, **x2**, **y2** ≤ 50

### Example

<pre>
<b>Input</b>
3
2
1 1 1 3
1 1 3 1
2
1 1 1 3
2 1 3 1
3
1 1 1 3
2 1 3 1
2 2 2 2

<b>Output</b>
0
1
1

</pre>### Explanation
**Example 1**. The snakes have a common cell at coordinates (1, 1). So, they will be able to talk to each other. There is no need to move them.

**Example 2**. Move the horizontal snake (i.e. 2, 1, 3, 1) to the left by 1 unit. It will now be (1, 1, 2, 1). Now, the first and second snakes will have at least one common cell and will be able to talk to each other. Hence, because you spent one second, the answer is 1.

**Example 3**. In the first second, move the first snake (i.e. 1, 1, 1, 3) to the right by 1 unit, it will be (2, 1, 2, 3). Also, simultaneously, move the second snake (2, 1, 3, 1) upwards by 1 unit. It will now be at (2, 2, 3, 2). So, after this one second, each pair of snakes have at least one common cell with each other and can talk and have a proper discussion.
