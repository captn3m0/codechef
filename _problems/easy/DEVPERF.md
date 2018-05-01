---
category_name: easy
problem_code: DEVPERF
problem_name: 'Devu and Perfume'
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
problem_tester: mgch
date_added: 20-12-2015
tags:
    - ad
    - admin2
    - cakewalk
    - jan16
editorial_url: 'http://discuss.codechef.com/problems/DEVPERF'
time:
    view_start_date: 1452504600
    submit_start_date: 1452504600
    visible_start_date: 1452504600
    end_date: 1735669800
    current: 1493558137
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN16/mandarin/DEVPERF.pdf), [Russian](http://www.codechef.com/download/translated/JAN16/russian/DEVPERF.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN16/vietnamese/DEVPERF.pdf) as well.

There is a haunted town called HauntedLand. The structure of HauntedLand can be thought of as a grid of size **n \* m**. There is a house in each cell of the grid. Some people have fled from their houses because they were haunted. '.' represents a haunted house whereas '\*' represents a house in which people are living.

One day, Devu, the famous perfumer came to town with a perfume whose smell can hypnotize people. Devu can put the perfume in at most one of the houses. This takes Devu one second. Then, the perfume spreads from one house (need not be inhabited by people) to all its adjacent houses in one second, and the cycle continues. Two houses are said to be a adjacent to each other, if they share a corner or an edge, i.e., each house (except those on the boundaries) will have 8 adjacent houses.

You want to save people from Devu's dark perfumery by sending them a message to flee from the town. So, you need to estimate the minimum amount of time Devu needs to hypnotize all the people? Note that if there are no houses inhabited by people, Devu doesn't need to put perfume in any cell.

### Input

The first line of input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

First line of each test case contains two space separated integers **n, m** denoting the dimensions of the town.

For each of next **n** lines, each line has **m** characters (without any space) denoting a row of houses of the town.

### Output

For each test case, output a single integer corresponding to the answer of the problem.

### Constraints

- **1** ≤ **T** ≤ **20**

**Subtask #1:** (40 points)

- **1** ≤ **n, m** ≤ **100**

**Subtask #2:** (60 points)

- **1** ≤ **n, m** ≤ **1000**

### Example

<pre><b>Input:</b>
2
2 2
<font face="monospace">*.</font>
<font face="monospace">..</font>
3 4
<font face="monospace">.*..</font>
<font face="monospace">***.</font>
<font face="monospace">.*..</font>

<b>Output:</b>
1
2
</pre>### Explanation

**In the first example**, it will take Devu one second for putting the perfume at the only house. So, the answer is 1.

**In the second example**, He will first put the perfume at the \* at cell (1, 1) (assuming 0-based indexing).
Now, it will take Devu 1 secs to put perfume. In the next second, the perfume will spread to all of its adjacent cells, thus making each house haunted.
So, the answer is 2.
