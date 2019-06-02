---
category_name: medium
problem_code: MARRAYS
problem_name: 'Chef and Magic Arrays'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: alex_2oo8
date_added: 23-01-2014
tags:
    - berezin
    - dynamic
    - easy
    - oct17
editorial_url: 'https://discuss.codechef.com/problems/MARRAYS'
time:
    view_start_date: 1508146200
    submit_start_date: 1508146200
    visible_start_date: 1508146200
    end_date: 1735669800
    current: 1514816021
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/OCT17/mandarin/MARRAYS.pdf), [russian](http://www.codechef.com/download/translated/OCT17/russian/MARRAYS.pdf) and [vietnamese](http://www.codechef.com/download/translated/OCT17/vietnamese/MARRAYS.pdf) as well.

Yesterday Chef had cooked **N** very tasty dishes. A dish is prepared of several ingredients. You are given this information by **N** arrays, each array contains elements equal to the number of ingredients used in that dish. Also, an element of the array denotes the tastiness of the ingredient in the corresponding dish.

Chef placed his **N** dishes in a line, one after the other. You can make a simple observation that the last ingredient of a dish will be a neighbor of the first ingredient of the next dish. Of course, this is not valid for the **N**-th dish, as it's the last dish.

Overall quality of these dishes will be calculated as follows. Consider dish **i** and **i + 1**, if the last ingredient of dish **i** be of tastiness **x**, and the first ingredient of dish **i + 1** of tastiness of **y**, then the quality of dish will be increased by **|x - y| \* i**, where (|t| denotes the absolute value of t).

Chef wants to maximize the quality of the dish. For each dish, he is allowed to take its ingredients and cyclically rotate/shift them by as many rotations as he wishes. Find the maximum possible quality of the dishes that he can obtain.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The first line of each test case contains a single integer **N** denoting the number of dishes.

Next **N** lines follows. **i**-th line contains integer **M** denoting the number of ingredients in **i**-th dish and **M** space-separated integers **A1**, **A2**, ..., **AM** denoting the tastiness of ingredients of **i**-th dish.".

### Output

For each test case, output in a single line an integer corresponding to the maximum possible quality of the dishes.

### Constraints

- Total number of ingredients over all the test cases in a single test file won't exceed 106
- **M** ≥ **1**
- **1** ≤ **Ai** ≤ **106**

### Subtasks

- **Subtask #1 (20 points)**: Total number of dishes = 2.
- **Subtask #2 (30 points)**: **1** ≤ **Ai** ≤ **500**
- **Subtask #3 (50 points)**: original constraints

### Example

<pre><b>Input:</b>
3
3
3 1 2 3
2 3 2
2 4 5
2
2 1 2
2 4 5
3
2 1 2
3 3 2 5
2 4 5

<b>Output:</b>
8
4
10
</pre>
### Explanation

<pre><p><b>Example case 1.</b> 
01) 123|32|45 = 0 * 1 + 2 * 2 = 4
02) 312|32|45 = 1 * 1 + 2 * 2 = 5
03) 231|32|45 = 2 * 1 + 2 * 2 = 6
04) 123|23|45 = 1 * 1 + 1 * 2 = 3
05) 312|23|45 = 0 * 1 + 1 * 2 = 2
06) 231|23|45 = 1 * 1 + 1 * 2 = 3
07) 123|32|54 = 0 * 1 + 3 * 2 = 6
08) 312|32|54 = 1 * 1 + 3 * 2 = 7 
<b>09) 231|32|54 = 2 * 1 + 3 * 2 = 8</b>
10) 123|23|54 = 1 * 1 + 2 * 2 = 5
11) 312|23|54 = 0 * 1 + 2 * 2 = 4
12) 231|23|54 = 1 * 1 + 2 * 2 = 5</p>
</pre>