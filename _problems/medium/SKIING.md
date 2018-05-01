---
category_name: medium
problem_code: SKIING
problem_name: Skiing
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
    - 'CPP 4.3.2'
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: amrmahmoud
date_added: 17-11-2017
tags:
    - cook88
    - greedy
    - kingofnumbers
    - kingofnumbers
    - likecs
    - scc
    - sorting
editorial_url: 'https://discuss.codechef.com/problems/SKIING'
time:
    view_start_date: 1511116200
    submit_start_date: 1511116200
    visible_start_date: 1511116200
    end_date: 1735669800
    current: 1514816326
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Russian](http://www.codechef.com/download/translated/COOK88/russian/SKIING.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK88/vietnamese/SKIING.pdf) as well.

Chef and Hasan went for skiing in a rectangular field, the field can be represented as a grid of **N** rows and **M** columns, rows are numbered from 1 to **N** starting from top, columns are numbered from 1 to **M** starting from left, each cell has a a number representing the height of the snow on this particular part of the field.

after skiing for a while in the field they decided to play a game, first hasan has to choose a set of cells **S** not necessarily adjacent and show this set to Chef.

after that, Chef has to choose exactly one cell **d** not necessarily from set **S** and tell it to Hasan.

finally, Hasan has to choose one cell from set **S** and start skiing from that cell and try to reach cell **d** that the chef just chose, if he couldn't then Chef wins, otherwise Hasan wins.

When Hasan is skiing, he can move from one cell to another iff both cells are adjacent (they share a side) and the height of destination cell is not more than the height of current cell.

it's obvious that it's easy for Hasan to win this game, because he can simply choose all cells to be in set **S**, but he want the set **S** to have minimum number of cells to prove that he is very skilled in skiing. knowing that both players play optimally, please help Hasan to find minimum number of cells to be in set **S** to guarantee the winning for him.

### Input

First line contains integer **T** donating the number of test-cases.

First line of each test-case contains two integers **n** and **m** donating the number of rows and columns respectively.

Each of the following **n** lines contains **m** numbers donating the heights of the field

### Output

For each test-case output a single line containing a single integer donating minimum number of cells has to be in set **S** so that Hasan guarantee winning

### Constraints

Should contain all the constraints on the input data that you may have. Format it like:

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N, M** ≤ **1,000**
- **1** ≤ sum of **N** in all test-cases ≤ **1,000**
- **1** ≤ sum of **M** in all test-cases ≤ **1,000**
- **1** ≤ height of snow ≤ **1,000,000,000**

### Example

<pre><b>Input:</b>
2
3 3
1 2 2
2 1 1
2 1 1
3 3
3 2 2
2 1 1
2 1 1


<b>Output:</b>
2
1
</pre>### Explanation

**Example case 1.** Hasan has to select at least two cells to be in **S** so that he guarantee he can reach all other cells starting from anyone of them, example of cells to choose (2,1) and (1,2)

**Example case 2.** if Hasan chose cell (1,1) to be in **S** then he can reach any cell starting from it and thus guarantee winning
