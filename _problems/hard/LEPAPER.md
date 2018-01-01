---
category_name: hard
problem_code: LEPAPER
problem_name: 'Little Elephant and Sheet'
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
max_timelimit: '7'
source_sizelimit: '50000'
problem_author: witua
problem_tester: null
date_added: 23-07-2012
tags:
    - cook28
    - dynamic
    - hard
    - matrix
    - witua
time:
    view_start_date: 1353263009
    submit_start_date: 1353263009
    visible_start_date: 1353263400
    end_date: 1735669800
    current: 1493556752
layout: problem
---
All submissions for this problem are available.The Little Elephant from the Zoo of Lviv wants to paint the sheet of paper. The sheet has the size **1** × **Z** and consists of **Z** consecutive cells numbered from **1** to **Z** inclusive (we use letter **Z** because **N** will denote another value below and the words **"size"** and **"zoo"** both contain letter **'Z'** :))

There are also **C** available colors numbered from **1** to **C** inclusive. Current color of the **i**-th cell is **Col\[i\]** (**1** ≤ **Col\[i\]** ≤ **C**).

The Little Elephant can repaint some cells of the sheet. In a single move he chooses arbitrary pair of integers **L** and **R** such that **1** ≤ **L** ≤ **R** ≤ **Z** and some color **Ci** from **1** to **C** inclusive, after that he repaints all the cells on the segment **\[L, R\]** to the color **Ci**, that is, he assigns **Col\[j\] = Ci** for **j** from **L** to **R** inclusive. **IMPORTANT: it is allowed to repaint each cell at most once during the whole sequence of moves.**

Help the Little Elephant to find the total number of different sheets he can get in no more than **K** moves. Since the answer can be large, print it modulo **1000000007 (109 + 7)**.

Two sheets are considered different if there exists at least one index **i** from **1** to **Z** inclusive, such that that **A\[i\]** is not equal to **B\[i\]**, where **A\[i\]** is the color of the **i**-th cell of the first sheet and **B\[i\]** is the color of the **i**-th cell of the second sheet.

Little Elephant, in fact, has some enormous sheet of paper, possibly having billions of cells. But it has very specific structure. Namely, it consists of several blocks of consecutive cells, where all cells in each particular block have the same color (possibly different for different blocks), and the number of these blocks is relatively small. Consider the following example. Let our sheet of paper be **{1, 1, 1, 2, 4, 4, 4, 1, 1}** (numbers represent colors of the cells). Then it consists of **4** blocks, where the first block has **3** cells of color **1**, the second block has **1** cell of color **2**, the third block has **3** cells of color **4** and the last fourth block has **2** cells of color **1**. It seems natural for consecutive blocks to be of different color but we allow opposite situation in the input too. So please DO NOT assume that two consecutive blocks in the input are always of different color.

### Input

The first line of the input contains a single integer **T**, the number of test cases. Then **T** test cases follow. The first line of each test case contains three space separated integers **N, C** and **K**. Here **N** is the number of blocks in the sheet, **C** is the number of available colors and **K** is the upper bound on the number of moves Little Elephant can make. Each of following **N** lines contains two space separated integers **S\[i\]** and **M\[i\]**, where **S\[i\]** is the color of the **i**-th block and **M\[i\]** is the number of cells in the **i**-th block. So the above value **Z** equals to **M\[1\] + M\[2\] + ... + M\[N\]**.

### Output

For each test case output a single line containing the number of different sheets the Little Elephant can get using at most **K** moves. As was mentioned above you should output this number modulo **109 + 7**.

### Constraints

**1** ≤ **T** ≤ **7** 
**1** ≤ **N** ≤ **7** 
**1** ≤ **C** ≤ **109** 
**1** ≤ **K** ≤ **7** 
**1** ≤ **S\[i\]** ≤ **C** 
**1** ≤ **M\[i\]** ≤ **109**

### Example

<pre>
<b>Input:</b>
3
1 47 1
1 1
2 2 1
1 1
2 1
2 3 2
1 2
2 2

<b>Output:</b>
47
3
57

</pre>### Explanation
**Case 1.** Here the sheet consists of one cell of color **1**. We have **47** available colors. Using one move we can color this cell in any of available colors. So we can get **47** different sheets.

**Case 2.** Here the sheet of paper is **{1, 2}** (numbers represent colors of the cells). We have **2** available colors. So there exist **4** different sheets of **2** cells. Using at most one move we can achieve every such sheet except **{2, 1}**. Indeed,

- Sheet **{1, 1}** is achieved by repainting the second cell at color **1**.
- Sheet **{1, 2}** is achieved using no repainting.
- Sheet **{2, 2}** is achieved by repainting the first cell at color **2**.

To get **{2, 1}** we need at least two moves. So the answer is **3**.
