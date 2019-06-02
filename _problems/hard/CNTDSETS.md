---
category_name: hard
problem_code: CNTDSETS
problem_name: 'Counting D-sets'
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
max_timelimit: '0.3'
source_sizelimit: '50000'
problem_author: mugurelionut
problem_tester: null
date_added: 28-08-2013
tags:
    - combinatorics
    - hard
    - inclusn
    - jan14
    - mugurelionut
editorial_url: 'http://discuss.codechef.com/problems/CNTDSETS'
time:
    view_start_date: 1389605400
    submit_start_date: 1389605400
    visible_start_date: 1389605400
    end_date: 1735669800
    current: 1493556662
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/JAN14/mandarin/CNTDSETS.pdf) and [Russian](http://www.codechef.com/download/translated/JAN14/russian/CNTDSETS.pdf).

Chef likes points located at integer coordinates in a space having **N** dimensions. In particular, he likes sets of such points having diameter **exactly equal to D** (called D-sets). The diameter of a set of points is the maximum distance between any pair of points in the set. The distance between two points **(a1,a2,...,aN)** and **(b1,b2,...,bN)** is **max{|a1-b1|, |a2-b2|, ..., |aN-bN|}**.

Chef would like to know how many D-sets exist. However, he soon realized that, without any extra constraints, there is an infinite number of D-sets. Thus, he would only like to count the number of classes of D-sets, such that any two D-sets which belong to the same class are equivalent under translation. To be more precise, two D-sets **X** and **Y** are considered equivalent (and belong to the same class) if:

- they contain the same number of points **AND**
- there exists a tuple of **N** integer numbers **(t1, ..., tN)** such that by translating each point of **X** by the amount **ti** in dimension **i** (**1≤i≤N**) we obtain the set of points **Y**.

Let's consider **N=2**, **D=4** and the following sets of points **X={(1,2), (5,5), (4,3)}** and **Y={(2,5), (5,6), (6,8)}**. Let's consider now the tuple **(1,3)**. By translating each point of **X** by the amounts specified by this tuple we obtain the set **{(2,5), (6,8), (5,6)}**, which is exactly the set **Y**. Thus, the two sets **X** and **Y** are equivalent and belong to the same class.

Help Chef find the number of classes of D-sets **modulo 1000000007** (**109+7**).

### Input

The first line of input contains the number of test cases **T**. Each of the next **T** lines contains two space-separated integers describing a test case: **N** and **D**.

### Output

For each test case (in the order given in the input), output the number of classes of D-sets **modulo 1000000007**.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **1000**
- **1** ≤ **D** ≤ **1000000000** (**109**)

### Example

<pre><b>Input:</b>
5
1 10
2 1
2 10
3 1
3 3
</pre>
<pre>
<b>Output:</b>
512
9
498134775
217
548890725
</pre>
### Explanation

**Example case 1:**
When **N=1** all the points are arranged in a line. In order to have a diameter equal to **10** each D-set must contain two points at distance **10**. Between two such points there may be up to **9** points which may belong to the D-set or not. Thus, there are **29=512** classes of D-sets.

**Example case 2:**
There are **9** classes of D-sets. One D-set from each class is given below:

- {(0,0), (0,1)}
- {(0,0), (1,0)}
- {(0,0), (1,1)}
- {(0,1), (1,0)}
- {(0,0), (0,1), (1,0)}
- {(0,0), (0,1), (1,1)}
- {(0,0), (1,0), (1,1)}
- {(0,1), (1,0), (1,1)}
- {(0,0), (0,1), (1,0), (1,1)}
