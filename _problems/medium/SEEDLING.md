---
category_name: medium
problem_code: SEEDLING
problem_name: 'Buying Seedlings'
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
problem_author: xcwgf666
problem_tester: pavel1996
date_added: 3-11-2015
tags:
    - dynamic
    - easy
    - ltime31
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/SEEDLING'
time:
    view_start_date: 1451205000
    submit_start_date: 1451205000
    visible_start_date: 1451205000
    end_date: 1735669800
    current: 1493557974
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME31/mandarin/SEEDLING.pdf), [Russian](http://www.codechef.com/download/translated/LTIME31/russian/SEEDLING.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME31/vietnamese/SEEDLING.pdf) as well.

Recently, Sergey bought a plot of **S** square units and now wants to build a cherry tree farm at this plot.

In order to do so, he wants to visit the market and buy a number of cherry tree seedlings. There are **N** kinds of seedlings available in the market. One seedling of the **i**th kind will occupy **Ai** square units of Sergey's farm, will bring Sergey **Ci** burles of profit, and costs **Bi** burles each. There is an infinite amount of seedlings of each kind available.

Now, Sergey wants to know the number of ways to buy some seedlings in such a way that the total space they occupy will not exceed the size of Sergey's plot of land and the profit from cherry trees from the seedlings bought exceeds the money spent on them.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each description contains two space-separated integers **N** and **S** denoting the number of kinds of seedlings and the area of Sergey's plot of land.

Each of the following **N** lines contains three space-separated integers — **Ai, Bi, and Ci** — denoting the area occupied by one seedling of the **i**th kind, the cost of one seedling of this kind and the profit a seedling of this kind will bring, respectively.

### Output

For each test case, output a single line containing the number of ways to buy seedlings in such a way that the profit from these seedlings exceeds the expenses on these seedlings and the occupied area doesn't exceed **S**, modulo 109+7.

### Constraints

- **1** ≤ **Ai** ≤ **S**
- **1** ≤ sum of **N** in a single test case ≤ **100**
- Subtask 1 (17 points): 
    - **1** ≤ **N, S** ≤ **10**
    - **1** ≤ **Bi, Ci** ≤ **10**
- Subtask 2 (35 points): 
    - **1** ≤ **N, S** ≤ **50**
    - **1** ≤ **Bi, Ci** ≤ **50**
- Subtask 3 (48 points): 
    - **1** ≤ **N, S** ≤ **100**
    - **1** ≤ **Bi** ≤ **100**
    - **1** ≤ **Ci** ≤ **107**

### Example

<pre><b>Input:</b>
<tt>1
2 2
1 45 8668081
1 97 55</tt>

<b>Output:</b>
<tt>3</tt>
</pre>
### Explanation

**Example case 1.** There are three possible options:

- Buy one seedling of the first kind.
- Buy two seedlings of the first kind.
- Buy one seedling of the first kind and one seedling of the second kind.
