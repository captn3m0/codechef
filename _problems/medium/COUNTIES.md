---
category_name: medium
problem_code: COUNTIES
problem_name: 'The Counties'
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
max_timelimit: '2 - 5'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: mgch
date_added: 19-10-2016
tags:
    - centroid
    - ltime41
    - medium
    - xcwgf666
time:
    view_start_date: 1477760400
    submit_start_date: 1477760400
    visible_start_date: 1477760400
    end_date: 1735669800
    current: 1493557603
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME41/mandarin/COUNTIES.pdf), [Russian](http://www.codechef.com/download/translated/LTIME41/russian/COUNTIES.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME41/vietnamese/COUNTIES.pdf) as well.

The map of Ancient ChefLand can be represented as a graph with **N** nodes, denoting the cities and **N-1** edges, denoting the roads connecting these cities. It was possible to get from any city of Ancient ChefLand to any other one using only these roads, possibly, via some intermediate cities in a unique simple path. So, in other words, the city-road structure of this country could be represented as a tree.

There were **M** counties in the ChefLand, numbered **1** through **M**. Each county had a country, consisting of at least one city. Because of the constant wars between the counties, it was not guaranteed that it is possible to get from one city of the county to any other city of this county only via the cities, belonging to the county.

Sometimes, the counties were in battles against each other. The battle could be defined by a pair of integers (**Vi** and **Ci**), denoting that the counties **Ci** attacked a city **Vi**. Sometimes, the counties could attack their own cities, by a mistake.

Sergey studies the history of Ancient ChefLand. Now he read about the attacks of the cities and now he wonders to know the distance to the closest city to the attacked one, which belongs to the attacker county. In other words, for each query he wants to find minimal distance to **any** city of the county **Ci** from the city **Vi**. Please help him to find these values.

### Input

The first line of the input contains two space-separated integer numbers **N** and **M**, denoting the number of the cities and the number of counties.

The second line contains **N** space separated integer numbers **Oi**, denoting the county owning the **i**th city.

Each of the following **N-1** lines contains two space-separated numbers **Xj Yj**, denoting a road connecting the cities **Xj** and **Yj**.

The following line contains an integer number **Q**, denoting the number of attacks.

Each of **Q** following lines contains two space-separated integers **Vi Ci**, denoting an attack. For this pair of integers you will need to find the minimal distance from any city belonging to the county **Ci** to the city **Vi**.

### Output

For each of **Q** queries, output the sought minimal distance on a separate line.

### Constraints

- **1** ≤ **M** ≤ **N**
- **1** ≤ **Oi** ≤ **M**
- **1** ≤ **Ci** ≤ **M**
- **1** ≤ **Vi** ≤ **N**
- **1** ≤ **Xi, Yi** ≤ **N**
- For each county there is at least one city, belonging to this county.
- Subtask 1 (15 points): **1** ≤ **N, Q** ≤ **100**
- Subtask 2 (26 points): **1** ≤ **N, Q** ≤ **4000**
- Subtask 3 (25 points): **1** ≤ **N, Q** ≤ **105**
- Subtask 4 (34 points): **1** ≤ **N, Q** ≤ **5 × 105**. The time limit for this subtask is **5** seconds.
- The time limit for subtasks **1**-**3** is **2** seconds.

### Example

```
<b>Input:</b>
<tt>6 5
3 5 1 1 4 2
3 6
2 3
4 3
6 1
3 5
6
3 5
2 3
2 1
4 4
1 1
4 2</tt>

<b>Output:</b>
<tt>1
3
1
2
2
2</tt>

```