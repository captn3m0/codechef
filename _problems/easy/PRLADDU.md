---
category_name: easy
problem_code: PRLADDU
problem_name: 'DevuLand, Dinosaurs and Laddus'
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
problem_author: dpraveen
problem_tester: shangjingbo
date_added: 15-09-2014
tags:
    - basic
    - dpraveen
    - easy
editorial_url: 'http://discuss.codechef.com/problems/PRLADDU'
time:
    view_start_date: 1413192600
    submit_start_date: 1413192600
    visible_start_date: 1413192600
    end_date: 1735669800
    current: 1493558176
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/OCT14/mandarin/PRLADDU.pdf) and [Russian](http://www.codechef.com/download/translated/OCT14/russian/PRLADDU.pdf).

 DevuLand is a very strange place. There are **n** villages in it. Some of the villages are occupied by dinosaurs while the remaining ones by villagers.
 You are given the information of DevuLand
 by an array **D** of size **n**. If **D\[i\]** is non-negative, it means that there are **D\[i\]** villagers in that village.
 Otherwise, it means that are -**D\[i\]**
 dinosaurs in that village.

 It is also guaranteed that total number of villagers in DevuLand is equal to total number of dinosaurs.

Once dinosaurs got very hungry and started eating villagers. Frightened villagers gathered immediately and met their Sarpanch Deviji. Deviji, being a very daring and negotiable person, met to the head
of dinosaurs. Soon both parties called a truce. It was decided that the villagers will provide laddus to
the dinosaurs. So everyday, each villager will take exactly one laddu to one of the dinosaurs in such a way that no dinosaur remains hungry (note that this is possible because number of villagers is the same as the number of dinosaurs).

Actually, carrying laddus is a quite a tough job. Villagers have to use a bullock cart for that. It takes one unit of grass a bullock to
carry a cart with 1 laddu for **1** kilometre. Laddus used to be very heavy in DevuLand, so a bullock cart can not carry more than one laddu.

It is also given distance between village indexed **i** and **j** is |**j** - **i**| (the absolute value) kilometres.

Now villagers sat down and found a strategy to feed laddus to dinosaurs so that they need to buy the least amount of grass from the nearby market.
They are not very good in
calculations, please find out what is the minimum number of units of grass they need to buy.

### Input

First line of the input contains an integer **T** denoting number of test cases.

For each test case, there are two lines.

First line contains a single integer denoting n: number of villages.

Second line contains n space separated integers denoting the array **D**.

### Output

For each test case, print a single line containing the integer corresponding to answer of the problem.

### Constraints

- 1 ≤ T ≤ 10^5
- 1 ≤ n ≤ 10^5
- -10^4 ≤ D\[i\] ≤ 10^4
- Sum of n over all the test cases will be ≤ 10^6
- It is guaranteed that sum of D\[i\] is zero for a single test case which ensures that there are equal number of villagers and dinosaurs.

### Example

<pre><b>Input:</b>
3
2
5 -5
2
-5 5
3
1 2 -3
<b>Output:</b>
5
5
4
</pre>
### Explanation

**Example case 1.** Each villager in village 1, need to walk 1 km to reach to the dinosaur in 2nd village.

**Example case 2.** Each villager in village 2, need to walk 1 km to reach to the dinosaur 1st village.

**Example case 3.** Each villager in village 1, need to walk 2 km to reach to the dinosaur in 3rd village whereas Each villager in village 2,
need to walk 1 km to reach to the dinosaur in 3rd village.
