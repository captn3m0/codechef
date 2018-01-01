---
category_name: easy
problem_code: WOUT
problem_name: 'Way Out'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: 'witalij_hq '
problem_tester: laycurse
date_added: 22-02-2015
tags:
    - aug15
    - dynamic
    - easy
    - prefix
    - subarray
    - witalij_hq
editorial_url: 'http://discuss.codechef.com/problems/WOUT'
time:
    view_start_date: 1439803800
    submit_start_date: 1439803800
    visible_start_date: 1439803800
    end_date: 1735669800
    current: 1493558197
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG15/mandarin/WOUT.pdf) and [Russian](http://www.codechef.com/download/translated/AUG15/russian/WOUT.pdf).

Oh, no! Chef’s in trouble. He’s got himself stuck in a cave (we don’t know how) and is looking for a way out. The bigger problem is that he needs to get his tractor out of the cave (don't ask why Chef owns a tractor!). He currently faces a large block of height **N** cells and length **N** cells, and needs to get his tractor across this block. The block is made up of vertical columns of soil, each of which is one cell long. Each column has a continuous vertical gap, with the **i**th column having its gap from the **li**th cell to the **hi**th cell (starting from the bottom, 0-indexing). That is, in the **i**th column, there is no soil from the **li**th cell to the **hi**th cell (both inclusive). Chef can build additional gaps by clearing some cells of soil. His tractor has height **H**, and therefore, he needs to build a horizontal corridor of height **H** passing through all the columns. That is, some consecutive **H** rows must have no soil. Please see the figures in the example and explanation sections for more details.

Chef is able to clear one cell of soil by spending one unit of energy. Chef is smart, and will figure out a way to build the horizontal corridor while spending the minimum possible amount of energy. To estimate how many of his tasty dishes he will still be able to cook for you tonight, find out what is the minimum possible energy he needs to spend.

### Input

First line of input contains one integer **T** - number of test cases. **T** test cases follow.

Each test case starts with two integers **N** and **H** – size of the cave and height of the tractor, respectively. In each of the next **N** lines are two integers **li** and **hi**, respectively indicating lowest and highest number of cell for the gap in the **i**th column.

### Output

One integer – minimum energy required.

### Constraints

- **1** ≤ **T** ≤ **103**
- **1** ≤ **N** ≤ **106**
- **1** ≤ sum of **N** over all test cases ≤ **106**
- **1** ≤ **H** ≤ **N**
- ≤ **li** ≤ **hi** < **N**

### Subtasks

Subtask 1 (25 points): **T ≤ 100, N ≤ 100**

Subtask 2 (75 points): No additional constraints

### Example

<pre><b>Input:</b>
2
4 3
1 2
1 2
1 2
1 2
5 2
2 3
1 2
2 3
1 2
2 3

<b>Output:</b>
4
2


</pre>### Explanation
In the second case, the figure describes the initial map, where white cells denote empty cells and brown cells denote soil cells.

![](http://www.codechef.com/download/AUG15/bef.png)

When we removed soil in two cells as the following figure, then we can make a corridor of height 2, adn this is the optimal way to make a corridor.

![](http://www.codechef.com/download/AUG15/aft.png)
