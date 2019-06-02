---
category_name: easy
problem_code: COLARR
problem_name: 'Colored Array'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: gerald
date_added: 7-01-2014
tags:
    - berezin
    - easy
    - feb14
editorial_url: 'http://discuss.codechef.com/problems/COLARR'
time:
    view_start_date: 1392629400
    submit_start_date: 1392629400
    visible_start_date: 1392629400
    end_date: 1735669800
    current: 1493558132
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/FEB14/mandarin/COLARR.pdf) and [Russian](http://www.codechef.com/download/translated/FEB14/russian/COLARR.pdf).

Chef had a hard time arguing with his friend, and after getting a great old kick Chef saw a colored array with **N** cells, numbered from **1** to **N**.

The kick was so strong that Chef suddenly understood the rules of the game.

- Each cell is painted with a color. Here the colors are numbered from **1** to **M**.
- For any cell **i**, Chef can repaint it with any color **q**, and the cost of such operation is **Ci,q** points.
- However Chef can do at most **K** repaintings (0 repaintings is possible).
- After performing all repaintings, each cell will have some color. For each cell **i**, if cell **i** has color **q** then Chef will receive **Bi,q** points.

Now Chef is wondering how many points can he receive in total when he repaints optimally.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains three space-separated integers **N**, **M** and **K**, denoting the number of cells and the number of colors, the maximal possible number of repaintings respectively. The next line contains **N** space-separated integers **A1**, **A2**, ..., **AN**, denoting the initial colors of the cells. Then **N** lines follow. The **i**th line of them contains **M** integers **Bi1**, **Bi2**, ..., **BiM**, where **Bij** denotes how many points Chef will receive if the cell **i** will be painted with **j**-th color after all operations. Then **N** lines follow. The **i**th line of them contains **M** integers **Ci1**, **Ci2**, ..., **CiM**, where **Cij** denotes how many points Chef will lose if he repaints the cell **i** with color **j**.

**Note:** Be careful that the size of input files can be large.

### Output

For each test case, output a single line containing the maximal possible points.

### Constraints

- **1 ≤ T ≤ 5**
- **0 ≤ K ≤ 1000**
- **1 ≤ N, M ≤ 1000**
- **1 ≤ Ai ≤ M**
- **0 ≤ Bi,j ≤ 1000**
- **0 ≤ Ci,j ≤ 1000**
- If **j = Ai**, then **Ci,j = 0**

### Example

<pre><b>Input:</b>
1
4 2 1
1 1 2 2
1 1
1 1
1 1
3 1
0 1
0 1
1 0
1 0

<b>Output:</b>
5
</pre>
**Explanation:**

 For this sample, we can repaint only once, since **K = 1**. We should repaint **4**th cell with color **1**. We will pay **1** for this, and receive:

**1** (**1**st cell - **1**st color) + 

**1** (**2**nd cell -**1**st color) + 

**1** (**3**rd cell - **2**nd color) + 

**3** (**4**th cell - **1**st color) = **6**.

Hence we get **6 − 1 = 5** points in total, and it is the optimal answer.
