---
category_name: medium
problem_code: LFIVES
problem_name: 'Lucky Fives'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: stzgd
date_added: 10-05-2014
tags:
    - cook57
    - dynamic
    - fenwick
    - kostya_by
    - medium
editorial_url: 'http://discuss.codechef.com/problems/LFIVES'
time:
    view_start_date: 1429470000
    submit_start_date: 1429470000
    visible_start_date: 1429470000
    end_date: 1735669800
    current: 1493557747
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK57/mandarin/LFIVES.pdf) and [Russian](http://www.codechef.com/download/translated/COOK57/russian/LFIVES.pdf) as well.

Everybody knows, that five is an extremely lucky number. It's even more lucky than seven!

For instance, five is widely used in Chinese culture. The famous Chinese Five Elements refer to Gold, Wood, Water, Fire and Earth, which are regarded as the basis of the whole world. In folklore, Chinese people hold the mutual restriction of the five elements: “wood restricting earth, earth restricting water, water restricting fire, fire restricting gold and gold restricting wood”. This mutual restriction principle is seriously stressed by the ancient Chinese people to show that everything in the world is mutually affected.

You see how important the number is? That's why this number will be under our consideration in this problem!

You are given a sequence **a1**, **a2**, ..., **aN** of non-negative integers. Your task is to process **Q** queries of the following format: each query is described by two integers **L ≤ R** and asks to calculate the number of triples (**i**, **j**, **k**), such that **L** < **i** < **j** < **k** < **R** and **aL** > **ai** < **aj** > **ak** < **aR**.

### Input

The first line of the input contains two integers **N** and **Q** denoting the size of the sequence and the number of the queries to process.

The second line contains **N** non-negative integers **a1**, **a2**, ..., **aN**.

Each of the next **Q** lines contains two integers **L** and **R** describing the corresponding query.

### Output

For each query, output a single line containing one integers: the number of triples as described above.

### Constraints

- 1 ≤ **N** ≤ 2000
- 1 ≤ **Q** ≤ 100000
- 0 ≤ **ai** ≤ 109
- 1 ≤ **L** ≤ **R** ≤ **N** for each query in the input

### Example

```
<b>Input:</b>
10 3
5 5 1 1 5 5 1 1 5 5
1 10
2 9
1 1

<b>Output:</b>
8
8
0


```
### Explanation

 The following triples(**i**, **j**, **k**) are valid for the first and the second queries:

- (3, 5, 7)
- (3, 5, 8)
- (3, 6, 7)
- (3, 6, 8)
- (4, 5, 7)
- (4, 5, 8)
- (4, 6, 7)
- (4, 6, 8)