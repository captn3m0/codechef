---
category_name: medium
problem_code: SUMPP
problem_name: 'Provinces of ChefLand'
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
problem_tester: null
date_added: 5-07-2016
tags:
    - xcwgf666
time:
    view_start_date: 1468063200
    submit_start_date: 1468063200
    visible_start_date: 1468063200
    end_date: 1735669800
    current: 1493557936
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL16/mandarin/SUMPP.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL16/russian/SUMPP.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL16/vietnamese/SUMPP.pdf) as well.

Following the example of ByteLand, the King of ChefLand has decided to divide the country into provinces.

The map of ChefLand is a rectangular matrix consisting of **N** rows and **M** columns. The cell at the crossing of the **i**th row and the **j**th column denotes a single ChefLand city. So, there are **N** × **M** cities. There are **Ai, j** people living in the city at the crossing of the **i**th row and the **j**th column.

Without enough contemplation, the King has decided that any connected region, consisting of exactly **K** cities should form a province. Two cities are said to be connected to each other if their corresponding cells share a side. The set of cities is said to be a **connected region**, if you can get from any city of the set to any other city of the set by moving only via side-adjacent cities from the set. It appears that a single city can belong to more than one province, but the King is happy with it: after all, the more provinces - the better.

Now the King wants to calculate the **productivity number** of the kingdom. This number is defined to be the product of the populations of all the provinces. The population of a province is the sum of the populations of all the cities in the province.

The King's servants had finally found the **productivity number**. However, the King is not sure whether they're correct or not. So he asks you to help him to check this. Please find the productivity number of the kingdom. Since it can be quite large, output it modulo **109+7**.

### Input

The first line of the input contains three space-separated integers: **N, M, K**, denoting the number of rows in the map, the number of columns in the map and the number of cities in one province.

Each of the following **N** lines contain **M** space-separated integers, denoting the populations of the cities.

### Output

Output a single line containing the productivity value of the kingdom.

### Constraints

- **1** ≤ **N** ≤ **100**
- **1** ≤ **M** ≤ **10**
- **1** ≤ **K** ≤ **min(10, N \* M)**
- **1** ≤ **Ai, j** ≤ **1000**

### Example

```
<b>Input:</b>
<tt>2 2 2
1 2
3 4</tt>

<b>Output:</b>
<tt>504</tt>

```
### Explanation

Here are all the provinces:

Province **1**, population **4**:

```
<tt><b>1</b> 2
<b>3</b> 4</tt>
```
Province **2**, population **3**:

```
<tt><b>1 2</b>
3 4</tt>
```
Province **3**, population **6**:

```
<tt>1 <b>2</b>
3 <b>4</b></tt>
```
Province **4**, population **7**:

```
<tt>1 2
<b>3 4</b></tt>
```
Since the productivity number is a product of all the populations, we get **4 × 3 × 6 × 7 = 504**.