---
category_name: medium
problem_code: LIKECS05
problem_name: 'Mixing Colors'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: likecs
problem_tester: kingofnumbers
date_added: 8-09-2017
tags:
    - cook86
    - fft
    - inclusn
    - likecs
    - likecs
    - medium
editorial_url: 'https://discuss.codechef.com/problems/LIKECS05'
time:
    view_start_date: 1505673000
    submit_start_date: 1505673000
    visible_start_date: 1505673000
    end_date: 1735669800
    current: 1514816021
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK86/mandarin/LIKECS05.pdf), [Russian](http://www.codechef.com/download/translated/COOK86/russian/LIKECS05.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK86/vietnamese/LIKECS05.pdf) as well.

Chef Dobby had recently studied about [Primary](https://en.wikipedia.org/wiki/Primary_color) and [Secondary](https://en.wikipedia.org/wiki/Secondary_color) colors. He came to know that by mixing colors he can sometimes get a new colour. For this problem we consider only 3 colors : **Red, Green and Yellow**. The different ways of mixing them and the final colour we obtain is shown below.

![Mixing Colors-1](https://cook86.discuss.codechef.com/upfiles/img-1.png)

Bhuvan, Chef Tobby friend, was playing another game on grid of size **N \* N** where rows are numbered from 1 to N from up to bottom and columns are numbered from 1 to N from left to right. Chef Dobby wasn't happy as the Bhuvan grid had no colors at all. So, he thought of coloring Bhuvan's grid. So Chef Tobby started his operation, but Bhuvan said that he could only colour the grid **M** times. Chef Tobby decided that each of his operation could be one of the following :

1. Color **row i** with red color.
2. Color **row i** with green color.
3. Color **col j** with red color.
4. Color **col j** with green color.
5. Color **diagonal x (= i + j)** with red color.
6. Color **diagonal x (= i + j)** with green color.



**Note:** diagonal x is the set of all cells that are in intersection of row i and column j such that i+j = x.

**Note2:** if a cell is already colored then we apply the mixture rules in the above picture between the new color and the existing color. 
Bhuvan's asks you to determine the number of cells of each color after all the operations are performed.

### Input section

The first line contains 2 integers, **N** and **M**, denoting the size of the grid and number of opeartions performed by Chef Tobby.

Each of the next **M** lines contains **3** space separated integers, **type, idx, color**, which mean the following :

1. type = 1, operation performed on row
2. type = 2, operation performed on column
3. type = 3, operation performed on diagonal
4. idx = index of corresponding row, column or diagonal
5. color = 0, color the cells of grid Green
6. color = 1, color the cells of grid Red


**The input files are upto 1 MB. So prefer to use faster I/O methods, for example : scanf/printf in C++, Buffered-Reader in Java etc.**

### Output section

Output 4 integers, denoting the number of cells with no color, cells with red color, cells with green color and cells with yellow color in the grid after all the operations are performed.

### Input constraints

<pre>
1 ≤ N ≤ 10<sup>5</sup>
1 ≤ M ≤ 10<sup>5</sup>
1 ≤ type ≤ 3
1 ≤ idx_row, idx_column ≤ N
2 ≤ idx_diagonal ≤ 2 * N
0 ≤ color ≤ 1
</pre>
### Sample Input

<pre>
5 10
2 4 1
3 3 1
2 1 1
3 7 0
1 3 1
3 3 0
3 8 0
1 5 0
2 4 1
2 2 0
</pre>
### Sample Output

<pre>
4 6 7 8
</pre>
### Explanation

You can refer to the below image which shows the colored grid after each step.

![Mixing Colors-1](https://cook86.discuss.codechef.com/upfiles/img-2_Jh81yrs.png)
