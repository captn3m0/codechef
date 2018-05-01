---
category_name: medium
problem_code: CHEFLIQD
problem_name: 'Chef and Liquid Ingredients'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: m_17
problem_tester: null
date_added: 21-06-2016
tags:
    - m_17
time:
    view_start_date: 1467052140
    submit_start_date: 1467052140
    visible_start_date: 1467052140
    end_date: 1735669800
    current: 1493557535
layout: problem
---
All submissions for this problem are available.Chef Hari is a little chef in cheftown. One fine morning, his father asked him to go to market and buy liquid ingredients in order to make beverages for that particular day. Hari liked the idea as he really wanted to visit the shop of ingredients. His father gave him **M** Rupees to buy the ingredients. In addition to money, his father gave him **K** containers too. The containers are of volume **C1, C2, ........., CK** and can hold the liquid of same volume.

At the shop, there are **N** types of liquid ingredients. The ingredients have price **P1, P2, ........, PN** Rupees and are of volume **V1, V2, ........, VN**. Now, Hari has to buy some ingredients with the amount(**M**) that he has, but he has few conditions also. The conditions are as following:

- Hari doesn't want the ingredients to mix, so each container may contain at most **1** item.
- If Hari buys an ingredient, he wants its complete volume. So, Hari will buy an ingredient only if he can buy the complete volume of that ingredient.
- Hari doesn't want to waste more than one container for a single ingredient. So he'll buy an ingredient only if he has an empty container that can contain the complete volume of that ingredient.

Now, Hari wants to buy as much volume of ingredients as possible. Help him in maximizing the total volume that he can buy satisfying all of the above conditions.

### Input

First line of the input contains **T**, the number of text cases. The description of each test case is as following:

First line of each test case contains **3** space separated integers **N**, **M**, and **K**.

Next line contains **K** space separated integers **C1, C2, ........., CK**: the volumes of containers.

Next line contains **N** space separated integers **P1, P2, ........., PN**: the price of ingredients.

Next line contains **N** space separated integers **V1, V2, ........., VN**: the volume of ingredients.

### Output

For each test case, output a single line containing the maximum amount of total volume that Hari can buy.

### Constraints

- **1** ≤ **T** ≤ **3**
- **1** ≤ **N, M** ≤ **1000**
- **1** ≤ **Pi, Vi, Ci** ≤ **109**

### Subtasks

**Subtask#1: 20 points**

- **K** = **1**

**Subtask#2: 80 points**

- **1** ≤ **K** ≤ **5**

### Example

<pre><b>Input:</b>
3
5 10 1
9
2 11 12 10 7
10 9 13 2 8
5 20 2
9 12
12 11 8 10 9
10 9 13 7 8
5 9 3
12 8 4
2 2 4 5 8
6 3 8 10 15

<b>Output:</b>
8
17
19
</pre>### Explanation

**Example case 1.** In the first case, Hari buys 5th ingredient. In second case, Hari buys 2nd and 5th ingredient. In third case, Hari buys 1st, 2nd and 4th ingredients.
