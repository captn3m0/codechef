---
category_name: medium
problem_code: WSCAGAIN
problem_name: 'Deja Vu'
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
problem_author: xcwgf666
problem_tester: white_king
date_added: 14-08-2014
tags:
    - bfs
    - easy
    - ltime18
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/WSCAGAIN'
time:
    view_start_date: 1417336200
    submit_start_date: 1417336200
    visible_start_date: 1417336200
    end_date: 1735669800
    current: 1493557955
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME18/mandarin/WSCAGAIN.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME18/russian/WSCAGAIN.pdf).

The following is an easy game that the setter of this problem played when he was 8:

*A boatman, a wolf, a sheep, and a cabbage are on the bank of a river. They have a small boat that is capable of carrying the boatman and at most one other animal/item with him. However, if left alone by the boatman, the wolf can eat the sheep, and the sheep can eat the cabbage. How can all four be moved safely to the opposite bank of the river?*

[Here](http://coolmath-games.com/Logic-wolfsheepcabbage/index.html) is a nice visualization of the whole process in the original game. Disclaimer: writers, testers and CodeChef are not related to this link.

This leads to a more general problem. If there are other groups of animals/items with the boatman, **and if the boat is big enough to seat at most **K** animals/items other than the boatman**, how quickly can all of them be moved to the opposite bank of the river in such a way that nobody/nothing gets eaten?

We will give you the number of animals/items (not including the boatman). We will also give you the new capacity of the boat. Moreover, we will give you all a list of pairs of the form "**X Y**" where the **X**-th animal/item will be eaten by the **Y**-th one if they are both on the opposite bank to the boatman.

Assuming a valid solution exists, you are to determine the **minimum number of boat trips** across the river to achieve the task.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test contains three space separated integers **N**, **M** and **K** - the number of animals/items not including the boatman, the number of relations of the form "**X** will be eaten by **Y**", and the capacity of the boat (not including the boatman), respectively.

The following **M** lines contain pairs of the form **X Y** with the meaning that the **X**-th animal/item will be eaten by the **Y**-th one if they are both on the opposite bank to the boatman.

### Output

For each test case, output a single line containing a single integer - the minimum number of boat trips across the river necessary. In the test cases it is always possible to accomplish this goal.

### Constraints

- **1** ≤ **T** ≤ **20**
- **1** ≤ **K** ≤ **N**
- Subtask 1: **1** ≤ **N** ≤ **3**, 0 ≤ **M** ≤ **3** - 22 points.
- Subtask 2: **1** ≤ **N** ≤ **6**, 0 ≤ **M** ≤ **15** - 34 points.
- Subtask 3: **1** ≤ **N** ≤ **13**, 0 ≤ **M** ≤ **78** - 44 points.

### Example

<pre><b>Input:</b>
2
3 2 1
1 2
2 3
3 3 2
1 2
1 3
2 3

<b>Output:</b>
7
3
</pre>
### Explanation

The first example is the original version of the problem.
